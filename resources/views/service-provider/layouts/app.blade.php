<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Service Provider</title>

    <link rel="stylesheet" href="{{asset("admin/vendors/iconfonts/font-awesome/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("admin/vendors/css/vendor.bundle.base.css")}}">
    <link rel="stylesheet" href="{{asset("admin/vendors/css/vendor.bundle.addons.css")}}">

    <link rel="stylesheet" href="{{asset("admin/css/style.css")}}">
    <style>
        .invalid-feedback{
            display: block !important;
        }
    </style>
    <!-- endinject -->
    {{--    <link rel="shortcut icon" href="../../images/favicon.png" />--}}
</head>

<body>
<div class="container-scroller">
    @include("service-provider.layouts.nav")

    <div class="container-fluid page-body-wrapper">
        @include("service-provider.layouts.sidebar")

        <div class="main-panel">
            <div class="content-wrapper">
                @yield("content")
            </div>


        </div>

    </div>

</div>


<script src="{{asset("admin/vendors/js/vendor.bundle.base.js")}}"></script>
<script src="{{asset("admin/vendors/js/vendor.bundle.addons.js")}}"></script>

<script src="{{asset("admin/js/off-canvas.js")}}"></script>
<script src="{{asset("admin/js/hoverable-collapse.js")}}"></script>
<script src="{{asset("admin/js/misc.js")}}"></script>
<script src="{{asset("admin/js/settings.js")}}"></script>
<script src="{{asset("admin/js/todolist.js")}}"></script>

@yield("js")

</body>


</html>
