@extends("service-provider.layouts.app")
@push("createPost")
    <li class="nav-item d-none d-lg-flex">
        <button type="button" class="btn btn-primary btn-sm"
                data-toggle="modal" data-target="#add-admin"> Create Post
        </button>
    </li>
@endpush
@section("content")

    <div class="page-header">
        <h3 class="page-title">
            Works
        </h3>


    </div>

    <div class="row">

        @forelse($works as $post)

            <div class="col-sm-6 mb-3">


                <div class="card">
                    <div class="card-header">
                       <div class="row">
                           <div class="col-md-8">
                               <h5 class="card-title">{{ $post->title }}</h5>
                           </div>
                           <div class="col-md-4">
                               <button class="btn btn-outline-danger" onclick=" event.preventDefault();
                                            document.getElementById('delete-admin-{{$post->id}}').submit(); ">delete</button>
                               <form action="{{ route("provider.work.deleteWork",$post->id) }}"
                                     method="post" id="delete-admin-{{$post->id}}">
                                   @csrf
                                   @method("DELETE")
                               </form>
                           </div>
                       </div>

                    </div>

                    <div class="card-body">
                        <img src="{{ asset("storage/" . $post->image)  }}" width="460px" height="350px" alt="">
                        <p class="card-text">{{ $post->description }}</p>
{{--                        --}}
{{--                        @foreach($post->skills as $skill)--}}
{{--                            <label class="badge badge-success badge-pill">{{ $skill->skill->alt_code }}</label>--}}
{{--                        @endforeach--}}
{{--                        <br>--}}

{{--                        @if(\Illuminate\Support\Facades\Auth::guard("provider")->check())--}}
{{--                            <button type="button" class="btn btn-primary btn-sm"--}}
{{--                                    data-toggle="modal" data-target="#add-admin-{{$post->id}}">--}}
{{--                                Create Bid--}}
{{--                            </button>--}}
{{--                            @include("service-provider.posts.add",["post"=> $post])--}}


{{--                        @endif--}}
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
@include("service-provider.works.add")
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
