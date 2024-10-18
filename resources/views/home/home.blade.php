@extends('home.layout.base')
@section('content')

    <!--~~~~~~~~~~~~~~~~~~~~~~~~
     Home 9 : Hero Section
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="home-9_hero-section bg-offwhite-dark">
        <div class="container">
            <div class="row row--custom">
                <div class="col-lg-7 col-md-10 col-12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="home-9_hero-content-block">
                        <div class="home-9_hero-text">
                            <h1 class="home-9_hero-title heading-xxl heading-xxl--syne text-black-3 fw-700 typewriter">
                                Empowering businesses with software solutions that matter.
                            </h1>
                            <p>
                                {{$siteName}} provides tailored web, mobile, and software development services to help your
                                business grow smarter and faster. Focus on what matters most, while our cutting-edge
                                solutions streamline your operations and boost productivity.
                            </p>
                        </div>
                        <div class="home-9_hero-button-group">
                            <a href="{{route('bookUsPage')}}" class="btn-masco btn-primary-l09 rounded-pill btn-fill--down">
                                Start Your Digital Journey Today
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-10" data-aos="fade-left" data-aos-duration="1000">
                    <div class="home-9_hero-image-block">
                        <div class="home-9_hero-image">
                            <img src="{{asset('home/image/home-9/hero-image.png')}}" alt="alternative text">
                        </div>
                        <div class="home-9_hero-image-shape-1">
                            <img src="{{asset('home/image/home-9/hero-image-shape-1.svg')}}" alt="image alt">
                        </div>
                        <div class="home-9_hero-image-shape-2">
                            <img src="{{asset('home/image/home-9/hero-image-shape-2.svg')}}" alt="image alt">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 8  : Stats Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-9_stats-section section-padding-100">
        <div class="container">
            <div class="row row--custom ">
                <div class="col-lg-5 col-md-7">
                    <div class="home-9_stats-wrapper">
                        <div class="home-9_stats-single">
                            <h2 class="home-9_stats-single__count">2</h2>
                            <img src="{{asset('home/image/home-9/stats-icon-1.svg')}}" alt="image alt" class="stats-single__icon">
                            <span>
                            Years of experience
                        </span>
                        </div>
                        <div class="home-9_stats-single">
                            <h2 class="home-9_stats-single__count ">4.8/5</h2>
                            <img src="{{asset('home/image/home-9/stats-icon-2.svg')}}" alt="image alt" class="stats-single__icon">
                            <span>
                            Customers worldwide
                        </span>
                        </div>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-6 col-lg-7 col-md-9">
                    <div class="home-9_stats-text-block">
                        <h2 class="home-9_stats-title heading-lg heading-lg--syne text-black-3">
                            Software solutions that work.
                        </h2>
                        <p>
                            We do not just build software, we build software solutions that work. Your business deserves
                            the best, you deserve the best.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Home 9  : Content Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-9_content-section-1 padding-bottom-120 bg-offwhite-dark">
        <div class="container">
            <div class="row row--custom ">
                <div class="offset-xl-1 col-lg-4 col-md-4 col-sm-5 col-xs-5 col-5" data-aos-duration="1000" data-aos="fade-left">
                    <div class="home-9_content-image-1-block ">
                        <div class="home-9_content-image-1 content-image--mobile-width mt-5">
                            <!-- For larger devices (md and above) -->
                            <img src="{{ asset($web->logo_path) }}" alt="alternative text" >


                        </div>
                        <div class="home-9_content-image-1-shape absolute-center">
                            <img src="{{asset('home/image/home-9/content-image-1-shape.svg')}}" alt="alternative text">
                        </div>
                        <div class="home-9_content-image-1-shape-2 ">
                            <img src="{{asset('home/image/home-9/content-image-1-shape-2.svg')}}" alt="alternative text">
                        </div>
                    </div>
                </div>
                <div class=" col-lg-7 col-md-11 col-auto" data-aos-duration="1000" data-aos="fade-right">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-lg heading-lg--syne text-black-3" style="margin-top: 5rem;">Who We Are: Driven by Innovation, Powered by Passion</h2>
                            <p>
                                Alright, let’s get straight to it—at {{$siteName}}, we’re a crew of tech wizards and idea shapers,
                                driven by a shared passion for making life easier and businesses stronger. We take pride
                                in being your go-to team for all things digital, from whipping up sleek websites to crafting
                                custom software that feels like it was made just for you (because it is!).
                            </p>
                            <p>
                                And here’s a fun fact: {{$siteName}} isn’t just a catchy name. It stands for
                                Xpert Unified Layers Tech—fancy, right? But don’t let the name fool you;
                                we’re all about making the complex stuff simple. Our “Xpert” team layers tech solutions
                                to create powerful tools that actually work for you. It’s a bit like building a delicious
                                sandwich, layer by layer, until you have the perfect bite. And we all know a good sandwich
                                makes everything better!
                            </p>
                            <p>
                                We’re not your typical tech company—we’re the tech team you call when you need someone to
                                understand your vision, brainstorm crazy ideas, and then bring them to life. We believe
                                in collaboration, a good laugh, and the magic that happens when creativity meets technology.
                                We work hard, play harder, and deliver solutions that help you grow and keep your customers happy.
                            </p>
                        </div>
                        <div class="content-link-block">
                            <a href="{{route('company.aboutUs')}}" class="content-link">Read More <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 5  : Content Section 1
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-1_content-section-1 section-padding-120">
        <div class="container">
            <div class="row row--custom">
                <div class="offset-xl-1 col-lg-5 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="home-1_content-image-1 content-image--mobile-width">
                        <img src="{{asset('home/image/home-1/content-image-1.png')}}" alt="alternative text">
                        <div class="home-1_content-image-1-shape">
                            <img src="{{asset('home/image/home-1/content-image-1-shape.svg')}}" alt="alternative text">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-right">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-md text-black">
                                Elevate Your Business with Tailored Technology Solutions
                            </h2>
                            <p>
                                We like to keep things simple—technology should make your life easier, not more complicated.
                                At {{$siteName}}, our solutions are built to help your business thrive, whether that means smoothing
                                out operations, making your customers happier, or giving you that digital makeover that makes
                                you stand out from the crowd.
                            </p>
                            <p>
                                Our expert team? They don’t just show up with cookie-cutter solutions. Nope, we take the
                                time to get to know you and your goals. Then, we craft technology that fits like a glove
                                and grows with you. Whether you’re just starting or tackling new challenges, {{$siteName}} has
                                your back with scalable, lasting solutions that make a real impact.
                            </p>
                            <p>
                                But hey, we’re not just tech nerds (though we do love a good code challenge!). We’re your
                                partners in success—right by your side from start to finish, offering the support, ideas,
                                and advice you need whenever you need it. Let's build something amazing together!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 9  : Feature Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-9_feature-section section-padding-120">
        <div class="home-9_feature-shape">
            <img src="{{asset('home/image/home-9/feature-shape.svg')}}" alt="image alt">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
                    <div class="section-heading text-center">
                        <h2 class="section-heading__title heading-lg heading-lg--clash-display text-black-3">
                            Powerful Solutions for a Smarter Business
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row feature-widget-3-row">
                <div class="col-lg-6">
                    <div class="feature-widget-3">
                        <div class="feature-widget-3__icon">
                            <img src="{{asset('home/image/home-9/feature-icon-1.svg')}}" alt="image alt">
                        </div>
                        <div class="feature-widget-3__body">
                            <h3 class="feature-widget-3__title">Custom Software Development</h3>
                            <p>
                                Get software built uniquely for your business. {{$siteName}} designs and develops custom solutions
                                to automate tasks, improve efficiency, and support your specific needs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-widget-3">
                        <div class="feature-widget-3__icon">
                            <img src="{{asset('home/image/home-9/web-development.svg')}}" alt="image alt" style="width: 100px;">
                        </div>
                        <div class="feature-widget-3__body">
                            <h3 class="feature-widget-3__title">Web Design & Development</h3>
                            <p>
                                Establish a powerful online presence with beautifully designed, responsive websites
                                that enhance your brand and connect you with customers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-widget-3">
                        <div class="feature-widget-3__icon">
                            <img src="{{asset('home/image/home-9/mobile-app-developing.svg')}}" alt="image alt" style="width: 100px;">
                        </div>
                        <div class="feature-widget-3__body">
                            <h3 class="feature-widget-3__title">Mobile App Development</h3>
                            <p>
                                Reach your customers on the go with mobile applications designed for both iOS and Android.
                                {{$siteName}} creates intuitive, user-friendly apps that keep you connected.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-widget-3">
                        <div class="feature-widget-3__icon">
                            <img src="{{asset('home/image/home-9/online-shopping-ecommerce.svg')}}" alt="image alt" style="width: 100px;">
                        </div>
                        <div class="feature-widget-3__body">
                            <h3 class="feature-widget-3__title">E-commerce Solutions</h3>
                            <p>
                                Expand your business online with secure, scalable e-commerce platforms that offer smooth
                                shopping experiences and easy payment options.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-widget-3">
                        <div class="feature-widget-3__icon">
                            <img src="{{asset('home/image/home-9/crm-crm.svg')}}" alt="image alt" style="width: 100px;">
                        </div>
                        <div class="feature-widget-3__body">
                            <h3 class="feature-widget-3__title">CRM & ERP Systems</h3>
                            <p>
                                Streamline your operations with customer relationship management (CRM) and enterprise
                                resource planning (ERP) systems that integrate your business processes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-widget-3">
                        <div class="feature-widget-3__icon">
                            <img src="{{asset('home/image/home-9/pointofsale.png')}}" alt="image alt" style="width: 100px;">
                        </div>
                        <div class="feature-widget-3__body">
                            <h3 class="feature-widget-3__title">Point of Sale Systems</h3>
                            <p>
                                Revolutionize your retail experience with point of sale systems that simplify transactions,
                                manage inventory, and offer real-time sales insights.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-widget-3">
                        <div class="feature-widget-3__icon">
                            <img src="{{asset('home/image/home-9/booking.png')}}" alt="image alt" style="width: 100px;">
                        </div>
                        <div class="feature-widget-3__body">
                            <h3 class="feature-widget-3__title">Booking & Reservation Systems</h3>
                            <p>
                                Simplify scheduling with customized booking systems for appointments, reservations, and
                                events, designed to improve efficiency and user satisfaction.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-widget-3">
                        <div class="feature-widget-3__icon">
                            <img src="{{asset('home/image/home-9/consulting.png')}}" alt="image alt" style="width: 100px;">
                        </div>
                        <div class="feature-widget-3__body">
                            <h3 class="feature-widget-3__title">Consulting Solutions</h3>
                            <p>
                                Grow your business with our expert IT consulting services. From early-stage planning to
                                final strategy execution, we guide you every step of the way to ensure you have the right technology on your side.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 9 : Content Section 2
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-9_content-section-2 section-padding-120 bg-offwhite-dark">
        <div class="container">
            <div class="row row--custom ">
                <div class="offset-lg-1 col-xl-4 col-lg-3 col-md-4 col-sm-5 col-xs-5 col-5" data-aos-duration="1000" data-aos="fade-right">
                    <div class="home-9_content-image-2-block ">
                        <div class="home-9_content-image-2 ">
                            <img src="{{asset('home/image/home-9/content-image-2.png')}}" alt="alternative text">
                        </div>
                        <div class="home-9_content-image-2-shape absolute-center">
                            <img src="{{asset('home/image/home-9/content-image-2-shape.svg')}}" alt="alternative text">
                        </div>
                        <div class="home-9_content-image-2-shape-2 ">
                            <img src="{{asset('home/image/home-9/content-image-2-shape-2.svg')}}" alt="alternative text">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto col-xl-6 col-lg-7 col-md-11 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-lg heading-lg--syne text-black-3">
                                Easily Manage Your Business with Smart Tech Solutions
                            </h2>
                            <p>
                                At {{$siteName}}, we make business management a breeze! Whether you’re juggling multiple
                                projects or just need a little help staying on top of things, we’ve got the perfect tools
                                to keep you organized, efficient, and ready for anything.
                            </p>
                        </div>
                        <div class="content-widget-wrapper">
                            <div class="content-widget">
                                <div class="content-widget__icon">
                                    <img src="{{asset('home/image/home-9/list-icon-1.svg')}}" alt="icon">
                                </div>
                                <div class="content-widget__body">
                                    <h3 class="content-widget__title">Access Anytime, Anywhere</h3>
                                    <p>
                                        No matter where you are or what device you’re using—laptop, tablet, or phone—{{$siteName}}
                                        keeps you connected and in control of your business at all times. It’s like having your office in your pocket!
                                    </p>
                                </div>
                            </div>
                            <div class="content-widget">
                                <div class="content-widget__icon">
                                    <img src="{{asset('home/image/home-9/list-icon-2.svg')}}" alt="icon">
                                </div>
                                <div class="content-widget__body">
                                    <h3 class="content-widget__title">Set Up in a Snap</h3>
                                    <p>
                                        We know time is precious, so we’ve made getting started with {{$siteName}} super quick.
                                        In just a few minutes, you’ll be up and running, ready to tackle tasks, manage
                                        your team, and handle projects with ease.
                                    </p>
                                </div>
                            </div>
                            <div class="content-widget">
                                <div class="content-widget__icon">
                                    <img src="{{asset('home/image/home-9/list-icon-3.svg')}}" alt="icon">
                                </div>
                                <div class="content-widget__body">
                                    <h3 class="content-widget__title">Automate and Simplify</h3>
                                    <p>
                                        Why do things the hard way? Automate your scheduling, track progress, and keep
                                        everyone on the same page with our simple-to-use tools. {{$siteName}} lets you handle
                                        all the busy work, so you can focus on what really matters—growing your business!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home  9 : Testimonial Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-9_testimonial-section padding-bottom-150">
        <div class="container">
            <div class="row row--custom">
                <div class="col-lg-7">
                    <div class="intagrate-block">
                        <h2 class="heading-lg heading-lg--syne text-black-3 content-title">
                            The Cool Tools We Use to Build Awesome Stuff
                        </h2>
                        <div class="home-9_integrate-brand-wrapper">
                            <div class="row brand-image-row">
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/nodejs.png')}}" alt="image alt"
                                        style="width: 80px;">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/php.png')}}" alt="image alt"
                                             style="width: 80px;">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/python.svg')}}" alt="image alt"
                                             style="width: 80px;">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/javascript.webp')}}" alt="image alt"
                                             style="width: 80px;">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/reactjs.png')}}" alt="image alt"
                                             style="width: 80px;">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/vuejs.webp')}}" alt="image alt"
                                             style="width: 80px;">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/laravel.png')}}" alt="image alt"
                                             style="width: 80px;">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/golang.png')}}" alt="image alt"
                                             style="width: 80px;">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/flutter.png')}}" alt="image alt"
                                             style="width: 80px;">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/figma.webp')}}" alt="image alt"
                                             style="width: 80px;">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/trello.png')}}" alt="image alt"
                                             style="width: 80px;">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/brand-12.png')}}" alt="image alt">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="testimonial-widget-large-2">
                        <div class="testimonial-widget-large-__icon content-image--mobile-width">
                            <img src="{{asset('home/image/home-9/testimonial-icon.svg')}}" alt="testimonial icon">
                        </div>
                        <p class="testimonial-widget-large-2__review-text">
                            "
                            It’s has been nothing short of awesomeness, from their engagement, to their process and their
                            deliverables. I would recommend their services for your business. Thank you {{$siteName}}
                            "
                        </p>
                        <div class="testimonial-widget-large-2__body">
                            <div class="testimonial-widget-large-2__user-image">
                                <img src="{{asset('home/image/home-9/tom.png')}}" alt="image alt">
                            </div>
                            <div class="testimonial-widget-large-2__user-metadeta">
                                <h4 class="testimonial-widget-large-2__user-name">
                                    Precious Tom
                                </h4>
                                <span class="testimonial-widget-large-2__user-position">
                            Founder Pandascrow Ltd
                        </span>
                            </div>
                        </div>
                        <div class="testimonial-widget-large-2__link">
                            <a href="https://www.trustpilot.com/review/{{$siteName}}ng.com" target="_blank">Read All Reviews <i class="fa-solid fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 9  : FAQ Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-9_faq-section padding-bottom-120">
        <div class="home-9_faq-shape">
            <img src="{{asset('home/image/home-9/faq-shape.svg')}}" alt="image alt">
        </div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xxl-7 col-lg-8 col-md-9">
                    <div class="home-9_section-heading">
                        <h2 class="home-9_section-heading__title heading-lg heading-lg--syne text-black-3">
                            Got Questions? We’ve Got Answers!
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row row--custom">
                <div class="col-lg-12">
                    <div class="accordion-style-3" id="home-9_faq">
                        <div class="accordion-item">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-item-1"
                                    aria-expanded="true" aria-controls="faq-item-1"> Q. What does {{$siteName}} do? </button>
                            <div id="faq-item-1" class="accordion-collapse collapse show" data-bs-parent="#home-9_faq">
                                <div class="accordion-item__body">
                                    {{$siteName}} builds custom software, mobile apps, and business management systems that help
                                    companies work smarter. If you need tech to grow your business, we’re here to make it happen!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-item-2"
                                    aria-expanded="false" aria-controls="faq-item-2"> Q. Can you help small businesses too? </button>
                            <div id="faq-item-2" class="accordion-collapse collapse" data-bs-parent="#home-9_faq">
                                <div class="accordion-item__body">
                                    Absolutely! Whether you're just starting out or running an established small business,
                                    we create tech solutions that fit your size and budget.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-item-3"
                                    aria-expanded="false" aria-controls="faq-item-3">
                                Q. How long does it take to build software with {{$siteName}}? </button>
                            <div id="faq-item-3" class="accordion-collapse collapse" data-bs-parent="#home-9_faq">
                                <div class="accordion-item__body">
                                    It depends on what you need! Simple projects can take a few weeks, while more complex
                                    systems might take a few months. We’ll work with you to make sure everything stays on track.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-item-4"
                                    aria-expanded="false" aria-controls="faq-item-4">
                                Q. What kind of technology do you use? </button>
                            <div id="faq-item-4" class="accordion-collapse collapse" data-bs-parent="#home-9_faq">
                                <div class="accordion-item__body">
                                    We use a wide range of technologies like Laravel, Node.js, React, Flutter, and more
                                    to create modern, scalable solutions for your business.
                                </div>
                            </div>
                        </div> ,
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-item-5"
                                    aria-expanded="false" aria-controls="faq-item-5">
                                Q. What makes {{$siteName}} different? </button>
                            <div id="faq-item-5" class="accordion-collapse collapse" data-bs-parent="#home-9_faq">
                                <div class="accordion-item__body">
                                    We’re not just your tech experts—we’re your ride-or-die partners! We take the time to
                                    truly understand your business and create solutions that help you grow and thrive.
                                    And guess what? We’re always just a call away when you need us, ready to jump in and help.
                                    After all, we know a new company can’t afford to let clients down, so we’ve made it
                                    our mission to keep you happy every step of the way. We’ve got your back, always! 😊
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-item-6"
                                    aria-expanded="false" aria-controls="faq-item-6">
                                Q. Do you offer support after the project is finished? </button>
                            <div id="faq-item-6" class="accordion-collapse collapse" data-bs-parent="#home-9_faq">
                                <div class="accordion-item__body">
                                    Yes! We provide ongoing support, maintenance, and updates. Think of us as your long-term tech partner!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-item-7"
                                    aria-expanded="false" aria-controls="faq-item-7">
                                Q. Can you scale your solutions as my business grows? </button>
                            <div id="faq-item-7" class="accordion-collapse collapse" data-bs-parent="#home-9_faq">
                                <div class="accordion-item__body">
                                    Absolutely! Our solutions are designed to grow with you, whether you're expanding your
                                    team, adding new services, or taking on more customers.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-item-8"
                                    aria-expanded="false" aria-controls="faq-item-8">
                                Q. How do I get started with {{$siteName}}? </button>
                            <div id="faq-item-8" class="accordion-collapse collapse" data-bs-parent="#home-9_faq">
                                <div class="accordion-item__body">
                                    Easy! Just get in touch with us and let’s talk about your business needs. We’ll walk
                                    you through the process and start creating a plan just for you.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-item-9"
                                    aria-expanded="false" aria-controls="faq-item-9">
                                Q. What industries do you serve? </button>
                            <div id="faq-item-9" class="accordion-collapse collapse" data-bs-parent="#home-9_faq">
                                <div class="accordion-item__body">
                                    We work with all kinds of industries, from e-commerce and healthcare to finance and
                                    retail. No matter your field, we’ve got the tools to help!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-item-10"
                                    aria-expanded="false" aria-controls="faq-item-10">
                                Q. How much does it cost to work with {{$siteName}}? </button>
                            <div id="faq-item-10" class="accordion-collapse collapse" data-bs-parent="#home-9_faq">
                                <div class="accordion-item__body">
                                    Pricing depends on the scope of your project, but don’t worry, we offer flexible plans
                                    to fit your budget. Just reach out and we’ll give you a clear idea of costs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-item-11"
                                    aria-expanded="false" aria-controls="faq-item-11">
                                Q. You did not build my software, can you manage and maintain it? </button>
                            <div id="faq-item-11" class="accordion-collapse collapse" data-bs-parent="#home-9_faq">
                                <div class="accordion-item__body">
                                    es, we offer our management and maintenance services even to software we did not build.
                                    Please contact our sales department for details on how this works.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(latestFromBlog()->count()>0)
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 8  : Service Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="home-8_blog-section padding-bottom-120 bg-cream">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xxl-7 col-xl-8 col-lg-9 col-md-10 col-auto mt-5">
                        <div class="section-heading">
                            <h2 class="section-heading__title heading-lg text-black-2">Browse our latest articles</h2>
                            <p>
                                We post a lot about technologies and how to make better solutions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-default justify-content-center">
                    @foreach(latestFromBlog() as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="blog-card h-100">
                                <div class="blog-card__image">
                                    <img src="i{{$blog->featuredImage}}" alt="image alt">
                                    <a href="#" class="blog-card__badge">{{$blog->category}}</a>
                                </div>
                                <div class="blog-card__body">
                                    <div class="blog-card__meta">
                                        <span><img src="{{asset('home/image/home-8/blog-card-icon-1.svg')}}" alt="icon">{{$blog->user->name}}</span>
                                        <span><img src="{{asset('home/image/home-8/blog-card-icon-2.svg')}}" alt="calender">
                                            {{$blog->updated_at->format('M d, Y')}}
                                        </span>
                                    </div>
                                    <h3 class="blog-card__title">{{$blog->title}}</h3>
                                    <a href="{{route('resources.blogDetail',['slug'=>$blog->slug])}}" class="blog-card__link btn-link btn-arrow">Read more </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endif

@endsection
