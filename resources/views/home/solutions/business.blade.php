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
                    <img src="{{asset('home/image/solutions/business-management-system.webp')}}" alt="service image" class="w-100">
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Helping You Run Your Business Without the Headaches</h3>
                    <p>
                        Running a business is like trying to balance a stack of plates while riding a bicycle—there’s always
                        something to manage, and one wrong move could send everything crashing down. That’s where {{$siteName}}’s
                        Business Management Solutions come in! We’re here to take the complexity out of your daily operations
                        so you can stop juggling and start focusing on what truly matters: growing your business.
                        <br/>
                        From inventory management to customer relations, payroll to financial reporting, our systems are
                        designed to handle the details that keep your business ticking, leaving you with more time to
                        strategize and innovate. And don’t worry, our solutions are built for businesses of all sizes,
                        whether you’re a small startup like us, a thriving restaurant, or a growing retail chain.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">What Makes {{$siteName}}’s Business Management Systems So Special?</h3>
                    <p>
                        Let’s be real: technology should make things easier, not harder. We’ve created solutions that
                        are not just powerful, but also incredibly user-friendly. No degree in computer science is needed
                        here! Our systems are intuitive, designed for real people running real businesses—like you.
                    </p>
                    <p>
                        <strong>Easy Setup and Even Easier to Use</strong>
                        We get it. No one has time to spend hours learning a complicated new system. That’s why our business
                        management tools are designed to be plug-and-play. Whether you’re setting up your first point-of-sale
                        system or integrating inventory tracking, you’ll be up and running in no time. And if you need help?
                        We’ve got a support team that’s eager to assist.
                    </p>
                    <p>
                        <strong>Everything Under One Roof</strong>
                        Why use a dozen different tools when you can have everything in one place? Our business management
                        systems consolidate all your essential operations into one platform—no more jumping between apps
                        or manually entering the same data twice. From customer relationships to inventory, we’ve got you
                        covered.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Our Solutions: Tailored for Every Type of Business
                    </h3>
                    <p>
                        Whether you're selling physical products, offering services, or managing teams, we have solutions
                        tailored to your business needs. Let’s dive into the different systems we provide and how they can
                        revolutionize your operations.
                    </p>
                    <p>
                        <strong>Inventory Management: Never Run Out of Stock Again</strong>
                        Imagine never having to guess if you’re about to run out of that popular product. With {{$siteName}}’s
                        Inventory Management System, you can keep track of stock levels in real-time, know when to reorder,
                        and even get insights on which products are selling fast. No more panicking when customers ask,
                        “Do you still have this in stock?”
                        <br/>
                        <strong>Perfect For: Retailers, wholesalers, restaurants, and warehouses.</strong>
                    </p>
                    <p>
                        <strong> Point of Sale (POS) Systems: Fast, Reliable Sales at Your Fingertips</strong>
                        Gone are the days of clunky cash registers and manual sales tracking. Our POS Systems are designed
                        to handle sales efficiently, whether you’re running a small café or a large retail chain. Track sales,
                        manage customer data, and process payments with ease.
                        <strong>Perfect For: Retail stores, cafes, restaurants, and salons.</strong>
                    </p>
                    <p>
                        <strong>Customer Relationship Management (CRM): Building Relationships, Not Just Transactions:</strong>
                        In today’s competitive market, customer loyalty is everything. Our CRM System helps you manage
                        relationships, automate follow-ups, and personalize communication, ensuring that customers keep coming back.
                        <strong>Perfect For: Service-based businesses like salons, law firms, consulting firms, and small agencies etc</strong>
                    </p>
                    <p>
                        <strong>HR and Payroll: Pay Your Team on Time, Every Time:</strong>
                        Managing a team is hard enough without having to worry about payroll calculations and attendance
                        tracking. Our HR and Payroll System does the heavy lifting, from calculating salaries to tracking employee attendance.
                        <strong>Perfect For: Retail businesses, hotels, restaurants, and startups with growing teams.</strong>
                    </p>
                    <p>
                        <strong> Invoicing and Billing: Send, Track, and Get Paid Faster:</strong>
                        Chasing after clients for payments? That’s a thing of the past with our Invoicing and Billing System.
                        Generate invoices, track payments, and manage your cash flow easily, all in one place.
                        <strong>Perfect For: Freelancers, agencies, consultants, and any business that bills clients.</strong>
                    </p>
                    <p>
                        <strong> Financial Reporting and Accounting: Stay on Top of Your Business’s Finances:</strong>
                        Numbers may not be your favorite thing, but they’re ours. With {{$siteName}}’s Financial Reporting and
                        Accounting System, you can track income, expenses, and profits in real-time, while generating financial
                        reports that help you make smarter business decisions.
                        <strong>Perfect For: Any business that needs to manage finances (so… everyone).</strong>
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Why {{$siteName}} is the Right Choice for Your Business
                    </h3>
                    <p>
                        Now, you might be wondering, “Why should I choose {{$siteName}} for my I.T consulting?” Simple—because
                        we’re not just tech experts; we understand business, too. We know that technology isn’t worth much
                        unless it’s helping you meet your goals and grow your business. So, we’re here to make sure that happens.
                    </p>
                    <p>
                        <strong>Scalable Solutions for Growing Businesses</strong>
                        Whether you’re a startup or an enterprise, our solutions scale as your business grows. You won’t
                        outgrow {{$siteName}}’s systems—if anything, they’ll help you grow even faster!
                    </p>
                    <p>
                        <strong> Tailored for Nigerian Businesses</strong>
                        We understand the unique challenges of doing business in Nigeria, and Africa. That’s why our systems are designed
                        to fit the local market, from multi-currency support to integrations with local payment platforms
                        like Paystack and Flutterwave,Stripe, PayPal etc.
                    </p>
                    <p>
                        <strong>We’re a Startup and Won’t Disappoint</strong>
                        Let’s be real—we’re new, we’re ambitious, and we have something to prove. That means we work harder,
                        smarter, and faster than anyone else to ensure that your business gets exactly what it needs. We
                        know that your success is our success, and we’ll do everything to make sure you’re satisfied.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Let’s Make Technology Work for You</h3>
                    <p>
                        Your business deserves to run smoothly, and with {{$siteName}}’s Business Management Solutions, that’s
                        exactly what you’ll get. Ready to simplify your operations, improve efficiency, and free up time
                        to focus on growing your business? Let’s make it happen—together!
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
