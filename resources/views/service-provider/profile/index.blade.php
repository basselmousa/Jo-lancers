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
                                    <button class="btn btn-success">Add Skill</button>
                                    {{--                                    <button class="btn btn-success">Follow</button>--}}
                                </div>
                            </div>
                            <div class="border-bottom py-4">
                                <p>Skills</p>
                                <div>
                                    {{--                                    <label class="badge badge-outline-dark">Chalk</label>--}}
                                    {{--                                    <label class="badge badge-outline-dark">Hand lettering</label>--}}
                                    {{--                                    <label class="badge badge-outline-dark">Information Design</label>--}}
                                    {{--                                    <label class="badge badge-outline-dark">Graphic Design</label>--}}
                                    {{--                                    <label class="badge badge-outline-dark">Web Design</label>--}}
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
                            <div class="mt-4 py-2 border-top border-bottom">
                                <ul class="nav profile-navbar">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-user"></i>
                                            Info
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">
                                            <i class="fas fa-file"></i>
                                            Feed
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-calendar"></i>
                                            Agenda
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="far fa-file-word"></i>
                                            Resume
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="profile-feed">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')


@endsection
