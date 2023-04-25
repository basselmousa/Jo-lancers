@extends("admin.layouts.app")



@section("content")

    <div class="page-header">
        <h3 class="page-title">
            Currencies table
        </h3>

    </div>
    <div class="card">
        <div class="card-body">
            <div class="text-left">
                <span class="card-title">Currencies table</span>
            </div>
            <div class="text-right">
                <button type="button" class="btn btn-primary btn-sm"
                        data-toggle="modal" data-target="#add-admin">Add</button>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($currencies as $currency)
                                <tr>
                                    <td>{{ $currency->full_name }}</td>
                                    <td>{{ $currency->email }}</td>
                                    <td>
                                        <button  type="button" class="btn btn-outline-primary"
                                                 data-toggle="modal" data-target="#edit-admin-{{$currency->id}}">edit</button>
                                        @include("admin.currency.edit" ,["admin" => $currency])
                                        <button class="btn btn-outline-danger" onclick=" event.preventDefault();
                                            document.getElementById('delete-admin-{{$currency->id}}').submit(); ">delete</button>
                                        <form action="{{ route('admin.admins.delete',$currency) }}" method="post" id="delete-admin-{{$currency->id}}">
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

    @include("admin.currency.add")
@endsection

@section("js")
    <script src="{{asset("admin/js/toastDemo.js")}}"></script>
    <script src="{{asset("admin/js/desktop-notification.js")}}"></script>
    <script>
        showSuccessToast = function() {
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
        @if(session()->has("success"))
            showSuccessToast();
        @endif
    </script>
    <button type="button" class="btn btn-success btn-fw" onclick="showSuccessToast()">Success</button>
@endsection
