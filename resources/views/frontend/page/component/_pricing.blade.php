@php
	$planList = \App\Models\Plan::getAllWithCache();
@endphp
@push('style')
	@include('frontend.page.component.partials._pricing_style')
@endpush
<section class="pricing-area pt-120 pb-120">
	<div class="pricing__shape-up wow slideInLeft d-none d-sm-block" data-wow-delay="00ms"
	     data-wow-duration="1500ms">
		<img class="sway_Y__animationY" src="{{ asset($data->content->shape_up->value) }}" alt="image">
	</div>
	<div class="pricing__shape-down wow slideInLeft d-none d-sm-block" data-wow-delay="200ms"
	     data-wow-duration="1500ms">
		<img class="sway_Y__animation" src="{{ asset($data->content->shape_down->value) }}" alt="image">
	</div>
	<div class="pricing__shape">
		<img class="sway_Y__animationY" src="{{ asset($data->content->shape->value) }}" alt="image">
	</div>
	<div class="container">
		<div class="section-header text-center mb-60">
			<div class="row justify-content-center mb-3 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
				<input type="checkbox" name="plan_type" id="plan-toggle" class="toggleCheckbox" checked />
				<label for="plan-toggle" class="toggleContainer">
					<div>{{ __('Yearly') }}</div>
					<div>{{ __('Monthly') }}</div>
				</label>

			</div>

			<h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
				{{ $data->content->sub_heading->value }}
			</h2>
		</div>
		<div class="row g-4">
			@foreach($planList as $plan)
                <form method="get" class="col-xl-4 col-lg-6 col-md-6" action="{{ route('user.subscription.request') }}">
                    <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                    <input type="hidden" name="plan_type" class="plan-type" value="{{ \App\Constants\PlanType::MONTHLY }}">
                    <div class="wow fadeInUp" data-wow-delay="{{$loop->index}}00ms"
                         data-wow-duration="1500ms">
                        <div class="pricing__item">
                            <div class="item-shape">
                                <img src="{{ asset($plan->background_shape) }}" alt="shape">
                            </div>
                            <div class="pricing-head">
                                <div>
                                    <h4 class="text-white mb-10">{{ _tr($plan->name) }}</h4>
                                    <h2 class="pricing-monthly">
                                        {{ setting('currency_symbol') . $plan->monthly_price }}<span>/{{ __('Monthly') }}</span>
                                    </h2>
                                    <h2 class="pricing-yearly">
                                        {{ setting('currency_symbol') . $plan->yearly_price }}<span>/{{ __('Yearly') }}</span>
                                    </h2>
                                </div>
                                <div class="pricing-icon" data-background="{{ asset('general/static/pricing-icon-bg.png') }}">
                                    <img src="{{ asset($plan->icon) }}" alt="icon">
                                </div>
                            </div>
                            <ul>
                                @foreach(_tr($plan->features) as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                            <button type="submit" class="btn-one d-block text-center w-100">{{ __('Choose Plan') }} <i
                                        class="fa-regular fa-arrow-right-long"></i></button>
                        </div>
                    </div>
                </form>
			@endforeach

		</div>
	</div>
</section>
@push('script')
	@include('frontend.page.component.partials._pricing_script')
@endpush
