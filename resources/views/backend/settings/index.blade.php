@extends('backend.layouts.app')
@section('title')
    {{ __('Settings') }}
@endsection
@section('content')
    <div class="fs-2 fw-semibold mb-3" data-coreui-i18n="dashboard">@yield('setting_title')</div>
    <div class="card px-3 py-4">
        <div class="responsive-tabs px-2">
            <ul class="nav nav-pills bg-light justify-content-start flex-nowrap">
                @foreach(config('admin_menus')[5]['menus'][0]['sub_menus'] as $menu)
                    <li class="nav-item  pe-1 mb-0">
                        <a class="nav-link {{ isActive($menu['route'],$menu['params'] ?? [] ) }}" aria-current="page"
                           href="{{ route($menu['route'], $menu['params'] ?? []) }}">
                            <x-icon name="{{ $menu['icon'] }}" height="18" width="18"/>
                            <span>{{ title($menu['label']) }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="tab-content py-3 mt-3">
            @yield('setting_content')
        </div>
    </div>

@endSection

