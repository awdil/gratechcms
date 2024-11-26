@php
	$serviceList = \App\Models\Services::getAllWithCache($data->content->limit_list->value);
@endphp
<section class="service-inner-area pt-120 pb-120">
	<div class="container">
		<div class="row g-4">
			@foreach($serviceList as $service)
			<div class="col-lg-4 col-md-6">
				<div class="service-two__item">
					<div class="image">
						<img class="component-blog-cover" src="{{ asset($service->cover) }}" alt="image">
					</div>
					<div class="service-two__content">
						<div class="icon">
							<img src="{{ asset($service->light_icon) }}" alt="icon">
						</div>
						<div class="shape"><img src="{{ asset('general/static/shape/service-two-item-shape.png') }}"
						                        alt="shape"></div>
						<h4><a href="{{ route('service.details', ['slug' => $service->slug]) }}" class="primary-hover">{{ _tr($service->name) }}</a></h4>
						<p>{{ \Str::limit(filterRichText(_tr($service->description)), $data->content->limit_summary->value) }}</p>
						<div class="d-flex justify-content-between align-items-center">
							<a class="read-more-btn" href="{{ route('service.details', ['slug' => $service->slug]) }}">{{ __('Read More') }} <i class="fa-regular fa-arrow-right-long"></i></a>
							<span class="read-more-btn text-end ">{{ __('Price: '). setting('currency_symbol').$service->price }}</span>
						</div>
					</div>
				</div>
			</div>
            @endforeach
		</div>
	</div>
</section>
