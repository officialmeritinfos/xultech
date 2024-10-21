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
                    <img src="{{asset('home/image/industries/real-estate.png')}}" alt="service image" class="w-100">
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title"> Transforming Property Management and Sales with Technology</h3>
                    <p>
                        Let’s face it—real estate isn’t just about selling houses or renting apartments anymore. In today’s
                        fast-paced world, it’s about creating seamless experiences for buyers, sellers, tenants, and landlords.
                        Whether you’re managing properties, running a real estate agency, or building the next big housing
                        development, {{$siteName}} is here to help you digitize your processes, reach more clients, and simplify
                        property management. Because let’s be honest, the days of posting paper flyers on bulletin boards
                        are long gone!
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Our Real Estate Solutions: Making Property Management a Breeze</h3>
                    <p>
                        At {{$siteName}}, we offer cutting-edge solutions that make the real estate business more efficient,
                        productive, and client-friendly. From property management systems to smart contract integrations,
                        we’ve got everything you need to succeed in the digital real estate era. Here’s how we’re helping
                        real estate businesses step into the future with the power of technology.
                    </p>
                    <h3 class="service-details_main-title">
                        Property Management Systems (PMS)
                    </h3>
                    <p>
                        Running a real estate empire—whether it’s a single office or a multi-location business—requires
                        organization and efficiency. Enter our Property Management Systems (PMS), which automate everything
                        from tenant management to lease agreements, making your day-to-day operations a whole lot smoother.
                    </p>
                    <p>
                        <strong>Tenant Management:</strong>
                        Keep track of tenants, leases, and rental agreements in one place. You’ll never have to dig through
                        a pile of papers again (we promise).
                    </p>
                    <p>
                        <strong>Rent Collection:</strong>
                        Automate rent collection through online payments. Your tenants can pay their rent with the click
                        of a button, and you can see who has paid and who hasn’t without lifting a finger.
                    </p>
                    <p>
                        <strong>Maintenance Requests:</strong>
                        Tenants can submit maintenance requests through the system, and property managers can assign tasks
                        to maintenance staff, track repairs, and ensure nothing slips through the cracks.
                    </p>
                    <p>
                        <strong>Lease Renewals and Expirations:</strong>
                        Our PMS alerts you when leases are about to expire, giving you plenty of time to renew or re-lease
                        properties without downtime.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Real Estate CRM: Build Stronger Relationships with Buyers and Tenants
                    </h3>
                    <p>
                        The real estate industry is all about relationships—with buyers, sellers, tenants, and landlords.
                        That’s why we built a Real Estate CRM designed specifically for the industry. Keep track of client
                        interactions, manage your leads, and close deals faster with {{$siteName}}’s CRM solutions.
                    </p>
                    <p>
                        <strong>Lead Tracking:</strong>
                        Capture and track leads from your website, social media, and even email campaigns. Your agents will
                        know exactly where each lead is in the sales process and can follow up at the right time.
                    </p>
                    <p>
                        <strong>Automated Follow-Ups:</strong>
                        Let’s be real—following up with potential buyers and tenants can be time-consuming. Our CRM automates
                        follow-ups, sending reminders, emails, and even SMS messages to ensure you stay top-of-mind.
                    </p>
                    <p>
                        <strong>Client History:</strong>
                        Access detailed records of client interactions, preferences, and past transactions. Whether they’re
                        looking for a cozy 2-bedroom or a commercial property downtown, you’ll have all the info you need
                        to serve them better.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Virtual Tours and 3D Property Showcases
                    </h3>
                    <p>
                        Showing properties has never been easier—or more exciting! With {{$siteName}}’s Virtual Tours and 3D
                        Showcases, your potential buyers or tenants can walk through properties from the comfort of their
                        living room. Perfect for long-distance buyers or clients who want to check out multiple listings
                        without scheduling endless in-person tours.
                    </p>
                    <p>
                        <strong>Interactive 3D Tours:</strong>
                        Give your clients the ability to virtually tour properties and explore every nook and cranny with high-quality 3D models.
                    </p>
                    <p>
                        <strong>Live Virtual Showings:</strong>
                        Host live virtual property viewings where buyers can ask questions in real-time as you walk them
                        through the property online.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Smart Contracts for Real Estate Transactions
                    </h3>
                    <p>
                        Let’s be honest—real estate paperwork can be a nightmare. From contracts to payments to legal documentation,
                        it’s a lot to keep track of. But with {{$siteName}}’s Smart Contract Solutions, we can automate the entire
                        process, reducing the risk of human error and speeding up transactions.
                    </p>
                    <p>
                        <strong>Automated Agreements:</strong>
                        Smart contracts use blockchain technology to automatically execute agreements when conditions are
                        met. This means no more chasing down signatures or wondering if a payment has been made.
                    </p>
                    <p>
                        <strong>Secure Transactions:</strong>
                        All transactions are recorded on the blockchain, making them tamper-proof and transparent. Both
                        buyers and sellers can see the transaction history, ensuring a trustworthy and secure process.
                    </p>
                    <p>
                        <strong>Escrow Integration:</strong>
                        Need to hold funds in escrow? No problem. Our smart contracts can automate escrow payments, releasing
                        funds only when both parties are satisfied.
                    </p>
                </div>

                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Who Do We Serve in the Real Estate Industry?
                    </h3>
                    <p>
                        <strong>Real Estate Agencies:</strong>
                        Real estate agencies need to stay organized, manage multiple listings, and keep clients happy—all
                        while closing deals as quickly as possible. Our solutions help agencies manage their properties,
                        leads, and clients with ease.
                    </p>
                    <p>
                        <strong>Property Managers:</strong>
                        From managing tenant relationships to ensuring properties are well-maintained, property managers
                        have a lot on their plate. {{$siteName}} simplifies property management with our automated tools for rent
                        collection, maintenance tracking, and tenant communication.
                    </p>
                    <p>
                        <strong>Commercial Real Estate Developers:</strong>
                        For developers handling large commercial projects, having real-time data and communication is essential.
                        We offer tools that allow you to track project progress, manage sales, and ensure that everything
                        stays on budget and on schedule.
                    </p>
                    <p>
                        <strong> Rental Platforms:</strong>
                        Running a rental platform is no small feat, especially when it comes to managing tenants, maintenance,
                        and leases. We provide tech solutions that make rental platforms easier to manage, with automated
                        payment systems, tenant portals, and more.
                    </p>

                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Why {{$siteName}} is the Best Choice for the Retail Industry
                    </h3>
                    <p>
                        <strong>Industry-Specific Solutions:</strong>
                        We don’t just build generic tech—we create solutions specifically tailored to the real estate industry.
                        Whether it’s managing rental properties or helping buyers find their dream home, {{$siteName}}’s technology
                        is designed with real estate professionals in mind.
                    </p>
                    <p>
                        <strong>Scalable for Businesses of All Sizes:</strong>
                        Whether you’re running a small real estate office or managing a large commercial portfolio, {{$siteName}}’s
                        solutions are scalable, allowing you to start small and grow big without having to worry about
                        outgrowing your systems.
                    </p>
                    <p>
                        <strong>Secure and Reliable:</strong>
                        Security is key in real estate, especially when it comes to financial transactions and property data.
                        We ensure that all transactions, contracts, and property records are handled securely, giving you peace of mind.
                    </p>
                    <p>
                        <strong>We’re New, and We Won’t Let You Down:</strong>
                        As a new startup, we know how important it is to impress our clients. We work hard to deliver top-tier
                        solutions because we know that your success is our success. We’re dedicated to making sure your
                        real estate business operates smoothly and efficiently.
                    </p>
                </div>


                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Let’s Build the Future of Real Estate Together!</h3>
                    <p>
                        The real estate industry is changing, and it’s time to go digital. At {{$siteName}}, we provide the tools
                        you need to stay competitive, grow your business, and deliver an unforgettable experience to your
                        clients. From virtual tours to property management and smart contracts, we’ve got you covered.
                        <br/>
                        Ready to transform your real estate business? Get in touch with {{$siteName}} today, and let’s start
                        building the future of real estate together!
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
