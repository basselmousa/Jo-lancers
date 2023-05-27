<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
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
        .invalid-feedback {
            display: block !important;
        }
    </style>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row w-100">
                <div class="col-lg-8 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            {{--                            <img src="../../images/logo.svg" alt="logo">--}}
                        </div>
                        <h4>New here?</h4>
                        <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="form-group col-lg-5">
                                    <input id="name" type="text"
                                           class="form-control @error('first_name') is-invalid @enderror"
                                           name="first_name" value="{{ old('first_name') }}"
                                           required
                                           placeholder="First Name"
                                           autocomplete="first_name" autofocus>
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-5">
                                    <input id="name" type="text"
                                           class="form-control @error('second_name') is-invalid @enderror"
                                           name="second_name" value="{{ old('second_name') }}" required
                                           placeholder="Second Name"

                                           autocomplete="second_name" autofocus>

                                    @error('second_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group  col-lg-5">
                                    <input id="name" type="text"
                                           class="form-control @error('last_name') is-invalid @enderror"
                                           name="last_name" value="{{ old('last_name') }}"
                                           placeholder="Last Name"

                                           required autocomplete="last_name" autofocus>

                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group  col-lg-5">
                                    <input id="name" type="text"
                                           class="form-control @error('username') is-invalid @enderror"
                                           placeholder="Username"

                                           name="username" value="{{ old('username') }}" required autocomplete="name"
                                           autofocus>

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group  col-lg-5">
                                    <input id="name" type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           placeholder="Email"

                                           name="email" value="{{ old('email') }}" required autocomplete="name"
                                           autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group ">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password"
                                               placeholder="Password"

                                               required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group ">
                                        <input id="password-confirm" type="password" class="form-control"
                                               placeholder="Confirm Password"

                                               name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group col-lg-5">
                                    <select class="form-control" name="country">
                                        <option value="JORDAN" selected readonly>Jordan</option>
                                    </select>
                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-5">

                                    <select class="form-control" name="city">
                                        <option value="" selected disabled>Select City</option>

                                        @foreach(\App\Http\Controllers\Cities::$cities as $city)
                                            <option
                                                value="{{ $city }}" {{ old("city") == $city ? 'selected' : '' }}>{{ $city }}</option>

                                        @endforeach

                                    </select>
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-5">
                                    <input id="name" type="text"
                                           placeholder="State"

                                           class="form-control @error('state') is-invalid @enderror"
                                           name="state" value="{{ old('state') }}" required autocomplete="name"
                                           autofocus>

                                    @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-5">
                                    <input id="name" type="text"
                                           placeholder="Zip Code"

                                           class="form-control @error('zip_code') is-invalid @enderror"
                                           name="zip_code" value="{{ old('zip_code') }}" required autocomplete="name"
                                           autofocus>

                                    @error('zip_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-5">
                                    <input id="email" type="date"
                                           placeholder="BirthDate"

                                           class="form-control @error('birthdate') is-invalid @enderror"
                                           name="birthdate" value="{{ old('birthdate') }}" required
                                           autocomplete="email">

                                    @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                            </div>
                            {{--                            offset-md-4--}}
                            <div class="form-group  text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Already have an account? <a href="{{ route("provider.auth.login") }}" class="text-primary">Login</a>
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
<script src="{{asset("admin/vendors/js/vendor.bundle.base.js")}}"></script>
<script src="{{asset("admin/vendors/js/vendor.bundle.addons.js")}}"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="{{asset("admin/js/off-canvas.js")}}"></script>
<script src="{{asset("admin/js/hoverable-collapse.js")}}"></script>
<script src="{{asset("admin/js/misc.js")}}"></script>
<script src="{{asset("admin/js/settings.js")}}"></script>
<script src="{{asset("admin/js/todolist.js")}}"></script>
<script src="{{asset("admin/js/select2.js")}}"></script>
<script src="{{asset("admin/js/file-upload.js")}}"></script>
<!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
</html>
