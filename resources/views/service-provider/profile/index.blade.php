@extends("service-provider.layouts.app")



@section("content")

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">
                                <img src="{{ asset("storage/".auth("provider")->user()->image) }}" alt="profile"
                                     class="img-lg rounded-circle mb-3">
                                <p>{{ auth("provider")->user()->self_description }}</p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#add-admin">Add
                                        Skill
                                    </button>
                                    {{--                                    <button class="btn btn-success">Follow</button>--}}
                                </div>
                            </div>
                            <div class="border-bottom py-4">
                                <p>Skills</p>
                                <div>
                                    @foreach($skills as $skill)
                                        <label class="badge badge-outline-dark">{{ $skill->skill->name }}</label>
                                    @endforeach

                                </div>
                            </div>
                            {{--                            <div class="border-bottom py-4">--}}
                            {{--                                <div class="d-flex mb-3">--}}
                            {{--                                    <div class="progress progress-md flex-grow">--}}
                            {{--                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="d-flex">--}}
                            {{--                                    <div class="progress progress-md flex-grow">--}}
                            {{--                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75" style="width: 75%" aria-valuemin="0" aria-valuemax="100"></div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="py-4">
                                <p class="clearfix">
                          <span class="float-left">
                            Status
                          </span>
                                    <span class="float-right text-muted">
                            {{ auth("provider")->user()->is_active ? 'Active' : "disabled" }}
                          </span>
                                </p>
                                {{--                                <p class="clearfix">--}}
                                {{--                          <span class="float-left">--}}
                                {{--                            Phone--}}
                                {{--                          </span>--}}
                                {{--                                    <span class="float-right text-muted">--}}
                                {{--                            006 3435 22--}}
                                {{--                          </span>--}}
                                {{--                                </p>--}}
                                <p class="clearfix">
                          <span class="float-left">
                            Mail
                          </span>
                                    <span class="float-right text-muted">
                            {{ auth("provider")->user()->email }}
                          </span>
                                </p>
                                <p class="clearfix">
                          <span class="float-left">
                            Username
                          </span>
                                    <span class="float-right text-muted">
                            {{ auth("provider")->user()->username }}

                          </span>
                                </p>
                                <p class="clearfix">
                          <span class="float-left">
                            Skill Description
                          </span>
                                    <span class="float-right text-muted">
                                        {{ auth("provider")->user()->skill_description }}

                          </span>
                                </p>
                                <p class="clearfix">
                          <span class="float-left">
                            Per Hour
                          </span>
                                    <span class="float-right text-muted">
                                        {{ auth("provider")->user()->price_for_hour . ' '.auth("provider")->user()->currency->sign . ' /hr' }}

                          </span>
                                </p>
                            </div>
                            {{--                            <button class="btn btn-primary btn-block">Preview</button>--}}
                        </div>
                        <div class="col-lg-8 pl-lg-5">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3>{{ auth("provider")->user()->full_name }}</h3>
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0 mr-2 text-muted">{{ auth("provider")->user()->country }}</h5>
                                        <div class="br-wrapper br-theme-css-stars"><select id="profile-rating"
                                                                                           name="rating"
                                                                                           autocomplete="off"
                                                                                           style="display: none;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="br-widget">
                                                <a href="#"
                                                   class="br-selected br-current"
                                                   data-rating-value="1"
                                                   data-rating-text="1">
                                                </a>
                                                <a href="#"
                                                   class="br-selected br-current"
                                                   data-rating-value="2"
                                                   data-rating-text="2">
                                                </a>
                                                <a
                                                    class="br-selected br-current"
                                                    href="#" data-rating-value="3" data-rating-text="3">

                                                </a>
                                                <a href="#"
                                                   data-rating-value="4"
                                                   class="br-selected br-current"
                                                   data-rating-text="4">

                                                </a>
                                                <a
                                                    class="br-selected br-current"
                                                    href="#" data-rating-value="5" data-rating-text="5">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    {{--                                    <button class="btn btn-outline-secondary btn-icon">--}}
                                    {{--                                        <i class="far fa-envelope"></i>--}}
                                    {{--                                    </button>--}}
                                    {{--                                    <button class="btn btn-primary">Request</button>--}}
                                </div>
                            </div>
                            <div class="mt-4 py-2 border-top border-bottom row">
                                <div class="col-md-10 mx-auto">
                                    <ul class="nav nav-pills nav-pills-custom" id="pills-tab-custom"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active show" id="pills-home-tab-custom"
                                               data-toggle="pill" href="#info" role="tab"
                                               aria-controls="pills-home" aria-selected="true">
                                                Profile
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link  show" id="pills-work-tab-custom"
                                               data-toggle="pill" href="#work" role="tab"
                                               aria-controls="pills-work" aria-selected="true">
                                                Work
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="profile-feed tab-content tab-content-custom-pill">
                                        <div class="tab-pane active show fade" id="info" role="tabpanel"
                                             aria-labelledby="pills-home-tab-custom">

                                            <form method="POST" action="{{ route('provider.profile.updateProfile') }}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                @method("PUT")
                                                <div class="row">
                                                    <div class="form-group col-lg-5">
                                                        <input id="name" type="text"
                                                               class="form-control @error('first_name') is-invalid @enderror"
                                                               name="first_name"
                                                               value="{{ old('first_name') ?? explode(" ",auth("provider")->user()->full_name)[0]  }}"
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
                                                               name="second_name"
                                                               value="{{ old('second_name') ?? explode(" ",auth("provider")->user()->full_name)[1] }}"
                                                               required
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
                                                               name="last_name"
                                                               value="{{ old('last_name') ?? explode(" ",auth("provider")->user()->full_name)[2] }}"
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

                                                               name="username"
                                                               value="{{ old('username') ?? auth("provider")->user()->username  }}"
                                                               disabled required autocomplete="name"
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

                                                               name="email"
                                                               value="{{ old('email') ?? auth("provider")->user()->email }}"
                                                               disabled required autocomplete="name"
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

                                                                   autocomplete="new-password">

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

                                                                   name="password_confirmation" autocomplete="new-password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-5">
                                                        <input id="name" type="text"
                                                               class="form-control @error('self_description') is-invalid @enderror"
                                                               placeholder="Self Description"

                                                               name="self_description"
                                                               value="{{ old('self_description') ?? auth("provider")->user()->self_description }}"
                                                               required
                                                               autocomplete="name" autofocus>

                                                        @error('self_description')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-lg-5">
                                                        <input id="name" type="text"
                                                               class="form-control @error('skill_description') is-invalid @enderror"
                                                               placeholder="Skill Description"

                                                               name="skill_description"
                                                               value="{{ old('skill_description') ?? auth("provider")->user()->skill_description }}"
                                                               required
                                                               autocomplete="name" autofocus>

                                                        @error('skill_description')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
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
                                                                    value="{{ $city }}" {{ (old("city") ?? auth("provider")->user()->city) == $city ? 'selected' : '' }}>{{ $city }}</option>

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
                                                               name="state"
                                                               value="{{ old('state') ?? auth("provider")->user()->state }}"
                                                               required autocomplete="name"
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
                                                               name="zip_code"
                                                               value="{{ old('zip_code') ?? auth("provider")->user()->zip_code }}"
                                                               required autocomplete="name"
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
                                                               name="birthdate"
                                                               value="{{ old('birthdate') ??  auth("provider")->user()->birthdate   }}"
                                                               required
                                                               autocomplete="email">

                                                        @error('birthdate')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-lg-5">

                                                        <input type="file" name="cv" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input type="text" class="form-control file-upload-info" disabled
                                                                   placeholder="Upload CV">
                                                            <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>

                                                        </div>
                                                        @error('cv')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-lg-5">

                                                        <input type="file" name="image" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input type="text" class="form-control file-upload-info" disabled
                                                                   placeholder="Upload Image">
                                                            <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                                                        </div>
                                                        @error('image')
                                                        <span class="invalid-feedback" role="alert">
{{--                                        <strong>{{ $message }}</strong>--}}
                                    </span>
                                                        @enderror
                                                    </div>


                                                </div>
                                                {{--                            offset-md-4--}}
                                                <div class="form-group  text-center">
                                                    <button type="submit" class="btn btn-primary">
                                                        Update
                                                    </button>
                                                </div>

                                            </form>

                                        </div>


                                        <div class="tab-pane fade" id="work" role="tabpanel"
                                             aria-labelledby="pills-work-tab-custom">

                                            <form method="POST" action="{{ route('provider.profile.setHourlyPrice') }}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                @method("PUT")
                                                <div class="row">
                                                    <div class="form-group col-lg-12">
                                                        <input id="name" type="text"
                                                               class="form-control @error('price_for_hour') is-invalid @enderror"
                                                               name="price_for_hour"
                                                               value="{{ old('price_for_hour')  }}"
                                                               required
                                                               placeholder="Price For Hour"
                                                               autofocus>
                                                        @error('price_for_hour')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <select class="form-control" name="currency">
                                                            <option value="" selected disabled>Select City</option>

                                                            @foreach($currencies as $currency)
                                                                <option
                                                                    value="{{ $currency->id }}" {{ old("currency")  == $currency->id ? 'selected' : '' }}>{{ $currency->cur_name }}</option>

                                                            @endforeach

                                                        </select>
                                                        @error('currency')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                <div class="form-group  text-center">
                                                    <button type="submit" class="btn btn-primary">
                                                        Update
                                                    </button>
                                                </div>

                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("service-provider.profile.add")
@endsection


@section('js')
    <script src="{{asset("admin/js/file-upload.js")}}"></script>
    <script src="{{asset("admin/js/toastDemo.js")}}"></script>
    <script src="{{asset('admin/js/tabs.js')}}"></script>
    {{--    <script src="{{asset("admin/js/desktop-notification.js")}}"></script>--}}
    <script>
        showSuccessToast = function () {
            'use strict';
            resetToastPosition();
            $.toast({
                heading: 'Success',
                text: '{{ session()->get('success') }}',
                showHideTransition: 'slide',
                icon: 'success',
                loaderBg: '#f96868',
                position: 'top-right'
            })
        };
        showDangerToast = function (text) {
            'use strict';
            resetToastPosition();
            $.toast({
                heading: 'Danger',
                text: text,
                showHideTransition: 'slide',
                icon: 'error',
                loaderBg: '#f2a654',
                position: 'top-right'
            })
        };
        @foreach($errors->all() as $error)
        showDangerToast("{{ $error }}")
        @endforeach
        @if(session()->has("success"))
        showSuccessToast();
        @endif


    </script>
@endsection
