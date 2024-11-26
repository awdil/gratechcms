<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ComponentContent;
use App\Models\Language;
use App\Models\PageComponent;
use App\Services\ComponentService;
use App\Traits\FileManageTrait;
use Arr;
use DB;
use Illuminate\Http\Request;
use Log;
use Validator;

class ItemController extends Controller
{
    use FileManageTrait;

    public function __construct()
    {
        // Define permissions for each action
        $permissions = [
            'create' => 'component-manage',
            'store' => 'component-manage',
            'edit' => 'component-manage',
            'update' => 'component-manage',
            'destroy' => 'component-manage',
        ];
        $this->permissionAuthorization($permissions);
    }

    public function create(Request $request)
    {

        $componentId = $request->component_id;
        $component = PageComponent::find($componentId);

        $fields = json_decode($component->content_fields);

        return view('backend.page.component.item.create', compact('fields', 'componentId'));
    }

    public function store(Request $request, ComponentService $componentService)
    {
        // Validate the request
        $validatedData = Validator::make($request->all(), [
            'component_id' => 'required',
            'fields' => 'required',
        ]);

        // If validation fails, return with an error
        if ($validatedData->fails()) {
            notifyEvs('error', $validatedData->errors()->first());

            return redirect()->back()->withInput();
        }

        // Begin transaction
        try {
            DB::beginTransaction();

            // Get the validated data
            $input = $validatedData->getData();

            $componentId = $request->component_id;
            $fieldData = (array) json_decode($input['fields'], true);
            $filteredRequestData = Arr::except($input, ['_token', 'component_id', 'fields', 'files']);

            // Update the data using the component service
            $modifyData = $componentService->updateDataModify($request, $filteredRequestData, $fieldData, null);

            // Create new component content
            $componentContent = new ComponentContent;
            $componentContent->component_id = $componentId;
            $componentContent->content = json_encode([config('app.static_default_language') => $modifyData]);

            // Save the component content
            $componentContent->save();

            // Commit the transaction if all operations succeed
            DB::commit();

            // Notify of success
            notifyEvs('success', __('Page Component Item Created Successfully'));

        } catch (\Exception $e) {
            // Rollback the transaction if any exception occurs
            DB::rollBack();

            // Log the error and notify the user
            Log::error('Component Content Creation Failed: '.$e->getMessage());
            notifyEvs('error', __('Failed to create component item. Please try again.'));

            return redirect()->back()->withInput();
        }

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $componentContent = ComponentContent::findOrFail($id);
        $data = json_decode($componentContent->content);

        $languages = Language::where('status', 1)->pluck('name', 'code');
        $defaultOtherLanguageComponentMainData = collect($data->en)->reject(function ($item) {
            return isset($item->type) && $item->type === 'img' || isset($item->trans) && $item->trans === false;
        })->all();

        $modifiedData = $languages->map(function ($name, $code) use ($defaultOtherLanguageComponentMainData, $data) {
            return $data->$code ?? $defaultOtherLanguageComponentMainData;
        });

        $componentId = $componentContent->component_id;

        if (request()->ajax()) {
            return view('backend.page.component.partial._edit_item', compact('modifiedData', 'id', 'languages'))->render();
        }

        return view('backend.page.component.item.edit', compact('modifiedData', 'id', 'componentId', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, ComponentService $componentService)
    {
        // Extract necessary data from the request
        $requestData = $request->except(['_token', '_method', 'files', 'lang']);
        $lang = $request->lang;

        try {
            // Begin the transaction
            DB::beginTransaction();

            // Find the component by its ID
            $component = ComponentContent::find($id);
            if (! $component) {
                throw new \Exception('Component not found.');
            }

            // Retrieve and modify the existing content
            $oldData = modify_trans_data($component->content);
            $modifyData = $componentService->updateDataModify($request, $requestData, $oldData, $lang);

            // Update the component's content
            $component->content = $modifyData;

            // Save the component
            $component->save();

            // Commit the transaction if everything works well
            DB::commit();

            // Notify success
            notifyEvs('success', __('Page Component Item Updated Successfully'));
        } catch (\Exception $e) {
            // Rollback the transaction if an error occurs
            DB::rollBack();

            // Log the error and notify the user
            Log::error('Component Update Failed: '.$e->getMessage());
            notifyEvs('error', __('Failed to update component item. Please try again.'));

            return redirect()->back()->withInput();
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $component = ComponentContent::find($id);
        $items = json_decode($component->content, true)[config('app.static_default_language')];
        foreach ($items as $item) {
            if ($item['type'] == 'img') {
                $this->deleteImage($item['value'] ?? '');
            }
        }
        $component->delete();

        return response(['status' => 'success', 'message' => __('Page Component Item Deleted Successfully')], 200);
    }
}
