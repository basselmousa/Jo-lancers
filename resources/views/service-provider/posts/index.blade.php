@extends("service-provider.layouts.app")




@section("content")

    <div class="page-header">
        <h3 class="page-title">
            Posts
        </h3>


    </div>

    <div class="row">

        @forelse($posts as $post)
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <p>Min-Max ({{$post->min_bud}} - {{ $post->max_bud }}) {{ $post->currency->sign }} </p>
                        @foreach($post->skills as $skill)
                            <label class="badge badge-success badge-pill">{{ $skill->skill->alt_code }}</label>

                        @endforeach
                        <br>

                        @if(\Illuminate\Support\Facades\Auth::guard("provider")->check())
                            <button type="button" class="btn btn-primary btn-sm"
                                    data-toggle="modal" data-target="#add-admin-{{$post->id}}">
                                Create Bid
                            </button>
                            @include("service-provider.posts.add",["post"=> $post])


                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="col-md-12">
                <div class="alert alert-warning" role="alert">
                    No Posts Yet
                </div>
            </div>


        @endforelse
    </div>

@endsection


@section('js')
    <script src="{{asset("admin/js/file-upload.js")}}"></script>
    <script src="{{asset("admin/js/toastDemo.js")}}"></script>
    <script src="{{asset("admin/js/select2.js")}}"></script>
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
