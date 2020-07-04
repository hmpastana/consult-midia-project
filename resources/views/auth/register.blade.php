<!doctype html>
<html lang="en">

    <head>
        @include('layouts.head')
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
                        Sign up
                    </h1>

                    <!-- Subheading -->
                    <p class="text-muted text-center mb-5">
                        Free access to our dashboard.
                    </p>

                    <!-- Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Name -->
                        <div class="form-group">

                            <!-- Label -->
                            <label>
                                Name
                            </label>

                            <!-- Input -->
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <!-- Email address -->
                        <div class="form-group">
                            <!-- Label -->
                            <label>
                                Email
                            </label>

                            <!-- Input -->
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <!-- Password -->
                        <div class="form-group">

                            <!-- Label -->
                            <label>
                                Password
                            </label>

                            <!-- Input group -->
                            <div class="input-group input-group-merge">

                                <!-- Input -->
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" name="password" required autocomplete="new-password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <!-- Password Confirmation -->
                        <div class="form-group">

                            <!-- Label -->
                            <label>
                                Confirm Password
                            </label>

                            <!-- Input group -->
                            <div class="input-group input-group-merge">

                                <!-- Input -->
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password"  required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Submit -->
                        <button class="btn btn-lg btn-block btn-primary mb-3">
                            Sign up
                        </button>

                        <!-- Link -->
                        <div class="text-center">
                            <small class="text-muted text-center">
                                Already have an account? <a href="sign-in-illustration.html">Log in</a>.
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
