<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>节庆公司票务管理系统</title>
    <!-- Bootstrap -->
    <link href="{{ URL::asset('/static/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('/static/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ URL::asset('/static/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ URL::asset('/static/build/css/custom.min.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
        @yield('content')

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ URL::asset('/static/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ URL::asset('/static/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- fastclick -->
    <script src="{{ URL::asset('/static/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- nprogress -->
    <script src="{{ URL::asset('/static/vendors/nprogress/nprogress.js') }}"></script>
    <!-- custom theme scripts -->
    <script src="{{ URL::asset('/static/build/js/custom.min.js') }}"></script>
    @yield('javascript')
</body>
</html>
