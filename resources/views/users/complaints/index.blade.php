@extends("users.layouts.app")



@section("content")

    <div class="page-header">
        <h3 class="page-title">
            Complaints table
        </h3>

    </div>
    <div class="card">
        <div class="card-body">
            <div class="text-left">
                <span class="card-title">Complaints table</span>
            </div>
            <div class="text-right">

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Service Provider Name</th>
                                <th>Complaint Text</th>
                                <th>Complaint Type</th>
                                <th>Actioned?</th>
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($complaints as $skill)
                                <tr>
                                    <td>{{ $skill->user->full_name }}</td>
                                    <td>{{ $skill->provider->full_name }}</td>
                                    <td>{{ $skill->text}}</td>
                                    <td>{{ $skill->complaint_type}}</td>
                                    <td>{{ $skill->actioned == 1 ? "Actioned" : "Under Study"}}</td>
                                    <td>{{ \Carbon\Carbon::make($skill->created_at)}}</td>

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
