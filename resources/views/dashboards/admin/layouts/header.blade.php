<link rel="stylesheet" href="{{asset('dashboard/css/bootstrap.min.css')}}">
<!-- Owl Theme Default Min CSS -->
<link rel="stylesheet" href="{{asset('dashboard/css/owl.theme.default.min.css')}}">
<!-- Owl Carousel Min CSS -->
<link rel="stylesheet" href="{{asset('dashboard/css/owl.carousel.min.css')}}">
<!-- Animate Min CSS -->
<link rel="stylesheet" href="{{asset('dashboard/css/animate.min.css')}}">
<!-- Remixicon CSS -->
<link rel="stylesheet" href="{{asset('dashboard/css/remixicon.css')}}">
<!-- boxicons CSS -->
<link rel="stylesheet" href="{{asset('dashboard/css/boxicons.min.css')}}">
<!-- MetisMenu Min CSS -->
<link rel="stylesheet" href="{{asset('dashboard/css/metismenu.min.css')}}">
<!-- Simplebar Min CSS -->
<link rel="stylesheet" href="{{asset('dashboard/css/simplebar.min.css')}}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}">
<!-- Dark Mode CSS -->
<link rel="stylesheet" href="{{asset('dashboard/css/dark-mode.css')}}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset('dashboard/css/responsive.css')}}">

<!-- Favicon -->
<link rel="icon" type="image/png" href="{{asset($web->favicon_path)}}">
<!-- Title -->
<title>{{$pageName}} - {{$siteName}}</title>
@stack('css')
