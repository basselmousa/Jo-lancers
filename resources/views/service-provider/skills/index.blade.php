@extends("service-provider.layouts.app")



@section("content")

    <div class="page-header">
        <h3 class="page-title">
            Skills table
        </h3>

    </div>
    <div class="card">
        <div class="card-body">
            <div class="text-left">
                <span class="card-title">Skills table</span>
            </div>
            <div class="text-right">

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>Skill Name</th>
                                <th>Skill Percentage</th>
                                <th>Skill Alt Code</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($skills as $skill)
                                <tr>
                                    <td>{{ $skill->skill->name }}</td>
                                    <td>{{ $skill->percentage }}%</td>
                                    <td>{{ $skill->skill->alt_code }}</td>
                                    <td>

                                        <button class="btn btn-outline-danger" onclick=" event.preventDefault();
                                            document.getElementById('delete-admin-{{$skill->id}}').submit(); ">delete</button>
                                        <form action="{{ route('provider.skill.deleteSkill',$skill) }}" method="post" id="delete-admin-{{$skill->id}}">
                                            @csrf
                                            @method("DELETE")
                                        </form>
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
