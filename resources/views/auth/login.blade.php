<!doctype html>
<html lang="en">

<head>
    @include('layouts.head')
    <title>@lang('titles.sign_in')</title>

</head>

<body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

    <!-- CONTENT
        ================================================== -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">

                <!-- Image -->
                <div class="text-center">
                    <img src="{{ asset('dashkit/src/assets/img/illustrations/happiness.svg')}}" alt="..." class="img-fluid">
                </div>

            </div>
            <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">

                <!-- Heading -->
                <h1 class="display-4 text-center mb-3">
                    @lang('titles.sign_in')
                </h1>

                <!-- Subheading -->
                <p class="text-muted text-center mb-5">
                    @lang('titles.free_access_to_our_dashboard')
                </p>

                <!-- Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email address -->
                    <div class="form-group">

                        <!-- Label -->
                        <label>@lang('titles.email_address')</label>

                        <!-- Input -->
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="name@address.com" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <!-- Password -->
                    <div class="form-group">

                        <div class="row">
                            <div class="col">

                                <!-- Label -->
                                <label>@lang('titles.password')</label>

                            </div>
                            <div class="col-auto">

                                <!-- Help text -->
                                <a href="password-reset-illustration.html" class="form-text small text-muted">
                                    @lang('titles.forgot_password')
                                </a>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Input group -->
                        <div class="input-group input-group-merge">

                            <!-- Input -->
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="@lang('titles.enter_your_password')">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-lg btn-block btn-primary mb-3">
                        @lang('titles.sign_in')
                    </button>

                    <!-- Link -->
                    <div class="text-center">
                        <small class="text-muted text-center">
                            @lang('titles.dont_have_an_account_yet') <a href="{{ route('register') }}">@lang('titles.sign_up')</a>.
                        </small>
                    </div>

                </form>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->

    <!-- JAVASCRIPT
        ================================================== -->
    @include('layouts.scripts')

</body>

</html>
