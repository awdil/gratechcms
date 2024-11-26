@extends('backend.layouts.app')
@section('content')

	{{--Deposit Header Dynamic Content Show Here--}}
	@yield('order_header')

	<div class="card px-3 py-4">
		<ul class="nav nav-pills bg-gray-100 mx-2">

			{{-- Deposit Menu Load From admin_menus Config File --}}
			@foreach(config('admin_menus')[3]['menus'][3]['sub_menus'] as $menu)
				<li class="nav-item  pe-0">
					<a class="nav-link {{ isActive($menu['route'],$menu['params'] ?? [] ) }}" aria-current="page" href="{{ route($menu['route'], $menu['params'] ?? []) }}">
						<x-svg i="{{ $menu['icon'] }}" height="18" width="18" class="me-1"/> {{ title($menu['label']) }}
					</a>
				</li>
			@endforeach
		</ul>

		<div>
			{{-- Deposit Dynamic Content Show Here --}}
			@yield('subscription_content')
		</div>
	</div>
@endSection
