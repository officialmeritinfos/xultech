<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="color-scheme" content="dark light">
<meta name="description" content="{{$web->description}}">
<meta name="keywords" content="{{$web->keywords}}">
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="language" content="English">
<meta name="author" content="{{config('app.name')}}">

<script id="pixel-chaty" async="true" src="https://cdn.chaty.app/pixel.js?id=Oo46o0tG"></script>
<!-- Open Graph / Facebook -->
<meta property="og:title" content="{{$pageName}} - {{$siteName}}">
<meta property="og:description" content="{{$web->description}}">
<meta property="og:image" content="{{asset($web->logo_path)}}"> <!-- Replace with your actual image URL -->
<meta property="og:url" content="{{url('/')}}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="{{$siteName}}">
<meta property="og:locale" content="en_US">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{$pageName}} - {{$siteName}}">
<meta name="twitter:description" content="{{$web->description}}">
<meta name="twitter:image" content="{{asset($web->logo_path)}}"> <!-- Replace with your actual image URL -->
<meta name="twitter:site" content="@xultechng"> <!-- Replace with your actual Twitter handle -->

<!-- Canonical URL -->
<link rel="canonical" href="{{url('/')}}">

<!-- Alternate URLs for Multilingual Support (if applicable) -->
<link rel="alternate" href="{{url('/')}}" hreflang="en">

<!-- Structured Data for Rich Snippets (JSON-LD) -->
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "{{config('app.name')}}",
            "url": "{{url('/')}}",
            "logo": "{{asset($web->logo_path)}}",
            "description": "{{$web->description}}",
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
