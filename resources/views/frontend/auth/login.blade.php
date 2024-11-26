@extends('frontend.layouts.user.auth')
@section('title',__('Login'))
@section('user-auth-content')
<div class="card card-md">
    <div class="card-body">
        <h2 class="mt-4 text-center">👋 {{ __('Welcome Back!') }}</h2>
        <p class="mb-4 text-muted text-center">{{ __('Sign in to continue with') }} {{ setting('site_title') }} {{ __('User Panel') }}</p>
        @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show d-flex align-items-center" role="alert">
                <div>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('login') }}" method="post" autocomplete="off" novalidate>
            @csrf
            <div class="mb-3">
                <label class="form-label" for="email">{{ __('Email address') }}</label>
                <div class="input-group input-group-flat">
                    <span class="input-group-text icon-muted">
                        <x-svg i="mail"/>
                    </span>
                    <input type="email" name="email" id="email" class="form-control"  placeholder="your@email.com" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-2">
                <label class="form-label" for="password">
                    {{ __('Password') }}
                    <span class="form-label-description">
                        <a href="{{ route('password.request') }}">{{ __('I forgot password') }}</a>
                    </span>
                </label>
                <div class="input-group input-group-flat">
                    <span class="input-group-text icon-muted">
                        <x-svg i="lock"/>
                    </span>
                    <input type="password" name="password"  id="password" class="form-control password"
                           placeholder="Your password" autocomplete="off" required>
                    <span class="input-group-text">
                        <a href="#" class="link-secondary" id="togglePassword">
                            <span class="password-show"><x-svg i="eye-2"/></span>
                            <span class="password-hidden d-none"><x-svg i="eye-off"/></span>
                        </a>
                    </span>
                </div>
            </div>
            <div class="mb-2 mt-2">
                <label class="form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    <span class="form-check-label">{{ __('Remember me on this device') }}</span>
                </label>
            </div>
            @if(config('services.recaptcha.status'))
                <div class="g-recaptcha mt-4 mb-4" data-sitekey={{config('services.recaptcha.key')}}></div>
            @endif
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100"> <x-svg i="login"/> {{ __('Sign in') }}</button>
            </div>
        </form>
    </div>
</div>
<div class="text-center text-secondary mt-3">
    {{ __("Don't have an account yet") }}? <a href="{{ route('register') }}" tabindex="-1">{{ __('Sign Up') }}</a>
</div>
@endsection
@section('user-script')
    <script async src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        $(function() {
            'use strict';

            $('#togglePassword').on('click', function(e) {
                e.preventDefault();

                let passwordField = $('#password');
                let showIcon = $(this).find('.password-show');
                let hideIcon = $(this).find('.password-hidden');

                let isPassword = passwordField.attr('type') === 'password';
                passwordField.attr('type', isPassword ? 'text' : 'password');

                showIcon.toggleClass('d-none', isPassword);
                hideIcon.toggleClass('d-none', !isPassword);
            });
        });


    </script>
    @endsection
