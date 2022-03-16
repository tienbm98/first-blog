<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Admin Dashboard</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admin dashboard" />
    <meta name="keywords" content="Admin dashboard">
    <meta name="author" content="TienBM" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/waves.min.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/feather.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome-n.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chartist.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/widget.css') }}">
</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('admin.layout.header')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @include('admin.layout.sidebar')

                    <div class="pcoded-content">

                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-home bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Dashboard</h5>
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="{{ route('admin.home') }}"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">

                                        @yield('content')

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="{{ asset('js/email-decode.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/waves.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.flot.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.flot.categories.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/curvedlines.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.flot.tooltip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/chartist.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/amcharts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/serial.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/light.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pcoded.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vertical-layout.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.min.js') }}"></script>

</body>

</html>