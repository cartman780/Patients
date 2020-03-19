<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Patient</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="{{asset('/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{asset('/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/css/app-creative-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style" />
        <link href="{{asset('/css/app-creative.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />
    </head>

    <body data-layout="topnav">
        <!-- Begin page -->
        <div class="wrapper">

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom topnav-navbar topnav-navbar-dark">
                        <div class="container-fluid">

                            <!-- LOGO -->
                            <a href="" class="topnav-logo">
                                <span class="topnav-logo-lg">
                                    <img src="{{asset('/images/logo-light.png')}}" alt="" height="16">
                                </span>
                                <span class="topnav-logo-sm">
                                    <img src="{{asset('/images/logo_sm_dark.png')}}" alt="" height="16">
                                </span>
                            </a>

                            <ul class="list-unstyled topbar-right-menu float-right mb-0">

                                <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop" href="/logout" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span class="account-user-avatar"> 
                                            <img src="{{asset('/images/users/avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                                        </span>
                                        <span>
                                        <span class="account-user-name">{{ auth()->user()->username }}</span>
                                            <span class="account-position">{{ auth()->user()->role->role_name }}</span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                                        <!-- item-->
                                        <div class=" dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">Welcome !</h6>
                                        </div>
                                        
                                        <!-- item-->
                                        <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                                            <i class="mdi mdi-logout mr-1"></i>
                                            <span>Uitloggen</span>
                                        </a>
    
                                    </div>
                                </li>

                            </ul>
                            <a class="navbar-toggle" data-toggle="collapse" data-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    <!-- end Topbar -->

                    <div class="topnav shadow-sm">
                        <div class="container-fluid">
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
        
                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-toggle arrow-none" href="/" id="topnav-dashboards" >
                                                <i class="uil-dashboard mr-1"></i>Dashboard
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-toggle arrow-none" href="/patients" id="topnav-components">
                                                <i class="uil-package mr-1"></i>Pati&euml;nten
                                            </a>
                                        </li>
                            
                                        @if (auth()->user()->isAdmin())
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-toggle arrow-none" href="/users" id="topnav-apps">
                                                <i class="uil-users-alt mr-1"></i>Gebruikers 
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <!-- Start Content-->
                    <div class="container-fluid">
                        @yield('content')
                    </div>

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2020 © Situatie Win - Situatiewin.nl
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

       

        <!-- bundle -->
        <script src="{{asset('/js/vendor.min.js')}}"></script>
        <script src="{{asset('/js/app.min.js')}}"></script>

        <!-- third party js -->
        <script src="{{asset('/js/vendor/apexcharts.min.js')}}"></script>
        <script src="{{asset('/js/vendor/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{asset('/js/vendor/jquery-jvectormap-world-mill-en.js')}}"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{asset('/js/pages/demo.dashboard.js')}}"></script>
        <!-- end demo js-->
    </body>
</html>