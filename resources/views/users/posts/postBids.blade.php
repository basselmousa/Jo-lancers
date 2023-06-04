@extends("users.layouts.app")



@section("content")

    <div class="page-header">
        <h3 class="page-title">
            Bids table
        </h3>

    </div>
    <div class="card">
        <div class="card-body">
            <div class="text-left">
                <span class="card-title">Bids table</span>
            </div>
            <div class="text-right"></div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>Service Provider Name</th>
                                <th>Bid</th>
                                <th>Proposal</th>
                                <th>Deliver In Days</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bids as $bid)
                                <tr>
                                    <td>{{ $bid->provider->full_name }}</td>
                                    <td>{{ $bid->bid}}</td>
                                    <td>{{ $bid->proposal}}</td>
                                    <td>{{ $bid->deliver_in_days}}</td>
                                    <td>{{ \Carbon\Carbon::make($bid->created_at)}}</td>
                                    <td>
                                        <button type="button" class="btn btn-success" onclick="
                                    event.preventDefault();
                                    document.getElementById('accept-bid-{{$bid->id}}').submit();
                                    ">Accept
                                        </button>
                                        <form id="accept-bid-{{$bid->id}}" class="d-none"
                                              action="{{ route("user.post.accept-bids",$bid->id) }}" method="post">
                                            @csrf
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
