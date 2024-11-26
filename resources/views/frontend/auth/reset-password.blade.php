@extends('frontend.layouts.user.auth')
@section('title')
    {{ __('Password Reset') }}
@endsection
@section('user-auth-content')
    <form method="POST" action="{{ route('password.store') }}" class="mt-4">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div class="form-group mb-4">
            <label for="email" class="form-label">{{ __('Your Email') }}</label>
            <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <x-svg i="mail"/>
                                        </span>
                <input type="email" name="email" class="form-control" value="{{ old('email', $request->email) }}" placeholder="Email" id="email" autofocus required>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group mb-4">
                <label for="password" class="form-label">{{ __('New Password') }}</label>
                <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <x-svg i="lock"/>
                                            </span>
                    <input type="password" name="password" placeholder="New Password" class="form-control" id="password" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group mb-4">
                <label for="password" class="form-label">{{ __('Confirm Password') }}</label>
                <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <x-svg i="lock"/>
                                            </span>
                    <input type="password" placeholder="Confirm Password" name="password_confirmation" class="form-control" id="password" required>
                </div>
            </div>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary"> <x-svg i="login"/> {{ __('Reset Password') }}</button>
        </div>
    </form>
@endsection
