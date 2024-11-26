<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse " data-simplebar>
    <div class="sidebar-inner px-3 pt-3">
        @include('backend.layouts.partials._sidebar_user_card')

        <ul class="nav flex-column pt-3 pt-md-0">
            {{-- Sidebar Logo --}}
            <li class="nav-item d-none d-md-block mb-3">
                <a href="{{ route('admin.dashboard') }}" class="nav-link d-flex align-items-center">
                    <span class="">
                        <img src="{{ asset(setting('light_logo')) }}" height="40" alt="Volt Logo">
                    </span>
                </a>
            </li>

            {{-- Admin Menus --}}
            @foreach(config('admin_menus') as $element)

                @php
                    // Collect all permissions from menus and submenus
                    $permissions = collect($element['menus'])
                        ->flatMap(function ($menu) {
                            return $menu['type'] == 'single'
                                ? [$menu['permission']]
                                : collect($menu['sub_menus'])->pluck('permission')->toArray();
                        })
                        ->unique()
                        ->toArray(); // Convert collection back to an array
                @endphp

                @canany($permissions)
                    @isset($element['label'])
                        <p class="nav-label">{{ Str::title($element['label']) }}</p>
                    @endisset
                @endcanany
                @foreach($element['menus'] as $menu)
                    @if($menu['type'] == 'single')
                        @can($menu['permission'])
                            <li class="nav-item {{ isActive($menu['route'],$menu['params'] ?? []) }} @isset($menu['class']) {{ $menu['class'] }} @endisset">
                                <a href="{{ route($menu['route'],$menu['params'] ?? []) }}"
                                   class="nav-link d-flex align-items-center">
                                <span class="sidebar-icon">
                                     <x-svg i="{{ $menu['icon'] }}" height="20" width="20"/>
                                </span>
                                    <span class="sidebar-text m-0 p-0">
                                    {{ __($menu['label']) }}
                                        @isset($menu['badge'])
                                            <span class="badge badge-sm bg-secondary ms-1 text-gray-800">
                                            {{ __($menu['badge']) }}
                                        </span>
                                        @endisset
                                </span>
                                </a>
                            </li>
                        @endcan
                    @else
                        @canany(array_column($menu['sub_menus'],'permission'))
                            <li class="nav-item">
                                <a href="#{{ Str::kebab($menu['label']) }}"
                                   class="nav-link d-flex justify-content-between align-items-center collapsed"
                                   data-bs-toggle="collapse" data-bs-target="#{{ Str::kebab($menu['label']) }}"
                                   aria-expanded="{{ isActive(array_column($menu['sub_menus'], 'route')) ? 'true' : 'false' }}">
                                <span class="d-flex align-items-center">
                                    <span class="sidebar-icon">
                                        <x-svg i="{{ $menu['icon'] }}" height="20" width="20"/>
                                    </span>
                                    <span class="sidebar-text">{{ __($menu['label']) }}</span>
                                </span>
                                    <span class="link-arrow">
                                    <x-svg i="arrow-right"/>
                                </span>
                                </a>
                                <div id="{{ Str::kebab($menu['label']) }}"
                                     class="multi-level collapse {{ isActive(array_column($menu['sub_menus'], 'route'), null, 'show') }}">
                                    <ul class="flex-column nav">
                                        @foreach($menu['sub_menus'] as $subMenu)
                                            @can($subMenu['permission'])
                                                <li class="nav-item {{ isActive($subMenu['route'], $subMenu['params'] ?? []) }}">
                                                    <a href="{{ route($subMenu['route'], $subMenu['params'] ?? []) }}"
                                                       class="nav-link d-flex align-items-center px-3 py-2">
                                                <span class="sub-icon">
                                                    <x-svg i="sub" width="20" height="20"/>
                                                </span>
                                                        <span class="sidebar-text sidebar-sub-text mx-1">{{ __($subMenu['label']) }}</span>
                                                    </a>
                                                </li>
                                            @endcan
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        @endcanany
                    @endif
                @endforeach
            @endforeach
        </ul>
    </div>
</nav>


