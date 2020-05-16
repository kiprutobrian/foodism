<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
                    user-scalable=0, minimal-ui">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta content="Admin Dashboard" name="description" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    {{-- <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}"> --}}
    <link href="{{ url('css/admin.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
</head>

<body class="fixed-left">
    <div>
        <!-- Begin page -->
        <div id="wrapper">
            <div id="app">
                <!-- ========== Left Sidebar Start ========== -->
                @include('admin.layouts.sidebar')
                <!-- Left Sidebar End -->

                <!-- Start right Content here -->
                <div class="content-page">
                    <!-- Start content -->
                    <div class="content">
                        @include('admin.layouts.nav')

                        <div class="page-content-wrapper">
                            <div class="container-fluid">
                                @yield('content')
                            </div><!-- container -->
                        </div> <!-- Page content Wrapper -->
                    </div> <!-- content -->

                    {{-- <footer class="footer">
                        © 2018 Upcube - Crafted with <i class="mdi mdi-heart
                            text-danger"></i> by Themesdesign.
                    </footer> --}}
                </div>
                <!-- End Right content here -->
            </div>
        </div>
        <!-- END wrapper -->
    </div>

    <!-- App js -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- jQuery  -->
    {{-- <script src="{{ url('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ url('assets/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ url('assets/js/jquery.scrollTo.min.js') }}"></script> --}}

    <!-- Other scripts -->
    {{-- <script src="{{ asset('js/admin_scripts.js') }}"></script> --}}
</body>

</html>