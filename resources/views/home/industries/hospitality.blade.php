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
                    <img src="{{asset('home/image/industries/hospitality.png')}}" alt="service image" class="w-100">
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title"> Elevating Guest Experiences with Technology</h3>
                    <p>
                        The hospitality industry is all about creating memorable experiences—whether it’s providing a comfortable
                        room, ensuring seamless service, or offering top-notch amenities. From hotels and resorts to restaurants
                        and event venues, the industry thrives on making guests feel like royalty (and let’s be honest,
                        who doesn’t love a little pampering?). But behind the scenes, managing operations, bookings, staff,
                        and customer satisfaction can be a real challenge. That’s where {{$siteName}} comes in.
                        <br/>
                        At {{$siteName}}, we provide tailored tech solutions that help hospitality businesses run smoother, faster,
                        and more efficiently. We focus on improving guest experiences, simplifying operations, and boosting
                        your business’s bottom line. So, whether you’re running a cozy bed-and-breakfast or a luxury hotel
                        chain, we’ve got the tech to make your life easier and your guests happier!
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Our Hospitality Solutions: Bringing the Best to Your Guests</h3>
                    <p>
                        From guest management to staff coordination, inventory control, and event planning, we know what it takes to keep the hospitality business running smoothly. {{$siteName}}’s suite of solutions is designed to cover every aspect of your operations, ensuring that your guests get the five-star treatment they deserve, and your team gets the tools they need to deliver it.
                    </p>
                    <h3 class="service-details_main-title">
                        Hotel and Resort Management Systems (HMS)
                    </h3>
                    <p>
                        Managing a hotel or resort involves juggling reservations, room service, housekeeping, and guest preferences.
                        With {{$siteName}}’s Hotel and Resort Management System (HMS), you can keep everything running like a
                        well-oiled machine. Think of it as your hotel’s digital concierge, always on duty and never needing a coffee break.
                    </p>
                    <p>
                        <strong>Online Reservations:</strong> Guests can book rooms directly through your website or app with our user-friendly
                        booking system. You’ll receive real-time updates on room availability, rates, and special requests,
                        ensuring no double bookings or lost reservations.
                    </p>
                    <p>
                       <strong> Room Assignment Automation:</strong> Automatically assign rooms based on availability and guest preferences.
                        Whether they want a sea view or a room far from the elevator, our system makes sure they get exactly what they want.
                    </p>
                    <p>
                        <strong>Housekeeping and Maintenance Tracking:</strong> Stay on top of room cleaning schedules and maintenance requests.
                        Housekeeping staff can log updates in real time, ensuring that every room is spotless and ready for the next guest.
                    </p>
                    <p>
                        <strong>Billing and Payments:</strong> Simplify check-ins and check-outs with our automated billing system. Guests
                        can pay through multiple channels, including credit cards, mobile payments, or online transfers.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Restaurant Management Solutions: Running a Smooth Kitchen and Dining Room
                    </h3>
                    <p>
                        For restaurants within hotels or standalone venues, {{$siteName}}’s Restaurant Management System helps
                        keep the front and back of the house in sync. Whether it’s fine dining or casual bites, we ensure
                        that the food comes out fast, hot, and delicious, while keeping your staff organized.
                    </p>
                    <p>
                        <strong>Table Reservations:</strong> Guests can make reservations online, and the system automatically assigns them
                        to available tables. You can also manage special requests, such as birthday celebrations or dietary preferences.
                    </p>
                    <p>
                        <strong>Order Management:</strong> Orders are sent directly from the wait staff’s tablet or mobile device to the kitchen,
                        reducing errors and speeding up service. You’ll have a complete log of all orders and special instructions.
                    </p>
                    <p>
                        <strong>Menu Management:</strong>
                        Easily update your menu to reflect new dishes, pricing changes, or daily specials. Whether it’s a
                        limited-time offer or a new seasonal item, our system ensures that your guests always know what’s on the menu.
                    </p>
                    <p>
                        <strong>Inventory Tracking:</strong>
                        Monitor ingredient levels and automatically reorder stock when necessary. No more last-minute dashes
                        to the supplier because you ran out of your signature dish’s key ingredient!
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Event and Conference Management: Plan and Execute Flawless Events
                    </h3>
                    <p>
                        Whether you’re hosting a wedding, a corporate retreat, or a luxury gala, events are a major part
                        of the hospitality industry. {{$siteName}}’s Event and Conference Management System ensures that every
                        detail is handled, so you can focus on making sure your guests have the time of their lives.
                    </p>
                    <p>
                        <strong>Event Planning Tools:</strong>
                        Manage bookings, schedules, menus, and guest lists with ease. Whether it’s a small, intimate affair
                        or a large corporate event, our tools make sure everything goes off without a hitch.
                    </p>
                    <p>
                        <strong>Room and Venue Scheduling:</strong>
                        Avoid double bookings by keeping track of room availability for events. Our system automatically
                        schedules venue use and ensures there’s no overlap.
                    </p>
                    <p>
                        <strong>Vendor Coordination:</strong>
                        Easily coordinate with vendors for catering, entertainment, or decorations. Keep all your contacts
                        and service agreements in one place, making communication and payments a breeze.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Guest Feedback and Experience Tracking
                    </h3>
                    <p>
                        In the hospitality industry, guest satisfaction is everything. {{$siteName}}’s Guest Experience Tracking
                        System ensures that you stay ahead of any potential issues, providing real-time insights into guest experiences.
                    </p>
                    <p>
                        <strong>Guest Feedback Surveys</strong>
                    </p>
                    <p>
                       <strong>Real-Time Issue Resolution</strong>
                    </p>
                    <p>
                        <strong>Loyalty Programs:</strong>
                        Reward your guests with loyalty points, exclusive discounts, or special perks for repeat visits.
                        Everyone loves a little VIP treatment, right?
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Employee and Shift Management: Keeping Your Team on Track
                    </h3>
                    <p>
                        Managing staff is no easy task, especially when dealing with different departments like housekeeping,
                        front desk, and room service. {{$siteName}}’s Employee and Shift Management System helps you schedule,
                        track hours, and assign tasks, ensuring your team runs like clockwork.
                    </p>
                    <p>
                        <strong>Shift Scheduling:</strong> Automatically generate shift schedules based on availability and business needs.
                        Staff can view their schedules in real-time and request changes without the hassle of phone calls or manual adjustments.
                    </p>
                    <p>
                        <strong>Task Assignment:</strong> Easily assign tasks to staff members and track their progress. Whether it’s preparing
                        a room for a VIP guest or making sure a wedding venue is set up on time, you’ll know exactly who’s responsible for what.
                    </p>
                    <p>
                        <strong>Performance Tracking:</strong> Monitor employee performance, log feedback, and ensure everyone is hitting
                        their targets. This way, you can reward top performers and address any potential issues before they escalate.
                    </p>
                </div>

                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Who Do We Serve in the Hospitality Industry?
                    </h3>
                    <p>
                        <strong>Hotels and Resorts:</strong>
                        Whether you’re a small boutique hotel or a sprawling resort, we help you manage everything from
                        guest bookings to room service. Our systems ensure that your guests receive seamless, personalized service from check-in to check-out.
                    </p>
                    <p>
                        <strong>Restaurants and Cafes:</strong>
                        From high-end restaurants to casual cafes, {{$siteName}}’s solutions streamline operations, ensuring that
                        your kitchen and front-of-house staff work in perfect harmony. Keep the food flowing and the customers smiling!
                    </p>
                    <p>
                        <strong>Event Venues and Conference Centers:</strong>
                        Managing events can be stressful, but with {{$siteName}}’s Event Management Solutions, you can coordinate
                        everything from catering to scheduling, ensuring that your events are executed flawlessly.
                    </p>
                    <p>
                        <strong>Bed and Breakfasts:</strong>
                        For smaller operations like B&Bs, we offer systems that simplify reservations, guest communication,
                        and billing, allowing you to focus on giving your guests a warm, personal experience.
                    </p>

                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Why {{$siteName}} is the Best Choice for Logistics Tech
                    </h3>
                    <p>
                        <strong>Tailored Solutions for Every Type of Property:</strong>
                        We know that no two hospitality businesses are the same. That’s why we provide customizable solutions
                        that fit your unique needs, whether you’re running a five-star hotel or a cozy B&B.
                    </p>
                    <p>
                        <strong>Seamless Integration:</strong>
                        Our systems integrate seamlessly with your existing tools, from PMS and POS to online booking platforms.
                        This means you can upgrade your tech without overhauling your entire system.
                    </p>
                    <p>
                        <strong>Real-Time Insights and Analytics:</strong>
                        Stay on top of your operations with real-time data and insights. Track everything from guest satisfaction
                        to inventory levels, and use this information to make smarter, data-driven decisions.
                    </p>
                    <p>
                        <strong>We’re New, and We Won’t Let You Down:</strong>
                        As a new player in the tech industry, we know how important it is to impress our clients. We work
                        hard to deliver top-quality solutions because we know that your success is our success. We’ll stop
                        at nothing to make sure you’re happy with our services!
                    </p>
                </div>


                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Let’s Elevate Your Hospitality Business Together!</h3>
                    <p>
                        At {{$siteName}}, we believe that hospitality is all about the experience—both for your guests and your
                        team. With our suite of solutions, you can ensure that your guests have the time of their lives,
                        while your staff enjoys efficient, streamlined operations. Whether you’re managing a hotel, restaurant,
                        or event venue, we’ve got the tools you need to elevate your business to the next level.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
