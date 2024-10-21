<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="color-scheme" content="dark light">
    <meta name="description" content="{{$pageName}}">
    <meta name="keywords" content="{{$tags??$web->keywords}}">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="English">
    <meta name="author" content="{{config('app.name')}}">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="{{$pageName}} - {{$siteName}}">
    <meta property="og:description" content="{{$pageName}}">
    <meta property="og:image" content="{{asset($web->logo_path)}}"> <!-- Replace with your actual image URL -->
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{$siteName}}">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{$pageName}} - {{$siteName}}">
    <meta name="twitter:description" content="{{$pageName}}">
    <meta name="twitter:image" content="{{asset($web->logo_path)}}"> <!-- Replace with your actual image URL -->
    <meta name="twitter:site" content="@xultechng"> <!-- Replace with your actual Twitter handle -->

    <!-- Canonical URL -->
    <link rel="canonical" href="{{url()->current()}}">

    <!-- Alternate URLs for Multilingual Support (if applicable) -->
    <link rel="alternate" href="{{url()->current()}}" hreflang="en">

    <!-- Structured Data for Rich Snippets (JSON-LD) -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "{{config('app.name')}}",
            "url": "{{url()->current()}}",
            "logo": "{{asset($web->logo_path)}}",
            "description": "{{$pageName}}",
            "sameAs": [
                "https://www.facebook.com/XulTech",
                "https://twitter.com/xultechng",
                "https://www.linkedin.com/company/xultech",
                "https://www.instagram.com/tryxultech"
            ],
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "{{$web->contact_phone}}",
                "contactType": "Customer Service",
                "areaServed": "NG,US,AF,GH,SA",
                "availableLanguage": ["English"]
            }
        }
    </script>

    <!-- Favicon and Icons -->
    <link rel="icon" href="{{asset($web->favicon_path)}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset($web->favicon_path)}}">
    <link rel="icon" href="{{asset($web->favicon_path)}}" sizes="32x32">
    <link rel="icon" href="{{asset($web->favicon_path)}}" sizes="192x192">
    <title>{{$pageName}} - {{$siteName}}</title>
    <link href="https://unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/fonts/typography/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('home/fonts/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/plugins/aos/aos.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/plugins/fancybox/jquery.fancybox.min.css')}}">
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/demo.css')}}">
    <style>
        @import url('https://fonts.cdnfonts.com/css/clash-display');
        @import url('https://fonts.googleapis.com/css2?family=Syne:wght@500;600;700&amp;display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Public+Sans:wght@500;600;700;800;900&amp;display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cabin:wght@500;600;700&amp;display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap');
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;display=swap');
        @import url('https://fonts.cdnfonts.com/css/clash-display');
    </style>

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
