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
                    <img src="{{asset('home/image/industries/healthcare.webp')}}" alt="service image" class="w-100">
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title"> Simplifying Care, One Step at a Time.</h3>
                    <p>
                        The healthcare industry is at the heart of every community, providing critical services to ensure
                        the well-being of people. Whether it’s dispensing life-saving medication at a pharmacy, offering
                        comprehensive care in hospitals, or revolutionizing access to healthcare through telemedicine,
                        the industry requires cutting-edge technology to keep up with the fast-paced demands of modern-day
                        care. That’s where {{$siteName}} steps in.<br/>
                        At {{$siteName}}, we provide tailored digital services for the healthcare industry, designed to streamline
                        processes, enhance patient care, and ultimately improve outcomes for healthcare providers. Our solutions
                        are built with the specific needs of pharmacies, hospitals, and telemedicine startups in mind, ensuring
                        that no matter the size or focus of your healthcare business, you’ll have the tools and support needed to thrive.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Pharmacies: Enhancing Medication Management and Customer Care</h3>
                    <p>
                        Pharmacies play a crucial role in healthcare, providing patients with the medications they need
                        to recover and manage their health. But managing stock, tracking prescriptions, and ensuring compliance
                        with healthcare regulations can be a challenge. {{$siteName}}’s pharmacy solutions are designed to streamline
                        these processes, allowing pharmacists to focus more on patient care and less on digital headaches.
                    </p>
                    <p>
                        <strong>Prescription Management Systems:</strong>
                        Automate the tracking, dispensing, and refilling of prescriptions, ensuring accuracy and reducing
                        the chance of errors. This means you can say goodbye to manually checking records or worrying about
                        missed refills.
                    </p>
                    <p>
                        <strong>Inventory and Stock Control:</strong>
                        Our inventory systems track medication levels in real-time, ensuring that stock is always updated
                        and replenishment orders are automatically placed when needed. No more running out of critical meds
                        at the worst possible time!
                    </p>
                    <p>
                        <strong>Billing and Payment Solutions:</strong>
                        Let’s face it—billing is a pain, and no one likes chasing payments. {{$siteName}} makes billing easy by
                        automating the process and ensuring that patients can pay their bills securely and conveniently.
                        <br/>
                        Patients receive digital invoices with details of their treatment, prescriptions, and tests, with multiple
                        payment options, and you can keep track of who has paid, who owes, and who needs reminders—all from a simple dashboard.
                    </p>
                    <p>
                        <strong>Reporting and Analytics:</strong>
                        With all this data at your fingertips, you can get a full view of your Pharmacy store’s performance.
                        Our Reporting and Analytics system helps you track key metrics, from patient satisfaction to revenue,
                        to staff performance, and HR solutions.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Hospitals: Streamlining Operations for Better Patient Outcomes
                    </h3>
                    <p>
                        Running a hospital is no small feat—it’s like juggling a thousand balls in the air while trying
                        to keep them all balanced. Between patient care, managing medical staff, tracking treatment plans,
                        handling billing, and maintaining compliance, hospital administrators need all the help they can get.
                        {{$siteName}}’s hospital solutions are designed to simplify hospital management, allowing healthcare providers
                        to focus on what matters most—saving lives.
                    </p>
                    <p>
                        <strong>Electronic Medical Records (EMR) Systems:</strong>
                        Keep track of patient information, medical history, and treatments with a centralized system. With {{$siteName}},
                        patient records are always accessible to authorized personnel, allowing for quick and accurate diagnoses
                        and improving the quality of care.
                    </p>
                    <p>
                        <strong>Patient Billing and Payment Solutions:</strong>
                        Hospitals are busy places, and managing payments can be chaotic. Our system ensures that patients
                        are billed accurately and efficiently, with options for online payments, insurance claims, and automated invoicing.
                    </p>
                    <p>
                        <strong>Healthcare Staff Management:</strong>
                        Managing hospital staff—from doctors and nurses to administrative workers—requires organization.
                        Our solutions help hospitals assign shifts, track staff performance, and ensure that everyone is
                        in the right place at the right time.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Why {{$siteName}} is the Best Choice for the Healthcare Industry
                    </h3>
                    <p>
                        When it comes to technology for the healthcare industry, {{$siteName}} isn’t just another service provider—we’re
                        partners in your success. Here’s why healthcare providers across the industry choose {{$siteName}} to
                        power their operations.
                    </p>
                    <p>
                        <strong>Industry-Specific Expertise:</strong>
                        Healthcare is a complex industry, and we know that generic solutions just won’t cut it. That’s why
                        we’ve developed technology that’s specific to pharmacies, hospitals, and telemedicine. We understand
                        the unique challenges of each sector and have created tools that meet those specific needs.
                    </p>
                    <p>
                        <strong>Scalable Solutions:</strong>
                        Whether you’re a small pharmacy or a large hospital chain, our solutions are designed to scale
                        with your business. As you grow, {{$siteName}} grows with you, ensuring that your systems always meet
                        the demands of your expanding operations.
                    </p>
                    <p>
                        <strong>Secure and Compliant:</strong>
                        In healthcare, security is non-negotiable. We prioritize the protection of patient data and ensure
                        that all our systems meet the highest security standards.
                    </p>

                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Why Going Digital with {{$siteName}} Saves You Time and Money
                    </h3>
                    <p>
                        Healthcare professionals have enough on their plates without worrying about paperwork, scheduling
                        issues, or billing problems. {{$siteName}}’s solutions help healthcare providers save time, reduce costs,
                        and improve patient care by automating repetitive tasks, minimizing errors, and creating an efficient digital workflow.
                    </p>
                    <p>
                        <strong>Reduce Paperwork:</strong>
                        Let’s face it—healthcare involves a lot of paperwork. From patient intake forms to test results,
                        it can get overwhelming. Our digital solutions drastically reduce the need for paper forms and
                        files, saving time and money.
                    </p>
                    <p>
                        <strong>No More Scheduling Conflicts:</strong>
                        With our automated appointment scheduling system, you can avoid double bookings, missed appointments,
                        and scheduling mishaps—giving both staff and patients a smoother experience.
                    </p>
                    <p>
                        <strong>Streamlined Operations:</strong>
                        By centralizing all operations—from patient records to scheduling—you can eliminate the confusion
                        and inefficiencies that come with using separate systems for each department.
                    </p>
                </div>


                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Ready to Bring Your Healthcare Facility Into the Digital Age?</h3>
                    <p>
                        Let’s be honest—healthcare is complicated enough without dealing with outdated systems and manual
                        processes. With {{$siteName}}’s Healthcare Solutions, you can focus on what really matters: providing
                        excellent patient care. Our digital solutions are built to simplify your workflow, keep your
                        patients happy, and ensure your business runs smoothly.
                        <br/>
                        Whether you’re running a clinic, a hospital, or a specialized practice, we have the tools to help
                        you manage appointments, billing, patient records, and more. Let’s make healthcare easier, together!
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
