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
                    <img src="{{asset('home/image/industries/education.jpg')}}" alt="service image" class="w-100">
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title"> Empowering Learn with Technology</h3>
                    <p>
                        The education industry is one of the most transformative sectors in the world today. With the rise
                        of e-learning, smart classrooms, and digital administration tools, schools, universities, and educational
                        institutions are moving beyond traditional methods to embrace a new era of education. The goal is
                        simple—make learning easier, more accessible, and more engaging for students, teachers, and administrators
                        alike. And that’s where {{$siteName}} comes in.
                        <br/>
                        At {{$siteName}}, we’re passionate about making education smarter, simpler, and more fun. We provide
                        tailored tech solutions that help educational institutions manage their operations, engage students
                        better, and enhance learning experiences. Whether you’re running a school, a university, or an e-learning
                        platform, we’ve got you covered.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Our Education Solutions: Designed for Every Learning Environment</h3>
                    <p>
                        We understand that education is not a one-size-fits-all industry. Different institutions have
                        different needs, which is why {{$siteName}} offers a variety of solutions to cater to the unique requirements
                        of schools, universities, and online learning platforms. Let’s dive into how our services can transform
                        your educational institution.
                    </p>
                    <h3 class="service-details_main-title">
                        Student Information Systems (SIS)
                    </h3>
                    <p>
                        Running a school isn’t just about teaching students—it’s also about managing administrative tasks,
                        from tracking attendance to storing student records. Our Student Information Systems (SIS) simplify
                        school management by automating administrative processes, ensuring that your school runs like a well-oiled machine.
                    </p>
                    <p>
                        <strong>Real-Time Attendance Tracking:</strong>
                        No more passing around paper attendance sheets. Teachers can mark attendance digitally, and the
                        system updates records in real time.
                    </p>
                    <p>
                        <strong>Student Profiles:</strong>
                        Each student has a digital profile where administrators can store grades, medical records, attendance,
                        and behavior reports.
                    </p>
                    <p>
                        <strong>Parent-Teacher Communication:</strong>
                        The system allows easy communication between parents and teachers. Parents can log in to view their
                        child’s progress, track attendance, and receive notifications for upcoming events.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        E-Learning and Virtual Classrooms
                    </h3>
                    <p>
                        With more schools moving towards online learning (thanks to a little something called 2020...),
                        having a robust e-learning platform is crucial. {{$siteName}}’s E-Learning and Virtual Classroom Solutions
                        enable schools to provide top-notch education, whether in the classroom or from the comfort of a student’s home.
                    </p>
                    <p>
                        <strong>Interactive Lessons:</strong>
                        Our platform supports multimedia lessons, quizzes, and assignments, making learning more engaging
                        than ever before. Say goodbye to boring lectures and hello to interactive learning!
                    </p>
                    <p>
                        <strong>Video Conferencing Integration:</strong>
                        Teachers can hold live classes with students, share their screens, and interact with students in real time.
                        Whether it's a geography lesson or a math quiz, students can engage from anywhere.
                    </p>
                    <p>
                        <strong>Homework Submission and Grading:</strong>
                        Students can submit their assignments online, and teachers can grade them directly through the system,
                        providing instant feedback.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        School Management Systems
                    </h3>
                    <p>
                        If you’re still using spreadsheets or—gasp!—paper to manage school operations, we’ve got great news for you.
                        {{$siteName}}’s School Management System (SMS) takes the hassle out of managing everything from fees to timetables.
                    </p>
                    <p>
                        <strong>Fee Management:</strong>
                        Automate the entire fee collection process. Parents can pay fees online, while administrators can
                        track payments, send reminders, and generate financial reports with ease.
                    </p>
                    <p>
                        <strong>Timetable Scheduling:</strong>
                        Forget those endless Excel sheets. Our system helps you create and manage school timetables, ensuring
                        that there are no clashes between classes, teachers, or rooms.
                    </p>
                    <p>
                        <strong>Exam and Result Management:</strong>
                        Teachers can set up exams and track student performance. The system even helps with automated grading
                        and generating report cards!
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        E-Library Systems
                    </h3>
                    <p>
                        Imagine having an entire library at your fingertips! Our E-Library System allows students and teachers
                        to access books, research papers, and study materials online. Whether you're looking for that obscure
                        physics journal or the latest bestseller for your book club, it’s all just a click away.
                    </p>
                    <p>
                        <strong>Search and Borrow:</strong>
                        Students can search for books, borrow them digitally, and return them with ease—no more overdue fees or lost library cards.
                    </p>
                    <p>
                        <strong>Teacher Resource Hub:</strong>
                        Teachers can upload study materials, research papers, and lesson plans to share with their students.
                        Collaboration just got a whole lot easier!
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Parent and Student Portals
                    </h3>
                    <p>
                        Keeping parents in the loop is essential for student success. Our Parent and Student Portals make
                        communication seamless, giving parents a transparent view of their child’s education and keeping
                        students updated on assignments, exams, and upcoming events.
                    </p>
                    <p>
                        Parents can view their child’s attendance, grades, and teacher feedback all in one place. No more
                        chasing down the school office for updates.
                    </p>
                    <p>
                       Students can track their homework and upcoming deadlines, ensuring that nothing falls through the cracks.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Custom E-Learning Platforms for Online Education
                    </h3>
                    <p>
                        For institutions looking to set up their own e-learning platforms, {{$siteName}} offers fully customizable
                        solutions that are tailored to meet your needs. Whether you’re launching a new MOOC (Massive Open Online Course)
                        or building a specialized training platform, we’re here to help.
                    </p>
                    <p>
                       <strong>Course Creation Tools:</strong>
                        Teachers and instructors can easily build their own courses, upload content, and manage their students,
                        all from one easy-to-use platform.
                    </p>
                    <p>
                        <strong>Assessment and Certification:</strong>
                        Our platform allows you to create assessments, quizzes, and certification programs to ensure that
                        students are progressing and receiving the education they deserve.
                    </p>
                    <p>
                        <strong>User-Friendly Interface:</strong>
                        Designed with both students and teachers in mind, our platform ensures a smooth and intuitive user experience.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Who Do We Serve in the Education Industry?
                    </h3>
                    <p>
                        <strong>Nursery, Primary & High-schools:</strong>
                        From primary to secondary schools, we provide technology that makes managing your institution
                        easier and helps your students achieve their full potential.
                    </p>
                    <p>
                        <strong>Universities & Colleges:</strong>
                        For higher education institutions, we offer comprehensive management systems that streamline everything
                        from admissions to graduation, ensuring that students have the best possible learning experience.
                    </p>
                    <p>
                        <strong>E-learning Platforms:</strong>
                        Online education is booming, and we’re here to help you ride the wave. Our custom e-learning platforms
                        enable you to provide engaging, interactive courses that keep students hooked.
                    </p>
                    <p>
                        <strong>Governments and Government Smart Schools:</strong>
                        Governments are increasingly investing in Smart Schools, designed to equip students with the knowledge
                        and skills needed for the digital age. {{$siteName}} partners with governments to implement Smart School
                        initiatives, providing tech infrastructure, digital classroom tools, and management systems that
                        make education accessible, engaging, and futuristic. We help government agencies transform their
                        educational institutions into digitally enhanced environments where learning is interactive and
                        accessible to all students, regardless of geographic location.
                    </p>

                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Why {{$siteName}} is the Best Choice for the Retail Industry
                    </h3>
                    <p>
                        <strong>We Understand the Unique Needs of Schools:</strong>
                        At {{$siteName}}, we understand that the needs of a school are different from those of a university or
                        an e-learning platform. That’s why we tailor our solutions to fit the specific requirements of each
                        institution. Whether you’re running a preschool or a university, we’ve got the tools to help you thrive.
                    </p>
                    <p>
                        <strong>Scalable Solutions for Institutions of All Sizes:</strong>
                        Whether you’re managing a school with 100 students or a university with 50,000, our solutions are
                        designed to scale with your institution. As your educational institution grows, {{$siteName}} grows with you.
                    </p>
                    <p>
                        <strong>Secure and Reliable:</strong>
                        We understand the importance of data security in education. Our systems are built with end-to-end
                        encryption and multi-factor authentication, ensuring that student data is protected at all times.
                    </p>
                    <p>
                        <strong>We’re New, and We Won’t Let You Down:</strong>
                        As a new startup, we know that every client matters. We’re passionate about delivering results and
                        making sure that every retailer we work with is 100% satisfied with the solutions we provide.
                    </p>
                </div>


                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Let’s Build the Future of Education Together</h3>
                    <p>
                        The education industry is evolving, and {{$siteName}} is here to help you stay ahead of the curve. Whether
                        you’re managing a school, university, or online learning platform, our solutions are designed to
                        make your life easier, your students more engaged, and your institution more successful.
                        <br/>
                        Ready to bring the future of education to your institution? Let’s get started today! Contact {{$siteName}},
                        and together we’ll create the perfect solution for your school, college, or e-learning platform.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
