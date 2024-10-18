@extends('home.layout.base')
@section('content')

    <div class="inner_banner-section">
        <img class="inner_banner-background-image" src="{{asset('home/image/common/inner-bg.png')}}" alt="image alt">
        <div class="container">
            <div class="inner_banner-content-block">
                <h3 class="inner_banner-title">
                    {{$pageName}}
                </h3>
                <ul class="banner__page-navigator">
                    <li>
                        <a href="{{route('landingPage')}}">Home</a>
                    </li>
                    <li class="active">
                        <a href="{{url()->current()}}">
                            {{$pageName}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~
    About : Banner Section
~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="about_banner-section mb-5">
        <div class="container">
            <div class="row justify-content-center row--custom">
                <div class="col-12">
                    <div class="row banner_image-row padding-top-100">
                        <div class="col-xs-4 col-7">
                            <div class="single-image-1">
                                <img src="{{asset('home/team/uchez.png')}}" alt="alternative text">
                            </div>
                        </div>
                        <div class="col-xs-4 col-7">
                            <div class="single-image-2">
                                <img src="{{asset('home/team/ceo2.jpg')}}" alt="alternative text">
                            </div>
                        </div>
                        <div class="col-xs-4 col-7">
                            <div class="single-image-3">
                                <img src="{{asset('home/team/cfo.jpeg')}}" alt="alternative text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~
      About : Content Section
    ~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="about_content-section bg-light-2  section-padding-120">
        <div class="container">
            <div class="row row--custom ">
                <div class="col-xxl-6 col-lg-5 col-md-6 col-7">
                    <div class="about_content-image-block ">
                        <div class="about_content-image content-image--mobile-width">
                            <img src="{{asset('home/team/uchez2.png')}}" alt="alternative text">
                        </div>
                        <a href="https://www.youtube.com/watch?v=zo9dJFo8H8g" data-fancybox class="btn-play absolute-center btn-play">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-7 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-md text-black">
                                Building Strong Brands and Creating Seamless Digital Experiences That Drive Growth
                            </h2>
                            <p>
                                Once upon a time, we were known as Kopium—an ambitious, creative tech startup with a dream
                                to help businesses succeed through technology. But as we grew, so did our vision. We realized
                                that what we were doing wasn’t just about helping businesses; it was about empowering them
                                to thrive in a rapidly evolving digital world. That’s when XulTech was born—a new name,
                                a bigger vision, and a stronger commitment to delivering cutting-edge solutions.
                            </p>
                            <p>
                                So why the change? Well, as Kopium, we found ourselves outgrowing our old name. We needed
                                something that better reflected our mission: to provide expert, layered, and unified technology
                                solutions (hence the XUL: Xpert Unified Layers). We knew that by rebranding to XulTech,
                                we’d better communicate who we are and what we stand for—delivering more than just tech,
                                but full, unified experiences that help businesses grow smarter.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-7 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="content">
                        <div class="content-text-block">
                            <p>
                                At XulTech, we’re all about using the right tech to solve real-world problems, without
                                the jargon and tech-speak. Whether we’re developing a custom mobile app, streamlining your
                                business with a powerful management system, or building you an e-commerce platform that
                                shines, we believe in keeping things simple, practical, and effective. We take the time
                                to understand your business because, let’s be honest, one-size-fits-all doesn’t work in
                                the tech world (or anywhere, really).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-7 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-right">
                    <div class="content">
                        <div class="content-text-block">
                            <p>
                                Our journey from Kopium to XulTech wasn’t just about changing our name—it was about evolving
                                with our clients, their needs, and the ever-growing tech landscape. And that’s what we’re
                                here for: to grow with you, to innovate, and to make sure your business is always a step
                                ahead in this fast-paced digital world.<br/>
                                So, if you're looking for a team that genuinely cares about your success, values collaboration,
                                and believes in creating tech solutions that fit, welcome to XulTech. We’ve got the expertise,
                                the passion, and the layers to help your business thrive. Let's build something amazing together!
                            </p>
                            <div class="content-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12 col-lg-12 col-md-12 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="content">
                        <div class="content-testimonial">
                            <div class="content-testimonial__text">
                                <p>
                                    “At XulTech, we’re passionate about what we do. We work hand-in-hand with our clients
                                    to ensure their digital transformation drives lasting success.”
                                </p>
                            </div>
                            <div class="content-testimonial__user-metadata">
                                <div class="content-testimonial__user">
                                    <img src="{{asset('home/team/ceo2.jpg')}}" style="width: 50px;" alt="alternative text">
                                </div>
                                <div class="content-testimonial__body">
                                    <h4 class="content-testimonial__user-name">Michael Erastus</h4>
                                    <span>CEO & Founder @ {{$siteName}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~
About : Fact Section
~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="about_fact-section  section-padding-120">
        <div class="container">
            <div class="row row--custom ">
                <div class="col-xxl-auto  col-lg-7 col-md-10 col-auto">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-md text-black">With over a decade of expertise, XulTech is all about the details so you don’t have to be.</h2>
                            <p>
                                When you partner with XulTech, you can trust that every software solution, website, or
                                business tool we build meets the highest standards of quality and performance. From ensuring
                                your platform runs smoothly to making sure it’s ready to scale with your growth, we handle
                                the complexity so you can focus on running your business. Our team’s commitment to precision
                                and innovation ensures that when you work with us, your business is equipped with technology built for success.
                            </p>
                        </div>
                        <div class="content-button-block">
                            <a href="{{route('bookUsPage')}}" class="btn-masco btn-primary rounded-pill btn-fill--up"><span>Get in touch</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 col-auto">
                    <div class="about_stats-wrapper">
                        <div class="col-6">
                            <div class="about_stats-single">
                                <h2 class="about_stats-single__count">50+</h2>
                                <span>Satisfied clients</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about_stats-single">
                                <h2 class="about_stats-single__count">100+</h2>
                                <span>Successful projects</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about_stats-single">
                                <h2 class="about_stats-single__count">29.3%</h2>
                                <span>Business Growth</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~
   About : Feature Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="about_feature-section section-padding-120 bg-light-2">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-10 col-xs-10">
                    <div class="section-heading">
                        <h2 class="section-heading__title heading-md text-black">Our core values that drive everything we do</h2>
                    </div>
                </div>
            </div>
            <div class="row feature-widget-7-row  ">
                <div class="col-lg-4 col-md-6 col-xs-8 col-9">
                    <div class="feature-widget-7">
                        <div class="feature-widget-7__icon-wrapper">
                            <img src="{{asset('home/image/home-9/collaboration.png')}}" alt="feature icon" style="width: 50px;">
                        </div>
                        <div class="feature-widget-7__body">
                            <h4 class="feature-widget-7__title">Collaboration</h4>
                            <p>
                                We believe the best solutions come from working closely with our clients. We don’t just
                                build tech; we build partnerships. Your input is essential, and we’re with you every step of the way.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-8 col-9">
                    <div class="feature-widget-7">
                        <div class="feature-widget-7__icon-wrapper">
                            <img src="{{asset('home/image/home-9/customer-support.png')}}" alt="feature icon" style="width: 50px;">
                        </div>
                        <div class="feature-widget-7__body">
                            <h4 class="feature-widget-7__title">Customer Support</h4>
                            <p>
                                We believe great technology deserves great support. Our team is dedicated to providing
                                responsive, reliable customer service, ensuring that you’re never left in the dark when you need us most.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-8 col-9">
                    <div class="feature-widget-7">
                        <div class="feature-widget-7__icon-wrapper">
                            <img src="{{asset('home/image/about/feature-icon-3.svg')}}" alt="feature icon" style="width: 50px;">
                        </div>
                        <div class="feature-widget-7__body">
                            <h4 class="feature-widget-7__title">Innovation</h4>
                            <p>
                                We thrive on finding creative, cutting-edge solutions to help our clients stay ahead in
                                an ever-evolving digital world. At XulTech, innovation isn’t just a buzzword—it’s how we bring your ideas to life.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-8 col-9">
                    <div class="feature-widget-7">
                        <div class="feature-widget-7__icon-wrapper">
                            <img src="{{asset('home/image/home-9/integrity.png')}}" alt="feature icon" style="width: 50px;">
                        </div>
                        <div class="feature-widget-7__body">
                            <h4 class="feature-widget-7__title">Integrity</h4>
                            <p>
                                Trust is at the heart of what we do. We deliver on our promises and maintain transparency
                                in every project. When you work with XulTech, you know you’re getting honest, reliable service.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-8 col-9">
                    <div class="feature-widget-7">
                        <div class="feature-widget-7__icon-wrapper">
                            <img src="{{asset('home/image/home-9/excellence.png')}}" alt="feature icon" style="width: 50px;">
                        </div>
                        <div class="feature-widget-7__body">
                            <h4 class="feature-widget-7__title">Excellence</h4>
                            <p>
                                We sweat the small stuff so you don’t have to. From the tiniest details to the big picture,
                                we strive for excellence in every solution we deliver, ensuring the highest quality for our clients.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-8 col-9">
                    <div class="feature-widget-7">
                        <div class="feature-widget-7__icon-wrapper">
                            <img src="{{asset('home/image/home-9/adaptability.png')}}" alt="feature icon" style="width: 50px;">
                        </div>
                        <div class="feature-widget-7__body">
                            <h4 class="feature-widget-7__title">Adaptability</h4>
                            <p>
                                No two businesses are alike, and neither are their needs. We pride ourselves on being
                                flexible and adaptable, crafting solutions that grow and evolve with your business.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
