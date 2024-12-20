<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    @include('dashboards.admin.layouts.header')
</head>

<body class="body-bg-f5f5f5">
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="content">
        <div class="box"></div>
    </div>
</div>
<!-- End Preloader Area -->
@include('dashboards.admin.layouts.menu')
<!-- End Sidebar Area -->

<!-- Start Main Content Area -->
<div class="main-content d-flex flex-column">
    <div class="container-fluid">
        @include('dashboards.admin.layouts.top_menu')
    </div>
    <div class="page-title-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="page-title">
                        <h3>{{$pageName}}</h3>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <ul class="page-title-list">
                        <li>{{$parentMenu??''}}</li>
                        <li>{{$pageName}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <div class="flex-grow-1"></div>

    <div class="footer-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="copy-right">
                        <p>Copyright {{date('Y')}} {{$siteName}}.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="social-link">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <i class="ri-youtube-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.vimeo.com/" target="_blank">
                                    <i class="ri-vimeo-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="ri-instagram-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Content Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-arrow-up-s-fill"></i>
    <i class="ri-arrow-up-s-fill"></i>
</div>
<!-- End Go Top Area -->

@include('dashboards.admin.layouts.footer')
@if(!$user->hasTwoFactorEnabled())
    <livewire:admin.components.set-two-factor :user="$user"/>
@endif
</body>
</html>
