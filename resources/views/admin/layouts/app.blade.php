<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>

    <link rel="stylesheet" href="{{asset("admin/vendors/iconfonts/font-awesome/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("admin/vendors/css/vendor.bundle.base.css")}}">
    <link rel="stylesheet" href="{{asset("admin/vendors/css/vendor.bundle.addons.css")}}">

    <link rel="stylesheet" href="{{asset("admin/css/style.css")}}">
    <!-- endinject -->
    {{--    <link rel="shortcut icon" href="../../images/favicon.png" />--}}
</head>

<body>
<div class="container-scroller">
    @include("admin.layouts.nav")

    <div class="container-fluid page-body-wrapper">
        @include("admin.layouts.sidebar")

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
