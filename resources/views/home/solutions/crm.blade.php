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
                    <img src="{{asset('home/image/solutions/crm-system.png')}}" alt="service image" class="w-100">
                </div>
                <div class="service-details_main-single">

                    <p>
                        Picture this: you’ve got customers coming in left, right, and center. Orders are flying in, emails
                        are pinging, and your phone is buzzing off the hook. It’s all great... until it isn’t. Suddenly,
                        you’re buried in sticky notes, drowning in emails, and relying on that one spreadsheet that’s starting
                        to look more like a jumbled crossword puzzle than a customer database. Enter the CRM Solution from
                        {{$siteName}}. This isn’t your grandma’s Rolodex <sup><i class="fa fa-info-circle"
                            data-bs-toggle="tooltip" title="A Rolodex is a rotating file device used to store business contact information.
                            It was commonly used in offices before the digital age to organize and quickly access people's names, addresses,
                            and phone numbers."></i></sup> —it’s a powerhouse that helps you manage your customers
                        like a pro (and without losing your mind).
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Why You Need CRM (Spoiler: It’s More Than Just Customer Names)</h3>
                    <p>
                        Let’s be honest, trying to keep track of customers manually is like trying to juggle flaming bowling
                        pins while riding a unicycle—doable, but why would you want to? With a CRM (Customer Relationship Management)
                        system, we take all that chaos and turn it into orderly, actionable data. No more guessing who last
                        called or which lead is the hottest. Your CRM keeps everything neat, organized, and—dare we say it—easy.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">The Story of Two Businesses: With CRM and Without</h3>
                    <p>
                        So, there are two businesses, just like our old friends, Papa Chukwudi and Mr. Bayo. Let’s meet
                        Tobi’s Tech Repairs and Kemi’s Gadget Fixers. Both repair gadgets, both have fantastic customer
                        service, but only one of them uses a CRM. Guess which one’s about to blow up?
                        <br/>
                        <strong>Kemi’s Gadget Fixers: No CRM, No Control:</strong><br/>
                        Kemi’s shop is booming, but her customer data is spread across notebooks, Excel sheets, and her memory.
                        Every time a customer calls, she’s scrambling to remember their repair status. Missed follow-ups?
                        Plenty. Repetitive customer complaints? You bet. Kemi is working twice as hard just to keep her
                        business afloat because she’s manually juggling everything. It’s chaos, and honestly, she’s losing
                        her mind (and her customers).
                        <br/>
                        <strong>Tobi’s Tech Repairs: CRM for the Win</strong><br/>
                        Tobi, on the other hand, has {{$siteName}}’s CRM system running like a well-oiled machine. Every customer
                        interaction is logged, every repair status is updated in real-time, and follow-up emails? Automated.
                        Tobi isn’t just keeping track of customer names—he’s building relationships. His customers feel valued,
                        informed, and come back again and again. Oh, and he’s not drowning in paperwork. Bonus!
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Why a CRM System Is Basically Your Business’s Best Friend</h3>
                    <p>
                        Let’s break it down. A CRM is like having that one friend who remembers everyone’s birthday and
                        sends you reminders so you don’t look like a forgetful goof. It’s there to make sure you stay on
                        top of your customers, leads, and follow-ups without lifting a finger. Here’s how we do it at {{$siteName}}:
                        <br/>
                        <strong> Keep Track of Everything: </strong><br/>
                        Emails, calls, appointments, sales—our CRM logs it all. No more guessing which customer bought
                        what last year or searching through your inbox for that important email. It’s all in one place,
                        ready when you need it.
                        <br/>
                        <strong>Automate Follow-Ups: </strong><br/>
                        Ever forgotten to follow up on a hot lead? It’s okay, we’ve all been there. But not anymore! With
                        our CRM, follow-ups are automated. You can set it and forget it. Your system will remind you when
                        it’s time to reach out again, or better yet, it’ll send out the message for you.<br/>
                        <strong>Stay Organized Like a Pro: </strong><br/>
                        Instead of juggling customers, quotes, and sales on sticky notes and in your head, you’ll have one
                        organized system where everything’s color-coded, labeled, and searchable. It's like Marie Kondo
                        for your business data.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">We Make CRM Setup So Easy, Your Grandma Could Do It</h3>
                    <p>
                        Setting up a CRM can sound complicated, but that’s where {{$siteName}} comes in. We’ll get you up and
                        running in no time. No rocket science involved—just straightforward steps to get all your customer
                        info in one place, set up automations, and start working smarter, not harder.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <strong>Customizable for Your Needs:</strong><br/>
                                Our CRM solution isn’t cookie-cutter. Whether you’re a small local business or a growing
                                enterprise, we’ll customize the system to fit your workflows, goals, and business model.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Integrations Galore:</strong><br/>
                                Already using other tools to run your business? No problem! We’ll integrate your CRM with
                                everything from your email marketing platform to your payment systems, so all your data
                                works together seamlessly.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Complete Access on Your Phone:</strong><br/>
                                Whether it’s tracking sales, updating customer details, or setting reminders, you can do
                                it all from your phone. Our CRM platforms are designed to be easy to use on small screens,
                                so you’re never fumbling around to find what you need.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Real-Time Updates:</strong><br/>
                                Keep your business running smoothly with real-time updates. You can make changes, send
                                follow-up emails, or even assign tasks to your team—all from your mobile device, so you’re
                                never behind on anything, no matter where you are.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Designed for Busy Business Owners:</strong><br/>
                                We understand that not everyone has the luxury to sit in front of a computer all day.
                                Whether you're managing a team, visiting clients, or handling other business activities,
                                our mobile CRM keeps you connected to your customers no matter where you are.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">CRM Systems Aren’t Just for Desktops Anymore</h3>
                    <p>
                        There’s a common misconception floating around that CRM systems are only for desktops, as if you
                        need to sit in front of a computer all day to manage your customers. That might have been true
                        back in the day, but things have changed drastically. At {{$siteName}}, we’re building CRM solutions that
                        work flawlessly on mobile devices, making sure that you’re not tied to your desk.
                    </p>
                    <p>
                        Let’s set the record straight—CRM systems aren’t just desktop-bound anymore. Whether you’re on
                        your smartphone, tablet, or laptop, you can easily access all your CRM tools on the go. Imagine
                        handling customer queries, tracking leads, and even sending follow-ups—all from your mobile phone.
                    </p>
                    <p>
                        With the way mobile technology has taken over daily life, it only makes sense that your CRM system
                        should work on any device, allowing you to stay connected to your customers wherever you are. Whether
                        you’re in Lagos traffic or attending a business meeting, you can access everything you need without
                        having to open your laptop.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">CRM Systems Are too expensive</h3>
                    <p>
                        Which is more expensive - running your business with no record or having a CRM?
                        You guess is just as mine - running your business with no records - mobile and digital
                        records.
                    </p>
                    <p>
                        When it comes to the pricing of {{$siteName}}’s CRM, we believe in flexibility and affordability tailored
                        to your business size and needs. Whether you're running a small startup or managing a large enterprise,
                        we have tiered pricing plans that ensure you get the features you need without overpaying for what you don’t.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Why Choose {{$siteName}}’s CRM Pricing?</h3>
                    <p>
                        At {{$siteName}}, we believe that every dime counts, so our pricing is built to give you maximum value
                        at every level. And because we’re a new startup, we’re eager to impress and work hard to ensure
                        that you get the best features at the most competitive prices. Not just that, you only pay for the
                        days you use the application. So if you go months without using it, you will not pay for those
                        period - yes.
                    </p>
                    <ul>
                        <li>Flexible payment plans to suit different business sizes and budgets.</li>
                        <li>No hidden fees—what you see is what you get.</li>
                        <li>Discounts for annual subscriptions, so you can save even more!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
