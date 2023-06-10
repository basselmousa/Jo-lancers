@extends("users.layouts.app")



@section("content")

    <div class="page-header">
        <h3 class="page-title">
            Accepted Bids table
        </h3>

    </div>
    <div class="card">
        <div class="card-body">
            <div class="text-left">
                <span class="card-title">Accepted Bids table</span>
            </div>
            <div class="text-right"></div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>Service Provider Name</th>
                                <th>Post Name</th>
                                <th>Bid</th>
                                <th>Proposal</th>
                                <th>Deliver In Days</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->bid->provider->full_name }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->bid->bid}}</td>
                                    <td>{{ $post->bid->proposal}}</td>
                                    <td>{{ $post->bid->deliver_in_days}}</td>
                                    <td>{{ \Carbon\Carbon::make($post->bid->created_at)}}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#add-admin-{{$post->id}}">Complaint
                                        </button>
                                        @include("users.posts.complaint",["post" => $post])
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                                data-target="#rate-provider-{{$post->id}}">Rate
                                        </button>
                                        @include("users.posts.rate",["post" => $post])
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')
    <script src="{{asset("admin/js/file-upload.js")}}"></script>
    <script src="{{asset("admin/js/toastDemo.js")}}"></script>
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


    </script>
@endsection
