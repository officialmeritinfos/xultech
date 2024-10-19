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
                    <img src="{{asset('home/image/solutions/school-management-system.png')}}" alt="service image" class="w-100">
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title"> Simplifying Education Management for Smarter Schools</h3>
                    <p>
                        Running a school is no small feat—between managing students, keeping track of attendance, handling fees,
                        scheduling classes, and staying on top of results, it’s enough to make your head spin! But that’s
                        where XulTech’s School Solutions come in. We take the chaos out of school administration and give
                        you a solution that makes managing a school as easy as, well, going to school!
                        <br/>
                        Our platform is built to help schools of all sizes, from small private institutions to large universities,
                        streamline their operations and focus on what really matters: delivering quality education. Let’s break
                        down everything we offer and how it transforms the educational experience for administrators, teachers,
                        students, and parents alike.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title"> Student Information Management: All in One Place</h3>
                    <p>
                        Gone are the days of shuffling through endless files and trying to keep track of each student’s
                        details manually. With XulTech’s Student Information System, you can manage everything related to
                        your students in one convenient platform.
                    </p>
                    <h5 class="service-details_main-single"><strong>Key Features:</strong></h5>
                    <p>
                        <strong>Student Profiles:</strong>
                        Store all student data, from contact information to academic history, in one place.
                    </p>
                    <p>
                        <strong>Attendance Tracking:</strong>
                        Automatically track attendance and flag absentees with just a few clicks.
                    </p>
                    <p>
                        <strong>Gradebook Integration:</strong>
                        Teachers can update grades and performance reports in real-time, making sure students (and their parents)
                        are always in the loop.
                    </p>
                    <p>
                        <strong>Behavioral Records:</strong>
                        Keep track of student behavior, noting any incidents or disciplinary actions.
                    </p>
                    <p>
                        <strong>Who This Helps: Administrators, teachers, and even students who want to keep tabs on their own performance.</strong>
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Timetable and Scheduling: No More Confusing Schedules
                    </h3>
                    <p>
                        Managing schedules can feel like trying to put together a puzzle with pieces that don’t fit. Our
                        Timetable and Scheduling feature is designed to make things easier, ensuring that classes, exams,
                        and extracurricular activities are organized without clashes.
                    </p>
                    <h5 class="service-details_main-single"><strong>Key Features:</strong></h5>
                    <p>
                        <strong>Automatic Class Scheduling:</strong>
                        Our system automatically assigns classrooms, teachers, and time slots, ensuring there are no double bookings.
                    </p>
                    <p>
                        <strong>Exam Timetables:</strong>
                        Schedule exams without overlapping subjects or time conflicts
                    </p>
                    <p>
                        <strong>Flexible Scheduling:</strong>
                        Make adjustments on the fly and notify students and teachers instantly.
                    </p>

                    <p>
                        <strong>
                            Who This Helps: School administrators and teachers who no longer have to spend hours manually creating timetables.
                        </strong>
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Fee and Payment Management: Simplifying School Finances
                    </h3>
                    <p>
                        Ah, school fees—the most dreaded topic for both parents and school accountants! But with XulTech’s
                        Fee and Payment Management Module, managing tuition fees, tracking payments, and issuing receipts
                        is smooth and stress-free.
                    </p>
                    <h5 class="service-details_main-single"><strong>Key Features:</strong></h5>
                    <p>
                        <strong>Automated Invoicing:</strong>
                        Generate invoices for tuition, books, uniforms, or any other school-related fees.
                    </p>
                    <p>
                        <strong>Online Payments:</strong>
                        Parents can pay school fees online via secure payment gateways like Paystack or Flutterwave or
                        Stripe(whichever is supported in your country),  making it hassle-free.
                    </p>
                    <p>
                        <strong>Payment Tracking:</strong>
                        Track who has paid and who still owes, complete with reminders for overdue payments.
                    </p>
                    <p>
                        <strong>Scholarships and Discounts:</strong>
                        Apply fee discounts or scholarships to specific students and adjust balances accordingly.
                    </p>

                    <p>
                        <strong>
                            Who This Helps: School accountants, parents, and administrators who need to keep finances organized.
                        </strong>
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Parent-Teacher Communication: Keeping Everyone in the Loop
                    </h3>
                    <p>
                        If there’s one thing parents want, it’s to stay informed about their child’s education. Our Parent-Teacher
                        Communication feature makes it easy for teachers and parents to stay connected—without having to
                        write a million notes or emails.
                    </p>
                    <h5 class="service-details_main-single"><strong>Key Features:</strong></h5>
                    <p>
                        <strong>Messaging Platform:</strong>
                        Send academic performance reports directly to parents via email or SMS.
                    </p>
                    <p>
                        <strong>Progress Reports:</strong>
                        Send academic performance reports directly to parents via email or SMS.
                    </p>
                    <p>
                        <strong>Event Notifications:</strong>
                        Keep parents updated on school events, field trips, and important announcements.
                    </p>

                    <p>
                        <strong>
                            Who This Helps: Teachers, parents, and students who benefit from clear, consistent communication.
                        </strong>
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Learning Management System (LMS): Virtual Classrooms for Modern Learning
                    </h3>
                    <p>
                        Whether your school is fully in-person, online, or a hybrid of both, our Learning Management System
                        (LMS) provides everything you need to create virtual classrooms, share resources, and assign work—all in one place.
                    </p>
                    <h5 class="service-details_main-single"><strong>Key Features:</strong></h5>
                    <p>
                        <strong>Online Classrooms:</strong>
                        Create virtual classrooms where teachers can upload lessons, assignments, and quizzes.
                    </p>
                    <p>
                        <strong>Resource Sharing:</strong>
                        Share documents, videos, and learning materials with students easily.
                    </p>
                    <p>
                        <strong>Assignment Submissions:</strong>
                        Students can submit homework or projects through the LMS, and teachers can grade them online.
                    </p>
                    <p>
                        <strong>Discussion Boards:</strong>
                        Encourage collaboration between students through discussion threads and group work.
                    </p>

                    <p>
                        <strong>
                            Who This Helps: Teachers and students who need a streamlined platform for online or hybrid learning.
                        </strong>
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Exam and Results Management: Say Goodbye to Manual Grading
                    </h3>
                    <p>
                        The exam season can be hectic, but XulTech makes it easier for schools to handle exams and results
                        through automation and real-time tracking.
                    </p>
                    <p>
                        Schedule exams and assign exam rooms or online exam sessions,<br/>
                        Teachers can input grades directly into the system, and results are calculated and stored instantly,<br/>
                        Automatically generate student report cards based on their exam results and performance,<br/>
                        Parents can access real-time results and progress reports via the parent portal.
                    </p>
                    <p>
                        <strong>
                            Who This Helps: Teachers, students, and parents—basically everyone who’s involved in the exam process!
                        </strong>
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Library Management: Easy Access to Learning Materials
                    </h3>
                    <p>
                        Keeping track of a school library can be overwhelming, but with our Library Management System,
                        cataloging books, checking them out, and keeping track of borrowed materials is easy.
                    </p>
                    <p>
                        Digital Catalog: List all available books, journals, and resources in a searchable online database.<br/>
                        Book Borrowing and Returns: Track who borrowed what and send reminders for overdue books.<br/>
                        Resource Reservation: Allow students to reserve books online for future pickup.<br/>
                        E-books and Online Resources: Manage and provide access to digital resources and e-books.
                    </p>
                    <p>
                        <strong>
                            Who This Helps: Librarians, teachers, and students who need easy access to learning materials.
                        </strong>
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Hostel and Dorm Management
                    </h3>
                    <p>
                        If your school offers boarding facilities, our Hostel Management System takes care of all the
                        logistical headaches that come with managing student accommodation.
                    </p>
                    <p>
                        Room Assignments: Assign students to dormitories and specific rooms, ensuring there’s no overcrowding.<br/>
                        Visitor Logs: Track who enters and leaves the hostel, ensuring the safety of your students.<br/>
                        Maintenance Requests: Allow students or staff to submit maintenance requests for dorm repairs or cleaning services.
                    <p>
                        <strong>
                            Who This Helps: School administrators, hostel wardens, and students living on campus.
                        </strong>
                    </p>
                </div>

                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Ready to Transform Your School?</h3>
                    <p>
                        If you're tired of juggling papers, spreadsheets, and outdated systems, let XulTech simplify the way
                        you run your school. With our all-in-one school management solution, you can focus more on delivering a
                        top-notch education and less on administrative tasks.
                        <br/>
                        Get in touch with us today, and let’s build the future of education—together!
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
