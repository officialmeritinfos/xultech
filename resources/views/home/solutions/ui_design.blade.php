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

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~
    Service Details main Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="service-details_main-section section-padding-120" style="padding:2rem;">
        <div class="row justify-content-center ">
            <div class="col-lg-8">
                <div class="service-details_main-image">
                    <img src="{{asset('home/image/solutions/ui-ux.webp')}}" alt="service image" class="w-100">
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Creating Digital Experiences with a Human Touch</h3>
                    <p>
                        When it comes to UI/UX design, {{$siteName}} isn’t just in the game—we’re changing it. We believe that
                        great design isn’t just about aesthetics; it’s about crafting digital experiences that make users
                        feel understood, empowered, and, dare we say it, a little bit delighted.
                    </p>
                    <p>
                        We know that design is about more than pretty buttons and fancy fonts (although we love those too).
                        It’s about creating intuitive, engaging, and seamless interactions between humans and technology.
                        And at {{$siteName}}, we’ve mastered the art of blending creativity, functionality, and a sprinkle of
                        fun to bring your visions to life.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">What is UI/UX Design?</h3>
                    <p>
                        Let’s start with the basics: UI (User Interface) refers to everything that a user interacts with
                        on a digital platform—the buttons, the layout, the images, and the text. On the other hand, UX (User Experience)
                        is all about how those interactions make a user feel. Is the navigation smooth? Are the buttons
                        where they should be? Does the experience make users want to come back for more, or does it make
                        them want to throw their device out the window?
                        <br/>
                        We believe that UI and UX go hand in hand. A sleek interface without a good user experience is like
                        a shiny new car without an engine—it may look good, but it’s not going anywhere.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <li><img src="{{asset('home/image/icons/icon-check-blue.svg')}}" alt="image alt">
                                <span>
                                UI/UX design is like a joke—if you have to explain it, it’s probably not that good. A great
                                design speaks for itself, guiding users effortlessly without making them think, 'Wait, what do I do next?'
                                That is why at {{$siteName}}, we make sure your users are laughing with delight, not scratching their heads.
                            </span>
                            </li>
                        </div>
                        <div class="col-md-6">
                            <li>
                                <img src="{{asset('home/image/icons/icon-check-blue.svg')}}" alt="image alt">
                                <span>
                                    Think of UI/UX as the invisible hand that’s always there to make life easier. It’s like
                                    the friend who holds the door open for you, refills your coffee before you even ask, and
                                    makes sure you don’t trip over anything—all without being asked. That’s what we do at
                                    {{$siteName}}, minus the coffee refills (for now).
                                </span>
                            </li>
                        </div>
                    </div>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Why UI/UX Matters More Than Ever</h3>
                    <p>
                        Let’s face it, we live in a world where attention spans are shorter than a TikTok video, and users
                        demand seamless, instant gratification. If your digital product doesn’t make their life easier
                        within the first few seconds, they’re out.
                        <br/>
                        UI/UX design is no longer a luxury—it’s a necessity. It’s the difference between a user staying
                        on your website and converting into a customer or bouncing away faster than you can say "404 error."
                        The right design can create lasting impressions, build trust, and keep users engaged, while poor
                        design does the exact opposite.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">{{$siteName}}’s Approach to UI/UX Design</h3>
                    <p>
                        At {{$siteName}}, our approach to UI/UX is simple: we put the user at the center of everything we do.
                        That means we don’t just design for the sake of design—we create solutions that solve real problems
                        and make life easier for your users. And let’s be honest, nothing beats the joy of hearing,
                        “Wow, that was easy!” from a happy user.
                        <br/>
                        But here’s the thing: good design doesn’t happen by accident. It’s a process, and we’ve perfected ours.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <strong>The {{$siteName}} Difference: Merging Creativity with Functionality:</strong><br/>
                                We’re proud of our knack for blending creative design with functional usability. You could call
                                us digital architects, designing not just to impress but to deliver. Whether we’re designing a
                                sleek mobile app or an intuitive website, we ensure that every pixel has a purpose and that purpose
                                is to make your users' journey smooth and enjoyable.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Putting Users First:</strong><br/>
                                User-centered design is not a buzzword at {{$siteName}}—it’s a way of life. We start every project by
                                understanding your users’ needs, frustrations, and desires. We don’t guess; we research. Then, we
                                turn those insights into designs that feel like second nature to the user. Everything we design
                                is intuitive, easy to use, and—most importantly—fun.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">{{$siteName}} UI/UX Design Process</h3>
                    <p>
                        You wouldn’t build a house without a blueprint, right? Well, the same goes for digital products.
                        Our design process is built around collaboration, iteration, and, let’s be honest, a few late-night
                        brainstorming sessions fueled by pizza.
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <p>
                                <strong>Step 1: Understanding the Client and Their Audience:</strong><br/>
                                We start by getting to know you. What’s your vision? Who are your users? What makes them
                                tick? This discovery phase is critical because it helps us design with purpose, not just aesthetics.
                                <br/>
                                We ask a lot of questions—some serious, some weird (“If your website were a celebrity,
                                who would it be?”)—to dig deep into your brand and audience.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Step 2: Research and Competitor Analysis:</strong><br/>
                                We don’t just look at your competitors—we study them. What are they doing right? Where are
                                they missing the mark? Then, we figure out how to do it better. This phase is all about
                                finding gaps in the market and figuring out how your product can stand out.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Step 3: Wireframing and Prototyping:</strong><br/>
                                Once we have a solid understanding of your users and competitors, we start sketching.
                                Wireframes are the skeleton of your product—no frills, just structure. Then, we bring those
                                wireframes to life with interactive prototypes that let you see, click, and experience the product before it’s fully built.
                                <br/>
                                At {{$siteName}}, we live by the motto, “Prototype early, prototype often.” Why? Because it’s easier (and cheaper)
                                to fix issues at this stage than after the product is live. Plus, it’s fun to see your ideas come to life in real time.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Step 4: User Testing and Iteration:</strong><br/>
                                Now comes the fun part—user testing. We put your prototype in front of real users and watch
                                how they interact with it. What’s working? What’s confusing? Where are they getting stuck?
                                We gather feedback and iterate until the experience feels smooth and intuitive.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Step 5: Launch and Post-Launch Analysis:</strong><br/>
                                -Once your product is live, we don’t just walk away and high-five ourselves (although we might do that too depending on our contract).
                                We stick around to make sure everything is working as planned. We analyze user behavior,
                                track performance, and make tweaks as needed to ensure long-term success.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row service-details_main-image-row">
                    <div class="col-12">
                        <img src="{{asset('home/image/solutions/prototyping.webp')}}" alt="service image" class="w-100">
                    </div>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">The Power of Prototyping</h3>
                    <p>
                        Let’s talk about prototyping, shall we? It’s kind of like test-driving a car before you buy it—only
                        without the awkward small talk with the car salesman. Prototyping allows us to test ideas, gather
                        feedback, and refine designs before a single line of code is written.
                    </p>
                    <p>
                        At {{$siteName}}, we use tools like Figma, Sketch, and InVision to create high-fidelity prototypes that
                        give you a realistic preview of the final product. You can click, scroll, and interact with the
                        design just like a live website or app. And the best part? If something doesn’t feel right, we
                        can fix it before it becomes a bigger (and more expensive) problem.
                    </p>
                    <p>
                        <strong>Why Prototyping Matters</strong><br/>
                        Prototyping isn’t just a nice-to-have—it’s a game-changer. It saves time, money, and countless
                        headaches down the road. Plus, it’s an awesome way to get feedback early on and make sure we’re
                        building something your users will love.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Why {{$siteName}} is the Perfect UI/UX Partner
                    </h3>
                    <p>
                        So, why should you choose {{$siteName}} as your go-to partner for UI/UX design? Simple. We don’t just
                        design digital products—we craft experiences that people love using, again and again. We believe
                        that the best design is invisible; it’s seamless, intuitive, and makes the user’s journey feel effortless.
                    </p>
                    <p>
                        At {{$siteName}}, we don’t follow the trends—we set them. With our team of creative wizards and tech geniuses,
                        we make sure your users not only enjoy the digital experience but also become loyal advocates for
                        your brand. We combine the art of design with the science of usability to deliver solutions that
                        are both beautiful and functional. Whether it’s crafting a user-friendly app or creating an engaging
                        website, we ensure that every pixel and interaction is carefully thought out.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
