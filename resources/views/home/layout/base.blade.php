<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    @include('home.layout.header')
    @stack('css')
</head>

<body>
<div class="preloader-wrapper">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="page-wrapper overflow-hidden">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
     Header Area
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        @include('home.layout.menu')
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
     navbar-
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    @yield('content')
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
    Home 9: CTA
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="cta-home-9 padding-top-100">
        <div class="container">
            <div class="cta-home-9-wrapper">
                <div class="cta-home-9-shape-wrapper">
                    <div class="cta-home-9-shape">
                        <img src="{{asset('home/image/cta/cta-9-shape.png')}}" alt="image alt">
                    </div>
                </div>
                <div class="row row--custom">
                    <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-7 col-10">
                        <div class="cta-text-block">
                            <h2 class="cta-home-9-title heading-lg heading-lg--syne">Ready to start your digital journey?</h2>
                            <p>
                                Join a host of businesses who utilize one or more of our services and solutions to streamline
                                their operations.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-auto col-lg-4 col-md-5 col-xs-8 col-10">
                        <div class="cta-home-9-button">
                            <a href="{{route('bookUsPage')}}" class="btn-masco btn-primary-l09 rounded-pill btn-fill--down">
                                Start Your Digital Journey
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-v3   footer-padding-default footer--dark-v2 footer-l03">
        <div class="container">
            <div class="row row--footer-main">
                <!-- Footer List -->
                <div class="col-auto order-md-1">
                    <h3 class="footer-title">Company</h3>
                    <ul class="footer-list">
                        <li>
                            <a href="{{route('company.aboutUs')}}">About Us</a>
                        </li>
                        <li>
                            <a href="{{route('company.ourTeam')}}">Our Team </a>
                        </li>
                        <li>
                            <a href="{{route('company.career')}}">Career </a>
                        </li>
                        <li>
                            <a href="{{route('company.contact')}}">Contact </a>
                        </li>
                    </ul>
                </div>
                <!-- Footer List -->
                <div class="col-auto order-md-2">
                    <h3 class="footer-title">Solutions</h3>
                    <ul class="footer-list">
                        <li>
                            <a href="{{route('solutions.webDevelopment')}}">Web Development </a>
                        </li>
                        <li>
                            <a href="{{route('solutions.mobileDevelopment')}}"> Mobile Apps </a>
                        </li>
                        <li>
                            <a href="{{route('solutions.businessManagementSolutions')}}"> Business Management</a>
                        </li>
                        <li>
                            <a href="{{route('solutions.inventory-systems')}}"> Sales & Booking </a>
                        </li>
                    </ul>
                </div>
                <!-- Footer List -->
                <div class="col-auto order-md-3">
                    <h3 class="footer-title">Industry</h3>
                    <ul class="footer-list">
                        <li>
                            <a href="{{route('industry.realEstate')}}">Real Estate </a>
                        </li>
                        <li>
                            <a href="{{route('industry.hospitality')}}">Hospitality  </a>
                        </li>
                        <li>
                            <a href="{{route('industry.education')}}"> Education </a>
                        </li>
                        <li>
                            <a href="{{route('industry.retail')}}"> Retail </a>
                        </li>
                    </ul>
                </div>
                <!-- Footer List -->
                <div class="col-auto order-md-3">
                    <h3 class="footer-title">Resources</h3>
                    <ul class="footer-list">
                        <li>
                            <a href="{{route('resources.blogs')}}">Blog </a>
                        </li>
                        <li>
                            <a href="{{route('resources.termsOfService')}}"> Terms of Service </a>
                        </li>
                        <li>
                            <a href="{{route('resources.privacyPolicy')}}"> Privacy Policy </a>
                        </li>
                        <li>
                            <a href="{{route('resources.work-process')}}"> Our Work Process </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-v3__copyright-section copyright-border">
                <!-- Footer Brand -->
                <div class="footer-brand-wrapper">
                    <a href="{{route('landingPage')}}" class="footer-brand">
                        <img src="{{asset($web->logo2)}}" alt="logo" class="footer-brand__logo"
                        style="width: 200px;">
                    </a>
                </div>
                <!-- Copyright -->
                <div class="footer-copyright">
                    <p>© Copyright {{date('Y')}}, All Rights Reserved by {{$siteName}}</p>
                </div>
                <div class="footer-social">
                    <!-- Copyright -->
                    <ul class="list-social">
                        <li>
                            <a href="https://facebook.com/" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/xultechng" target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/tryxultechng" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/xultech">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
@include('home.layout.footer')
</body>
</html>
