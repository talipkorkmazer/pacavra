@php use App\Helpers\BladeHelper; @endphp
@extends('layouts.default')
@section('content')
    <section class="page-section">
        <div class="container">

            <!-- Nav Tabs -->
            <div class="align-center mb-70 mb-xxs-50 wow fadeInUpShort">
                <ul class="nav nav-tabs tpl-minimal-tabs animate" id="myTab-account" role="tablist">

                    <li class="nav-item" role="presentation">
                        <a href="#account-login" class="nav-link active" id="account-login-tab" data-bs-toggle="tab"
                           role="tab" aria-controls="account-login" aria-selected="true">Login</a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a href="#account-registration" class="nav-link" id="account-registration-tab"
                           data-bs-toggle="tab" role="tab" aria-controls="account-registration" aria-selected="false">Registration</a>
                    </li>

                </ul>
            </div>
            <!-- End Nav Tabs -->

            <!-- Tab panes -->
            <div class="tab-content tpl-minimal-tabs-cont section-text wow fadeInUpShort" id="myTabContent-1">

                <div class="tab-pane fade show active" id="account-login" role="tabpanel"
                     aria-labelledby="account-login-tab">

                    <!-- Login Form -->
                    <div class="row">
                        <div class="col-md-6 offset-md-3">

                            <form class="form contact-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="clearfix">

                                    <!-- Name -->
                                    <div class="form-group">
                                        <label for="email">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email"
                                               class="input-lg round form-control @error('email') is-invalid @enderror"
                                               name="email" value="{{ old('email') }}" required autocomplete="email"
                                               autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input id="password" type="password"
                                               class="input-lg round form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password">
                                    </div>

                                </div>

                                <div class="pt-10">
                                    <button type="submit" class="submit_btn btn btn-mod btn-large btn-round btn-full"
                                            id="login-btn">
                                        {{ __('Login') }}
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>
                    <!-- End Login Form -->

                </div>

                <div class="tab-pane fade" id="account-registration" role="tabpanel"
                     aria-labelledby="account-registration-tab">

                    <!-- Registry Form -->
                    <div class="row">
                        <div class="col-md-6 offset-md-3">

                            <form class="form contact-form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="clearfix">

                                    <!-- Email -->
                                    <div class="form-group">
                                        <label for="email">{{ __('E-Mail Address') }}</label>

                                        <input id="email" type="email"
                                               class="input-lg round form-control @error('email') is-invalid @enderror"
                                               name="email" value="{{ old('email') }}" required autocomplete="email"
                                               autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <!-- Username -->
                                    <div class="form-group">
                                        <label for="name">{{ __('Name') }}</label>
                                        <input id="name" type="text"
                                               class="input-lg round form-control @error('name') is-invalid @enderror"
                                               name="name" value="{{ old('name') }}" required autocomplete="name">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group">
                                        <label for="password">{{ __('Password') }}</label>

                                        <input id="password" type="password"
                                               class="input-lg round form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <!-- Re-enter Password -->
                                    <div class="form-group">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                        <input id="password-confirm" type="password" class="input-lg round form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>

                                </div>

                                <!-- Send Button -->
                                <div class="pt-10">
                                    <button type="submit" class="submit_btn btn btn-mod btn-large btn-round btn-full">
                                        {{ __('Register') }}
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>
                    <!-- End Registry Form -->

                </div>

            </div>

        </div>
    </section>
@endsection
