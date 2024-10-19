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
                    <img src="{{asset('home/image/solutions/IT-consultants.jpg')}}" alt="service image" class="w-100">
                </div>
                <div class="service-details_main-single">

                    <p>
                        Running a business is hard enough—throw in managing technology, and it can feel like juggling fire
                        while riding a bicycle! At {{$siteName}}, we believe that technology should make your life easier, not
                        more complicated. That’s why our I.T Consulting Services are designed to take the stress out of
                        tech and make sure it works for you, not the other way around.
                        <br/>
                        Imagine having a team of experts who understand both tech and business—that's exactly what we offer.
                        We work with you to find the perfect tech solutions that help your business run smoother, faster,
                        and better than ever before. No jargon, no confusion—just practical advice and systems that work!
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">We’re Not Just Techies, We’re Your Business Partners</h3>
                    <p>
                        Let's keep it real for a second: technology can be intimidating, but we’re here to simplify it for you.
                        Whether you're launching a startup or trying to streamline your existing operations, {{$siteName}}’s I.T ,
                        Consulting services make tech feel like an old friend, not some confusing monster.
                    </p>
                    <p>
                        Do you have a vision for your business, but no clue which technology will get you there? We’ve got
                        you! We’ll create a roadmap to success and walk you through every step of the process. Already have
                        a system in place, but it’s a bit of a hot mess? No problem! We’ll straighten it out and make it
                        run like a well-oiled machine. We’re here to make sure your technology is a blessing, not a burden.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        How We Make I.T Work For You: From Dream to Done
                    </h3>
                    <p>
                        Here’s the deal: no two businesses are the same, so why should your I.T strategy be? At {{$siteName}},
                        we tailor our solutions specifically for your business. We don’t believe in cookie-cutter strategies;
                        we customize everything to meet your goals and challenges.
                    </p>
                    <p>
                        <strong>Tailored Technology Strategies</strong>
                        It all starts with a conversation. We’ll sit down with you, get to know your business, and understand
                        your challenges. Then, we create a customized tech strategy that aligns perfectly with your goals.
                        Whether it’s choosing the right platforms, implementing efficient workflows, or even advising on
                        new projects, we’ve got you covered.
                        <br/>
                        We don’t just throw tech at you; we design strategies that make sense for your specific needs.
                        From startup ideas to scaling your operations, we ensure that you get exactly what works for you.
                    </p>
                    <p>
                        <strong> Infrastructure and Systems Design</strong>
                        Think of your business as a car engine—without the right parts, it won’t run smoothly. We design
                        and implement solid infrastructures that support your business like a dream. Whether you need better
                        servers, faster systems, or secure cloud solutions, we’ve got the expertise to build it for you.
                        <br/>
                        So, whether you're setting up a brand-new project or trying to untangle a web of old systems, we
                        can help. We'll make sure your systems are secure, scalable, and future-proof—ready for whatever comes next.
                    </p>
                    <p>
                        <strong>Tech Health Checks</strong>
                        Let’s be honest—when was the last time you checked on the health of your tech? If you’re not sure,
                        you’re not alone. That’s why we offer Tech Health Checks to assess your current systems, identify
                        inefficiencies, and fix any issues. We’ll ensure that your tech is running smoothly and that everything
                        is working as it should. It's like giving your business a full check-up!
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Why {{$siteName}} is Your Best Choice for I.T Consulting
                    </h3>
                    <p>
                        Now, you might be wondering, “Why should I choose {{$siteName}} for my I.T consulting?” Simple—because
                        we’re not just tech experts; we understand business, too. We know that technology isn’t worth much
                        unless it’s helping you meet your goals and grow your business. So, we’re here to make sure that happens.
                    </p>
                    <p>
                        <strong>We Speak Tech, But We Also Speak Business</strong>
                        At {{$siteName}}, we break things down in clear, simple terms. You won’t get overwhelmed with technical
                        jargon; instead, we explain everything in a way that makes sense for you. We make technology feel
                        accessible and easy to understand, so you know exactly what’s happening and why.
                    </p>
                    <p>
                        <strong> Full Support from Start to Finish</strong>
                        We don’t just give you a strategy and disappear. We’re there with you every step of the way. Whether
                        it’s during the implementation phase or months after, we provide ongoing support to ensure your
                        systems are running smoothly. Need training for your team? We’ve got you covered. Got a tech question?
                        Call us anytime!
                    </p>
                    <p>
                        <strong>We’re a Startup and Won’t Disappoint</strong>
                        One of the best parts about working with {{$siteName}} is that we’re a new startup ourselves, which means
                        we’ve got everything to prove. Your success is our success, and we won’t rest until you’re completely
                        satisfied. We understand the hustle of growing a business, and we put that same energy into making
                        sure we deliver results that go above and beyond your expectations.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Let’s Make Technology Work for You</h3>
                    <p>
                        Technology shouldn’t feel like a mystery—it should feel like your biggest asset. With {{$siteName}}’s I.T
                        Consulting Solutions, you’ll have the power to grow your business, improve efficiency, and get a
                        better handle on your tech without the headaches. So, are you ready to let us help you?
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
