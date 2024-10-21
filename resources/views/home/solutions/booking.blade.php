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
                    <img src="{{asset('home/image/solutions/booking-system.png')}}" alt="service image" class="w-100">
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title"> Simplifying Your Booking Processes, One Click at a Time</h3>
                    <p>
                        Ever tried to manage bookings with a pen and paper or an old spreadsheet system? Let’s be real—it’s a
                        headache. Appointments get double-booked, schedules clash, and before you know it, things are spiraling
                        out of control.
                        <br/>
                        That’s where {{$siteName}}’s Booking System Solution swoops in like a superhero, ready to save the day
                        (and your sanity!). We’ve designed a solution that makes booking management as easy as <b>“click, booked!”</b>,
                        all while giving your clients a seamless experience.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title"> Why Your Business Needs a Booking System (And Why You’ll Love Ours!)</h3>
                    <p>
                        Gone are the days of manually managing appointments, calendars, and reservations. Whether you're
                        a salon, a consultancy, a medical practice, or even a hotel, {{$siteName}}'s Booking System Solution is
                        built to work for you. We’ve made it so simple, it almost feels like magic. And trust us, you’ll
                        wonder how you ever survived without it.
                    </p>
                    <p>
                        <strong>No More Double Bookings (Phew!):</strong>
                        Have you ever accidentally double-booked a client? Oops, right? With our booking system, that’s
                        a thing of the past. Our solution syncs all your appointments in real-time, so you never have to
                        worry about squeezing two clients into the same slot. This however has an exception but the exception
                        is customized to you(assigning same hours to different staff)
                    </p>
                    <p>
                        <strong>Self-Service Bookings:</strong>
                        Let your customers book their own appointments—yes, that’s right! Our system allows clients to view
                        your availability and make appointments on their own, from any device. Whether it's 2 PM or 2 AM,
                        they can book without needing to call or email, giving them the flexibility to choose when and
                        where they want to engage with you.
                    </p>
                    <p>
                        <strong>Automatic Reminders (Because We All Forget):</strong>
                        You don’t want to be chasing clients with reminders every week, and we get it. Our system automatically
                        sends email or SMS reminders to clients about their upcoming appointments. This reduces no-shows
                        and keeps everyone on track.
                    </p>
                    <p>
                        <strong>Easy Cancellations and Rescheduling:</strong>
                        Life happens! People get busy, plans change, and sometimes, clients need to reschedule or cancel
                        appointments. Our system makes it easy for them to cancel or reschedule with just a few clicks,
                        and you’re instantly notified of the change. No more missed calls or surprise absences!
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Who Can Use {{$siteName}}’s Booking System?
                    </h3>
                    <p>
                        Our solution isn’t just for one type of business. We’ve designed it to be flexible and scalable
                        for a variety of industries. So, whether you’re running a small boutique or a multi-location health
                        clinic, we’ve got you covered.
                    </p>
                    <p>
                        <strong>Spas and Salons:</strong>
                        Manage client appointments, track staff schedules, and even let clients select their preferred
                        stylist or service. Our system helps you manage peak hours, staff availability, and even online
                        payments, all in one spot.
                    </p>
                    <p>
                        <strong>Healthcare Providers:</strong>
                        Doctors, dentists, and clinics can use our system to allow patients to book appointments, reschedule,
                        or cancel with ease. Plus, with integration into medical systems, patient records can be updated
                        automatically after each visit.
                    </p>
                    <p>
                        <strong>Hotels and Hospitality:</strong>
                        From room bookings to restaurant reservations, we make it easy for guests to book, modify, and
                        check availability. Managing multiple rooms or services? No problem! Our system handles it all
                        effortlessly.
                    </p>
                    <p>
                        <strong>Event Planners:</strong>
                        Need to manage booking speakers, caterers, or attendees for an event? {{$siteName}}’s solution allows
                        for custom scheduling and reminders to ensure everything goes off without a hitch. You’ll always
                        know who’s attending and what’s still pending.
                    </p>
                    <p>
                        <strong>Consulting Services:</strong>
                        Whether you’re offering business consulting, legal advice, or tech support, let clients book time
                        slots based on your availability. No more back-and-forth emails trying to nail down a time—let the
                        system handle it!
                    </p>
                    <p>
                        <strong>Real Estate:</strong>
                        Real estate agents can streamline property viewings and meetings with clients. Allow potential buyers
                        or renters to book property tours or consultation meetings with agents. Manage multiple listings,
                        showings, and client appointments with ease.
                    </p>
                    <p>
                        <strong>Transport and Logistics:</strong>
                        For transport services, our system helps companies manage vehicle bookings, track availability,
                        and assign drivers. Whether it’s a taxi service, delivery logistics, or bus reservations, we’ve
                        got a booking solution that keeps your fleet organized and on time.
                    </p>
                    <p>
                        <strong>Agencies (Marketing, Talent, or Creative):</strong>
                        Agencies of all kinds can streamline client consultations, project meetings, or talent bookings
                        with {{$siteName}}’s system. Whether you're managing influencer bookings, client pitches, or staff schedules,
                        the system adapts to your needs and ensures you’re always in sync with your clients.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Key Features You’ll Love
                    </h3>
                    <p>
                        We know that every business is different, so we packed our solution with features that make booking
                        management as flexible and tailored as you need it to be.
                    </p>
                    <p>
                        <strong>Custom Booking Pages:</strong>
                        Want to show off your brand? With {{$siteName}}, you can create a custom booking page that matches your
                        business identity. You can include your logo, colors, and even specific questions to ask clients when they book.
                    </p>
                    <p>
                        <strong>Multiple Service and Location Support:</strong>
                        Whether you’re running one service at one location or multiple services across several locations,
                        {{$siteName}}’s system can handle it all. Manage different offerings, staff, and even locations from a single dashboard.
                    </p>
                    <p>
                        <strong>Online Payments Integration:</strong>
                        No need for separate systems! Clients can book and pay at the same time, directly from the booking page.
                        Our solution integrates with popular payment gateways like Stripe, PayPal, Paystack, Flutterwave, and others, making
                        the process smooth and secure.
                    </p>
                    <p>
                        <strong>Calendar Syncing:</strong>
                        The days of juggling multiple calendars are over! {{$siteName}} integrates seamlessly with Google Calendar,
                        Outlook, and more. Whether it’s staff schedules or business operations, everything is synced in
                        real-time, keeping you on top of your day-to-day.
                    </p>
                    <p>
                        <strong>Analytics and Reporting:</strong>
                        Want to know your most popular time slots? Need to understand which services are bringing in the
                        most revenue? Our system provides real-time analytics so you can track performance, manage customer
                        trends, and make smarter business decisions.
                    </p>
                    <p>
                        <strong> Secure and Private:</strong>
                        We take data security seriously. {{$siteName}}’s booking solution keeps all client and booking information
                        encrypted and secure, ensuring that your business complies with data protection regulations.
                    </p>

                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Why {{$siteName}}’s Booking System Stands Out
                    </h3>
                    <p>
                        <strong>User-Friendly and Intuitive:</strong>
                        You don’t have to be a tech genius to use our system. It’s designed to be so simple and user-friendly
                        that even a complete tech newbie could manage bookings like a pro!
                    </p>
                    <p>
                        <strong>Always Available (Even When You’re Not):</strong>
                        Clients can book 24/7, even when your doors are closed. That means more bookings, more revenue,
                        and less time spent managing appointments during your busy workday.
                    </p>
                    <p>
                        <strong>Customizable to Fit Your Needs:</strong>
                        Need a system that grows with your business? {{$siteName}}’s booking solution is scalable, allowing you
                        to add more staff, services, or locations whenever you need. Whether you’re expanding locally or
                        globally, we’ve got you covered.
                    </p>
                    <p>
                        <strong>New but always improving:</strong>
                        As a new player in the industry, we know we need to bring our A-game, which means we’re dedicated
                        to ensuring your satisfaction. We work harder to make sure that your success is our success, and
                        we won’t stop until you’re blown away by what we deliver.
                    </p>
                </div>


                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Ready to Take the Hassle Out of Bookings?</h3>
                    <p>
                        It’s time to ditch the spreadsheets and make your booking process a breeze! {{$siteName}}’s Booking System
                        Solution lets you manage appointments, track staff availability, and process payments, all from
                        one easy-to-use platform. So why wait? Let’s make managing bookings fun again (or at least stress-free!).
                        <br/>
                        Get in touch with us today to find out how our solution can transform your business and give you
                        more time to focus on what really matters—growing your brand and delighting your customers!
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
