@extends("users.layouts.app")



@section("content")

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">
                                <img src="{{ asset("storage/".$provider->image) }}" alt="profile"
                                     class="img-lg rounded-circle mb-3">
                                <p>{{ $provider->self_description }}</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-success" href="{{ route("user.post.download-cv",$provider->id) }}">
                                        Download CV
                                    </a>
                                    {{--                                    <button class="btn btn-success">Follow</button>--}}
                                </div>
                            </div>
                            <div class="border-bottom py-4">
                                <p>Skills</p>
                                <div>
                                    @foreach($provider->skill as $skill)
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
                            {{ $provider->is_active ? 'Active' : "disabled" }}
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
                            {{ $provider->email }}
                          </span>
                                </p>
                                <p class="clearfix">
                          <span class="float-left">
                            Username
                          </span>
                                    <span class="float-right text-muted">
                            {{ $provider->username }}

                          </span>
                                </p>
                                <p class="clearfix">
                          <span class="float-left">
                            Skill Description
                          </span>
                                    <span class="float-right text-muted">
                                        {{ $provider->skill_description }}

                          </span>
                                </p>
                                <p class="clearfix">
                          <span class="float-left">
                            Per Hour
                          </span>
                                    <span class="float-right text-muted">
                                        {{ $provider->price_for_hour . ' '.$provider->currency->sign . ' /hr' }}

                          </span>
                                </p>
                            </div>
                            {{--                            <button class="btn btn-primary btn-block">Preview</button>--}}
                        </div>
                        <div class="col-lg-8 pl-lg-5">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3>{{ $provider->full_name }}</h3>
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0 mr-2 text-muted">{{ $provider->country }}</h5>
                                        <div class="br-wrapper br-theme-css-stars">
                                            <select id="profile-rating" name="rating" autocomplete="off" readonly>
                                                <option value="1" {{ $rate->rate == 1 ? 'selected' : '' }}>1</option>
                                                <option value="2" {{ $rate->rate == 2 ? 'selected' : '' }}>2</option>
                                                <option value="3" {{ $rate->rate == 3 ? 'selected' : '' }}>3</option>
                                                <option value="4" {{ $rate->rate == 4 ? 'selected' : '' }}>4</option>
                                                <option value="5" {{ $rate->rate == 5 ? 'selected' : '' }}>5</option>
                                            </select>

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
                                                Works
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link  show" id="pills-work-tab-custom"
                                               data-toggle="pill" href="#work" role="tab"
                                               aria-controls="pills-work" aria-selected="true">
                                                Rates
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="profile-feed tab-content tab-content-custom-pill">
                                        <div class="tab-pane active show fade" id="info" role="tabpanel"
                                             aria-labelledby="pills-home-tab-custom">

                                         @foreach($provider->works as $work)
                                                <div class="d-flex align-items-start profile-feed-item">
                                                          <div class="ml-4">
                                                        <h6>
                                                            {{ $work->title }}
                                                            <small class="ml-4 text-muted"><i class="far fa-clock mr-1"></i>{{ \Carbon\Carbon::make($work->created_at)->diffForHumans() }}</small>
                                                        </h6>
                                                        <img src="{{asset("storage/".$work->image)}}" alt="sample" class="rounded mw-100">
                                                        <p class="small text-muted mt-2 mb-0">
                                                            {{$work->description}}
                                                        </p>
                                                    </div>
                                                </div>
                                         @endforeach
                                        </div>


                                        <div class="tab-pane fade" id="work" role="tabpanel"
                                             aria-labelledby="pills-work-tab-custom">
                                            @foreach($rates as $work)
                                                <div class="d-flex align-items-start profile-feed-item">
{{--                                                    <img src="{{asset("storage/".$work->user->image)}}" alt="profile" class="img-sm rounded-circle">--}}

                                                    <div class="ml-4">
                                                        <h6>
                                                            {{ $work->user->full_name }}
                                                            <small class="ml-4 text-muted"><i class="far fa-clock mr-1"></i>{{ optional(\Carbon\Carbon::make($work->created_at))->diffForHumans() }}</small>
                                                        </h6>
{{--                                                        <img src="{{asset("storage/".$work->image)}}" alt="sample" class="rounded mw-100">--}}
                                                        <p class="small text-muted mt-2 mb-0">
                                                            <select id="example-css" name="rating" autocomplete="off">
                                                                <option value="1" {{ $work->rate == 1 ? 'selected' : '' }}>1</option>
                                                                <option value="2" {{ $work->rate == 2 ? 'selected' : '' }}>2</option>
                                                                <option value="3" {{ $work->rate == 3 ? 'selected' : '' }}>3</option>
                                                                <option value="4" {{ $work->rate == 4 ? 'selected' : '' }}>4</option>
                                                                <option value="5" {{ $work->rate == 5 ? 'selected' : '' }}>5</option>
                                                            </select>
                                                            {{$work->comment}}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
{{--                                            <form method="POST" action="{{ route('provider.profile.setHourlyPrice') }}"--}}
{{--                                                  enctype="multipart/form-data">--}}
{{--                                                @csrf--}}
{{--                                                @method("PUT")--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="form-group col-lg-12">--}}
{{--                                                        <input id="name" type="text"--}}
{{--                                                               class="form-control @error('price_for_hour') is-invalid @enderror"--}}
{{--                                                               name="price_for_hour"--}}
{{--                                                               value="{{ old('price_for_hour')  }}"--}}
{{--                                                               required--}}
{{--                                                               placeholder="Price For Hour"--}}
{{--                                                               autofocus>--}}
{{--                                                        @error('price_for_hour')--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                            <strong>{{ $message }}</strong>--}}
{{--                                                        </span>--}}
{{--                                                        @enderror--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-group col-lg-12">--}}
{{--                                                        <select class="form-control" name="currency">--}}
{{--                                                            <option value="" selected disabled>Select City</option>--}}

{{--                                                            @foreach($currencies as $currency)--}}
{{--                                                                <option--}}
{{--                                                                    value="{{ $currency->id }}" {{ old("currency")  == $currency->id ? 'selected' : '' }}>{{ $currency->cur_name }}</option>--}}

{{--                                                            @endforeach--}}

{{--                                                        </select>--}}
{{--                                                        @error('currency')--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                            <strong>{{ $message }}</strong>--}}
{{--                                                        </span>--}}
{{--                                                        @enderror--}}
{{--                                                    </div>--}}

{{--                                                <div class="form-group  text-center">--}}
{{--                                                    <button type="submit" class="btn btn-primary">--}}
{{--                                                        Update--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}

{{--                                            </form>--}}

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
{{--    @include("service-provider.profile.add")--}}
@endsection


@section('js')
    <script src="{{asset("admin/js/file-upload.js")}}"></script>
    <script src="{{asset("admin/js/toastDemo.js")}}"></script>
    <script src="{{asset('admin/js/tabs.js')}}"></script>
    <script src="{{asset("admin/js/profile-demo.js")}}"></script>
    <script src="{{asset("admin/js/form-addons.js")}}"></script>
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

        $('[id = "example-css"]').barrating({
            theme: 'css-stars',
            showSelectedRating: false
        })
        //     .each(function( e ) {
        //     console.log($(this).text());
        //     // e.barrating({
        //     //     theme: 'css-stars',
        //     //     showSelectedRating: false
        //     // })
        // });
    </script>
@endsection
