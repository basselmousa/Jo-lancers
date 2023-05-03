<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Melody Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset("admin/vendors/iconfonts/font-awesome/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("admin/vendors/css/vendor.bundle.base.css")}}">
    <link rel="stylesheet" href="{{asset("admin/vendors/css/vendor.bundle.addons.css")}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset("admin/css/style.css")}}">
    <!-- endinject -->
    {{--    <link rel="shortcut icon" href="../../images/favicon.png" />--}}
    <style>
        .invalid-feedback{
            display: block !important;
        }
    </style>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            {{--                            <img src="../../images/logo.svg" alt="logo">--}}
                        </div>
                        <h4>Welcome Back</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>
                        <form method="POST" action="{{ route('provider.auth.login') }}">
                            @csrf

                            <div class="form-group">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                       placeholder="Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group">

                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        {{--                                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                        {{--                                            {{ __('Forgot Your Password?') }}--}}
                                        {{--                                        </a>--}}
                                    @endif

                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="{{ route("provider.auth.register") }}" class="text-primary">Create</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset("admin/vendors/js/vendor.bundle.addons.js")}}"></script>
<script src="{{asset("admin/vendors/js/vendor.bundle.base.js")}}"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="{{asset("admin/js/off-canvas.js")}}"></script>
<script src="{{asset("admin/js/hoverable-collapse.js")}}"></script>
<script src="{{asset("admin/js/misc.js")}}"></script>
<script src="{{asset("admin/js/settings.js")}}"></script>
<script src="{{asset("admin/js/todolist.js")}}"></script>
<!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
</html>



