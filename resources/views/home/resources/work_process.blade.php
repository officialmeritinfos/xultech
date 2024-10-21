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
  About : Content Section
~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="about_content-section bg-light-2  section-padding-120">
        <div class="container">
            <div class="row row--custom ">
                <div class="col-xxl-6 col-lg-5 col-md-6 col-7">
                    <div class="about_content-image-block ">
                        <div class="about_content-image content-image--mobile-width">
                            <img src="{{asset('home/image/resiources/discovery-phase.png')}}" alt="alternative text">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-7 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-md text-black">
                                The Discovery Phase: We Listen, We Learn, We Understand
                            </h2>
                            <p>
                                First things first, we need to get to know you and your business! The Discovery Phase is
                                where we dive deep into understanding your needs, goals, and vision. Think of it like a
                                coffee chat—except instead of small talk, we’ll be talking about your big ideas.
                                <br/>
                                <strong>Getting to Know You:</strong> We’ll ask you questions—lots of them! (Don’t worry, it’s not a quiz).
                                We want to understand your pain points, business objectives, and what you hope to achieve.
                                <br/>
                                <strong>Understanding Your Audience:</strong> Who are you trying to reach? What are their
                                pain points? We want to get inside the minds of your customers to ensure that the solution
                                we build speaks directly to them.
                                <br/>
                                <strong>Mapping Out the Project Scope:</strong>
                                Once we’ve gotten to know you and your business, we’ll map out the project. This includes
                                timelines, deliverables, and resources needed. It's like planning a road trip—we’ll set
                                the destination and make sure we know the best route to get there!
                            </p>
                            <div class="content-divider"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 1  : Content Section 1
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-1_content-section-1 section-padding-120">
        <div class="container">
            <div class="row row--custom">
                <div class="offset-xl-1 col-lg-5 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="home-1_content-image-1 content-image--mobile-width">
                        <img src="{{asset('home/image/resiources/strategy.svg')}}" alt="alternative text">
                        <div class="home-1_content-image-1-shape">
                            <img src="{{asset('home/image/home-1/content-image-1-shape.svg')}}" alt="alternative text">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-right">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-md text-black">
                                The Strategy Phase: Crafting a Tailored Plan of Action
                            </h2>
                            <p>
                                After understanding your needs, it’s time to get strategic. In the Strategy Phase, we put
                                together a solid plan that ensures your project doesn’t just meet expectations—it exceeds them.
                                This is where the real magic starts to happen.
                            </p>
                            <p>
                               <strong>Solution Design:</strong>
                                Whether we’re building a website, mobile app, or custom software, we brainstorm the best
                                technical solutions. Our team of strategists, developers, and designers collaborate to create
                                a roadmap tailored to your goals.<br/>
                               <strong>Wireframes and Prototypes:</strong>
                                Before we dive into the coding and design work, we create wireframes or prototypes that
                                show you how your product will look and function. This gives you a chance to provide feedback
                                before we move forward. It’s like designing the blueprint before building the house—just without the hard hats.
                                <br/>
                               <strong>Clear Communication:</strong>
                                During this phase, we’ll keep you updated at every step. You’ll know exactly what’s happening
                                and why, with regular check-ins and status updates.
                            </p>
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
                            <img src="{{asset('home/image/resiources/design.svg')}}" alt="alternative text">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-7 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-md text-black">
                                The Design Phase
                            </h2>
                            <p>
                                Ah, the Design Phase—this is where we let our creativity shine! We take all the ideas from
                                the Discovery and Strategy phases and turn them into stunning, user-friendly designs that
                                not only look good but are also functional and practical.
                                <br/>
                                <strong>User Experience(UX) Design: </strong> We start by designing the user experience,
                                ensuring that your website or app is easy to navigate, intuitive to use, and delivers an
                                experience your users will love.
                                <br/>
                                <strong>User Interface (UI) Design:</strong> Once the UX is nailed down, our design team
                                creates a visually stunning user interface that aligns with your brand and speaks to your audience.
                                <br/>
                                <strong>Feedback and Revisions:</strong>
                                We’re not just designing for us—we’re designing for you and your users. We encourage feedback
                                at every stage of the design process.
                            </p>
                            <div class="content-divider"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Home 1  : Content Section 1
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-1_content-section-1 section-padding-120">
        <div class="container">
            <div class="row row--custom">
                <div class="offset-xl-1 col-lg-5 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="home-1_content-image-1 content-image--mobile-width">
                        <img src="{{asset('home/image/resiources/development.svg')}}" alt="alternative text">
                        <div class="home-1_content-image-1-shape">
                            <img src="{{asset('home/image/home-1/content-image-1-shape.svg')}}" alt="alternative text">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-right">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-md text-black">
                                The Development Phase: Turning Ideas into Reality
                            </h2>
                            <p>
                                Now that we’ve got a design everyone loves, it’s time for the Development Phase—this is
                                where the magic happens! Our skilled developers get to work turning those beautiful designs
                                into functional, scalable, and secure systems.
                            </p>
                            <p>
                                <strong>Frontend Development:</strong>
                                Our front-end developers bring the UI/UX designs to life, ensuring that every button, animation, ,
                                and interaction is pixel-perfect. We use the latest technologies like React, Vue.js, Tailwind CSS,
                                and Bootstrap to build lightning-fast, responsive solutions.
                                <br/>
                                <strong>Backend Development:</strong>
                                Meanwhile, our back-end developers are busy building the engine that powers the system.
                                Whether we’re using Node.js, Laravel, Django, or GoLang, we ensure that your platform is
                                secure, scalable, and ready to handle whatever comes its way.
                                <br/>
                                <strong>Integrations & API:</strong>
                                If your solution requires third-party integrations—like payment gateways, CRMs, or social
                                media logins—our developers make sure everything works seamlessly together.
                            </p>
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
                            <img src="{{asset('home/image/resiources/testing.svg')}}" alt="alternative text">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-7 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-md text-black">
                                The Testing Phase: We Break It So You Don’t Have To
                            </h2>
                            <p>
                                Before we launch, we want to make sure everything works perfectly. During the Testing Phase,
                                we test every feature, button, and interaction to make sure the final product is bug-free
                                and works smoothly across all devices.
                                <br/>
                                <strong>Functional Testing: </strong> We make sure all the features work as they should—whether
                                it’s making a payment, submitting a form, or navigating through the site. If something doesn’t work, we fix it!
                                <br/>
                                <strong>Performance Testing:</strong>
                                We test how well your solution performs under load. Whether it’s handling high traffic or
                                large amounts of data, we make sure your system can handle the pressure without crashing.
                                <br/>
                            </p>
                            <div class="content-divider"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Home 1  : Content Section 1
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-1_content-section-1 section-padding-120">
        <div class="container">
            <div class="row row--custom">
                <div class="offset-xl-1 col-lg-5 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="home-1_content-image-1 content-image--mobile-width">
                        <img src="{{asset('home/image/resiources/launch.svg')}}" alt="alternative text">
                        <div class="home-1_content-image-1-shape">
                            <img src="{{asset('home/image/home-1/content-image-1-shape.svg')}}" alt="alternative text">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-right">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-md text-black">
                                The Launch Phase: Time to Go Live!
                            </h2>
                            <p>
                                It’s the big day! Everything is ready, and it’s time to launch your project into the world.
                                The Launch Phase is where we push your solution live and ensure everything goes off without a hitch.
                            </p>
                            <p>
                                <strong>Pre-Launch Checklist:</strong>
                                Before the big launch, we go through a detailed checklist to make sure everything is ready.
                                This includes final testing, backups, and security checks to ensure your launch is smooth.
                                <br/>
                                <strong>Go Live:</strong>
                                We flip the switch and make your project available to the public! Whether it’s a new website,
                                app, or software system, we monitor the launch to ensure everything is running smoothly.
                                <br/>
                                <strong>Post-Launch Support:</strong>
                                Just because we’ve launched doesn’t mean we’re done. We stick around for post-launch support
                                to address any last-minute changes, fixes, or updates. Think of it like having a safety net
                                after a circus performance—you’re in good hands.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
