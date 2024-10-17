@extends('home.layout.base')
@section('content')

    <!--~~~~~~~~~~~~~~~~~~~~~~~~
     Home 9 : Hero Section
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="home-9_hero-section bg-offwhite-dark">
        <div class="container">
            <div class="row row--custom">
                <div class="col-lg-7 col-md-10 col-12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="home-9_hero-content-block">
                        <div class="home-9_hero-text">
                            <h1 class="home-9_hero-title heading-xxl heading-xxl--syne text-black-3 fw-700 typewriter">
                                Empowering businesses with software solutions that matter.
                            </h1>
                            <p>
                                {{$siteName}} provides tailored web, mobile, and software development services to help your
                                business grow smarter and faster. Focus on what matters most, while our cutting-edge
                                solutions streamline your operations and boost productivity.
                            </p>
                        </div>
                        <div class="home-9_hero-button-group">
                            <a href="{{route('bookUsPage')}}" class="btn-masco btn-primary-l09 rounded-pill btn-fill--down">
                                Start Your Digital Journey Today
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-10" data-aos="fade-left" data-aos-duration="1000">
                    <div class="home-9_hero-image-block">
                        <div class="home-9_hero-image">
                            <img src="{{asset('home/image/home-9/hero-image.png')}}" alt="alternative text">
                        </div>
                        <div class="home-9_hero-image-shape-1">
                            <img src="{{asset('home/image/home-9/hero-image-shape-1.svg')}}" alt="image alt">
                        </div>
                        <div class="home-9_hero-image-shape-2">
                            <img src="{{asset('home/image/home-9/hero-image-shape-2.svg')}}" alt="image alt">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 8  : Stats Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-9_stats-section section-padding-100">
        <div class="container">
            <div class="row row--custom ">
                <div class="col-lg-5 col-md-7">
                    <div class="home-9_stats-wrapper">
                        <div class="home-9_stats-single">
                            <h2 class="home-9_stats-single__count ">64,739</h2>
                            <img src="{{asset('home/image/home-9/stats-icon-1.svg')}}" alt="image alt" class="stats-single__icon">
                            <span>
                            Years of experience
                        </span>
                        </div>
                        <div class="home-9_stats-single">
                            <h2 class="home-9_stats-single__count ">4.8/5</h2>
                            <img src="{{asset('home/image/home-9/stats-icon-2.svg')}}" alt="image alt" class="stats-single__icon">
                            <span>
                            Customers worldwide
                        </span>
                        </div>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-6 col-lg-7 col-md-9">
                    <div class="home-9_stats-text-block">
                        <h2 class="home-9_stats-title heading-lg heading-lg--syne text-black-3">Easy time-tracking software for you</h2>
                        <p>
                            Trusted by the most innovative companies worldwide and still growing to increase their productivity
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 9  : Feature Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-9_feature-section section-padding-120">
        <div class="home-9_feature-shape">
            <img src="{{asset('home/image/home-9/feature-shape.svg')}}" alt="image alt">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
                    <div class="section-heading text-center">
                        <h2 class="section-heading__title heading-lg heading-lg--clash-display text-black-3">Appropriate features for proper use of time</h2>
                    </div>
                </div>
            </div>
            <div class="row feature-widget-3-row">
                <div class="col-lg-6">
                    <div class="feature-widget-3">
                        <div class="feature-widget-3__icon">
                            <img src="{{asset('home/image/home-9/feature-icon-1.svg')}}" alt="image alt">
                        </div>
                        <div class="feature-widget-3__body">
                            <h3 class="feature-widget-3__title">Create effective work schedules</h3>
                            <p>
                                Planning ahead is a key factor when creating an employee work schedule important for business.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-widget-3">
                        <div class="feature-widget-3__icon">
                            <img src="{{asset('home/image/home-9/feature-icon-2.svg')}}" alt="image alt">
                        </div>
                        <div class="feature-widget-3__body">
                            <h3 class="feature-widget-3__title">Track both online & offline time</h3>
                            <p>
                                Offline time tracking is the time tracking feature that is used to track the time at work productive.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-widget-3">
                        <div class="feature-widget-3__icon">
                            <img src="{{asset('home/image/home-9/feature-icon-3.svg')}}" alt="image alt">
                        </div>
                        <div class="feature-widget-3__body">
                            <h3 class="feature-widget-3__title">Automatically track work hours</h3>
                            <p>
                                It's a simple automatic time tracker that helps your teams log billable hours for all projects.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-widget-3">
                        <div class="feature-widget-3__icon">
                            <img src="{{asset('home/image/home-9/feature-icon-4.svg')}}" alt="image alt">
                        </div>
                        <div class="feature-widget-3__body">
                            <h3 class="feature-widget-3__title">Manage all your projects on time</h3>
                            <p>
                                Project time management directly impacts the quality, scope, and cost of a project, making it.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 9  : Content Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-9_content-section-1 padding-bottom-120 bg-offwhite-dark">
        <div class="container">
            <div class="row row--custom ">
                <div class="offset-xl-1 col-lg-4 col-md-4 col-sm-5 col-xs-5 col-5" data-aos-duration="1000" data-aos="fade-left">
                    <div class="home-9_content-image-1-block ">
                        <div class="home-9_content-image-1 content-image--mobile-width">
                            <img src="{{asset('home/image/home-9/content-image-1.png')}}" alt="alternative text">
                        </div>
                        <div class="home-9_content-image-1-shape absolute-center">
                            <img src="{{asset('home/image/home-9/content-image-1-shape.svg')}}" alt="alternative text">
                        </div>
                        <div class="home-9_content-image-1-shape-2 ">
                            <img src="{{asset('home/image/home-9/content-image-1-shape-2.svg')}}" alt="alternative text">
                        </div>
                    </div>
                </div>
                <div class=" col-lg-7 col-md-11 col-auto" data-aos-duration="1000" data-aos="fade-right">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-lg heading-lg--syne text-black-3">Take effective control of your working hours</h2>
                            <p>Masco automatically tracks time across projects. Instant reports,
                                seamless invoicing and payments,
                                and integrations with the tools your team loves.</p>
                            <p>It offers unlimited users & projects but a free version with limited
                                features. This makes perfect for teams simple time-tracking needs.
                                It is available as a web app and mobile app for Android and iOS.</p>
                        </div>
                        <div class="content-link-block">
                            <a href="#" class="content-link">Discover More <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
   home 9 : Tab Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="tab-section section-padding-120 bg-offwhite-dark">
        <div class="tab-shape-1">
            <img src="{{asset('home/image/home-9/tab-shape-1.svg')}}" alt="tab shape">
        </div>
        <div class="tab-shape-2">
            <img src="{{asset('home/image/home-9/tab-shape-2.svg')}}" alt="tab shape">
        </div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xxl-10 col-xl-11">
                    <div class="section-heading section-heading--white">
                        <h2 class="section-heading__title heading-lg heading-lg--syne text-white">Flexible tools for all types of
                            organized projects & reports</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-11 col-lg-8 col-md-10  col-sm-12 col-10">
                    <ul class="tab__nav nav nav-pills" role="tablist" id="pills-tab">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="time-tab-nav" data-bs-toggle="pill" data-bs-target="#time-tab-content" type="button" role="tab" aria-controls="time-tab-content" aria-selected="true">
                                <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.9541 7.42914C20.9551 6.49625 20.658 5.58744 20.1061 4.8353C19.5543 4.08316 18.7765 3.52705 17.8863 3.24809C16.9961 2.96914 16.04 2.98194 15.1576 3.28462C14.2752 3.58731 13.5125 4.16404 12.981 4.93068C12.7223 4.8552 12.4592 4.79042 12.1915 4.73829V3.42885H12.763C12.9886 3.4296 13.2121 3.38581 13.4208 3.29999C13.6295 3.21417 13.8191 3.088 13.9789 2.92873C14.1388 2.76946 14.2655 2.58021 14.3521 2.37183C14.4386 2.16345 14.4831 1.94005 14.4831 1.71443C14.4831 1.4888 14.4386 1.2654 14.3521 1.05702C14.2655 0.848649 14.1388 0.659399 13.9789 0.500125C13.8191 0.340852 13.6295 0.214688 13.4208 0.128868C13.2121 0.0430471 12.9886 -0.000742549 12.763 9.52544e-06H8.19116C7.96554 -0.000742549 7.74199 0.0430471 7.53333 0.128868C7.32467 0.214688 7.13499 0.340852 6.97519 0.500125C6.81538 0.659399 6.68859 0.848649 6.60207 1.05702C6.51556 1.2654 6.47102 1.4888 6.47102 1.71443C6.47102 1.94005 6.51556 2.16345 6.60207 2.37183C6.68859 2.58021 6.81538 2.76946 6.97519 2.92873C7.13499 3.088 7.32467 3.21417 7.53333 3.29999C7.74199 3.38581 7.96554 3.4296 8.19116 3.42885H8.76264V4.73829C8.49495 4.79042 8.23181 4.85521 7.97314 4.93068C7.60801 4.40411 7.1317 3.96414 6.57787 3.64184C6.02404 3.31955 5.4062 3.1228 4.76798 3.0655C4.12977 3.0082 3.48675 3.09173 2.88437 3.31021C2.28198 3.52869 1.73492 3.87678 1.28183 4.32989C0.828732 4.78299 0.480661 5.33007 0.262202 5.93246C0.0437425 6.53485 -0.0397753 7.17787 0.0175485 7.81608C0.0748723 8.45429 0.271639 9.07213 0.593949 9.62595C0.916258 10.1798 1.35625 10.6561 1.88283 11.0212C1.348 12.8512 1.41238 14.8043 2.06657 16.5952C2.72076 18.386 3.93048 19.9208 5.51899 20.9751L4.26731 23.1448C4.19224 23.276 4.17224 23.4317 4.2117 23.5777C4.25116 23.7236 4.34685 23.848 4.47783 23.9235C4.6088 23.9991 4.76437 24.0197 4.91048 23.9807C5.05659 23.9418 5.18131 23.8466 5.25734 23.7159L6.50845 21.5472C7.74186 22.1594 9.10014 22.4779 10.4771 22.4779C11.854 22.4779 13.2123 22.1594 14.4457 21.5472L15.6968 23.7159C15.7729 23.8466 15.8976 23.9418 16.0437 23.9807C16.1898 24.0197 16.3454 23.9991 16.4763 23.9235C16.6073 23.848 16.703 23.7236 16.7425 23.5777C16.7819 23.4317 16.7619 23.276 16.6869 23.1448L15.4352 20.9751C17.0237 19.9208 18.2334 18.386 18.8876 16.5952C19.5418 14.8043 19.6062 12.8512 19.0713 11.0212C19.6518 10.6189 20.1262 10.082 20.4541 9.45649C20.7819 8.83097 20.9535 8.13538 20.9541 7.42914ZM7.61969 1.71442C7.61985 1.5629 7.68011 1.41764 7.78725 1.31051C7.89439 1.20337 8.03965 1.14311 8.19116 1.14294H12.763C12.9145 1.14294 13.0599 1.20315 13.1671 1.31032C13.2742 1.4175 13.3344 1.56285 13.3344 1.71442C13.3344 1.86598 13.2742 2.01134 13.1671 2.11851C13.0599 2.22569 12.9145 2.28589 12.763 2.28589H8.19116C8.03965 2.28573 7.89439 2.22547 7.78725 2.11833C7.68011 2.01119 7.61985 1.86593 7.61969 1.71442ZM9.90559 3.42885H11.0485V4.59197C10.8594 4.58 10.6692 4.57178 10.4771 4.57178C10.2849 4.57178 10.0948 4.57998 9.90559 4.59197V3.42885ZM1.14296 7.42914C1.14169 6.7656 1.34467 6.11774 1.72434 5.57355C2.10401 5.02936 2.64197 4.61521 3.26517 4.38735C3.88836 4.15948 4.56658 4.12894 5.20773 4.29987C5.84888 4.4708 6.42189 4.83493 6.84893 5.34279C4.82142 6.24746 3.1996 7.86929 2.29494 9.89681C1.93494 9.59408 1.64534 9.21643 1.44638 8.79022C1.24741 8.36401 1.14386 7.8995 1.14296 7.42914ZM10.4771 21.3349C8.93238 21.3349 7.42238 20.8769 6.13802 20.0187C4.85366 19.1605 3.85263 17.9407 3.26151 16.5136C2.67039 15.0865 2.51573 13.5161 2.8171 12.0011C3.11846 10.4861 3.8623 9.09449 4.95457 8.00223C6.04684 6.90997 7.43846 6.16614 8.95347 5.86479C10.4685 5.56344 12.0388 5.71811 13.4659 6.30924C14.893 6.90037 16.1128 7.90141 16.971 9.18577C17.8292 10.4701 18.2872 11.9801 18.2872 13.5248C18.2849 15.5955 17.4613 17.5807 15.9971 19.0448C14.5329 20.509 12.5477 21.3326 10.4771 21.3349ZM14.1052 5.34279C14.3935 4.99997 14.7499 4.72082 15.1517 4.52304C15.5536 4.32525 15.9922 4.21316 16.4397 4.19386C16.8872 4.17456 17.3338 4.24848 17.7512 4.41093C18.1687 4.57339 18.5477 4.82082 18.8645 5.13754C19.1812 5.45427 19.4286 5.83336 19.5911 6.25077C19.7535 6.66819 19.8274 7.11481 19.8081 7.5623C19.7888 8.0098 19.6767 8.4484 19.479 8.85028C19.2812 9.25215 19.002 9.60853 18.6592 9.89681C17.7545 7.86929 16.1327 6.24746 14.1052 5.34279Z" fill="white"></path>
                                    <path d="M10.4766 7.23828C9.23329 7.23829 8.01792 7.60698 6.98417 8.29772C5.95042 8.98846 5.14471 9.97023 4.66893 11.1189C4.19315 12.2675 4.06867 13.5315 4.31123 14.7509C4.55379 15.9703 5.15249 17.0904 6.03163 17.9695C6.91077 18.8486 8.03087 19.4473 9.25027 19.6899C10.4697 19.9324 11.7336 19.8079 12.8823 19.3321C14.0309 18.8564 15.0127 18.0506 15.7034 17.0169C16.3941 15.9831 16.7628 14.7678 16.7628 13.5245C16.7609 11.8578 16.098 10.26 14.9195 9.08153C13.741 7.90305 12.1432 7.24016 10.4766 7.23828ZM14.2014 14.0959H10.4766C10.4015 14.0959 10.3272 14.0812 10.2579 14.0525C10.1885 14.0237 10.1255 13.9817 10.0725 13.9286C10.0194 13.8755 9.97729 13.8125 9.94858 13.7432C9.91986 13.6738 9.90509 13.5995 9.9051 13.5245V9.79744C9.9051 9.64587 9.96531 9.50052 10.0725 9.39334C10.1797 9.28617 10.325 9.22596 10.4766 9.22596C10.6281 9.22596 10.7735 9.28617 10.8807 9.39334C10.9878 9.50052 11.0481 9.64587 11.0481 9.79744V12.953H14.2014C14.353 12.953 14.4983 13.0132 14.6055 13.1204C14.7127 13.2275 14.7729 13.3729 14.7729 13.5245C14.7729 13.676 14.7127 13.8214 14.6055 13.9286C14.4983 14.0357 14.353 14.0959 14.2014 14.0959Z" fill="#E35523"></path>
                                </svg>
                                <span>Time Tracking</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="project-tab-nav" data-bs-toggle="pill" data-bs-target="#project-tab-content" type="button" role="tab" aria-controls="project-tab-content" aria-selected="false">
                                <svg width="21" height="24" viewBox="0 0 21 24" fill="none" class="tab-icon" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.1896 0H4.76107C4.40758 0.000427453 4.06869 0.14104 3.81873 0.390996C3.56877 0.640952 3.42816 0.979843 3.42773 1.33333V5.90476C3.42774 6.05631 3.48795 6.20165 3.59511 6.30881C3.70227 6.41598 3.84761 6.47618 3.99916 6.47619H6.22833C6.66086 6.4771 7.08567 6.59086 7.46077 6.80624C7.83587 7.02161 8.14827 7.33115 8.36709 7.70424L8.81836 8.47824C8.86869 8.56453 8.94075 8.63614 9.02737 8.68591C9.11399 8.73568 9.21213 8.76188 9.31203 8.7619H16.9515C17.1031 8.7619 17.2484 8.70169 17.3556 8.59453C17.4628 8.48737 17.523 8.34203 17.523 8.19048V1.33333C17.5225 0.979843 17.3819 0.640952 17.132 0.390996C16.882 0.14104 16.5431 0.000427453 16.1896 0ZM15.0468 6.85714H10.4754C10.3238 6.85714 10.1785 6.79694 10.0713 6.68977C9.96413 6.58261 9.90392 6.43727 9.90392 6.28571C9.90392 6.13416 9.96413 5.98882 10.0713 5.88165C10.1785 5.77449 10.3238 5.71429 10.4754 5.71429H15.0468C15.1983 5.71429 15.3437 5.77449 15.4508 5.88165C15.558 5.98882 15.6182 6.13416 15.6182 6.28571C15.6182 6.43727 15.558 6.58261 15.4508 6.68977C15.3437 6.79694 15.1983 6.85714 15.0468 6.85714ZM15.0468 4.57143H5.90392C5.75237 4.57143 5.60703 4.51122 5.49986 4.40406C5.3927 4.2969 5.3325 4.15155 5.3325 4C5.3325 3.84845 5.3927 3.7031 5.49986 3.59594C5.60703 3.48878 5.75237 3.42857 5.90392 3.42857H15.0468C15.1983 3.42857 15.3437 3.48878 15.4508 3.59594C15.558 3.7031 15.6182 3.84845 15.6182 4C15.6182 4.15155 15.558 4.2969 15.4508 4.40406C15.3437 4.51122 15.1983 4.57143 15.0468 4.57143ZM15.0468 2.28571H5.90392C5.75237 2.28571 5.60703 2.22551 5.49986 2.11835C5.3927 2.01118 5.3325 1.86584 5.3325 1.71429C5.3325 1.56273 5.3927 1.41739 5.49986 1.31022C5.60703 1.20306 5.75237 1.14286 5.90392 1.14286H15.0468C15.1983 1.14286 15.3437 1.20306 15.4508 1.31022C15.558 1.41739 15.6182 1.56273 15.6182 1.71429C15.6182 1.86584 15.558 2.01118 15.4508 2.11835C15.3437 2.22551 15.1983 2.28571 15.0468 2.28571Z" fill="#E35523" />
                                    <path d="M19.619 12.1906H19.0476V10.4763C19.0476 10.3247 18.9874 10.1794 18.8802 10.0722C18.7731 9.96507 18.6277 9.90486 18.4762 9.90486H8.32833L7.38095 8.2806C7.26315 8.07963 7.09493 7.91289 6.89292 7.79688C6.69091 7.68087 6.46212 7.6196 6.22917 7.61914H1.33333C0.979843 7.61957 0.640952 7.76018 0.390996 8.01014C0.141041 8.26009 0.000427453 8.59898 0 8.95247V22.6668C0.000427453 23.0203 0.141041 23.3591 0.390996 23.6091C0.640952 23.8591 0.979843 23.9997 1.33333 24.0001H19.619C19.9725 23.9997 20.3114 23.8591 20.5614 23.6091C20.8113 23.3591 20.952 23.0203 20.9524 22.6668V13.5239C20.952 13.1704 20.8113 12.8315 20.5614 12.5816C20.3114 12.3316 19.9725 12.191 19.619 12.1906ZM17.9048 11.0477V12.1906H9.77083C9.73757 12.1905 9.70491 12.1817 9.67607 12.1652C9.64723 12.1486 9.62322 12.1248 9.6064 12.0961L8.99493 11.0477H17.9048ZM19.8095 22.6668C19.8094 22.7172 19.7893 22.7656 19.7536 22.8013C19.7179 22.837 19.6695 22.8571 19.619 22.8572H1.33333C1.28285 22.8571 1.23446 22.837 1.19876 22.8013C1.16306 22.7656 1.14296 22.7172 1.14286 22.6668V8.95247C1.14292 8.90198 1.16301 8.85357 1.19872 8.81786C1.23443 8.78215 1.28284 8.76206 1.33333 8.762H6.22917C6.26243 8.76207 6.29509 8.77083 6.32393 8.7874C6.35277 8.80397 6.37678 8.82778 6.3936 8.85647L8.61905 12.672C8.73682 12.873 8.90504 13.0397 9.10705 13.1557C9.30907 13.2718 9.53788 13.333 9.77083 13.3334H19.619C19.6695 13.3335 19.7179 13.3536 19.7536 13.3893C19.7893 13.425 19.8094 13.4734 19.8095 13.5239V22.6668Z" fill="white" />
                                    <path d="M18.096 16H13.5246C13.373 16 13.2277 16.0602 13.1205 16.1674C13.0133 16.2745 12.9531 16.4199 12.9531 16.5714C12.9531 16.723 13.0133 16.8683 13.1205 16.9755C13.2277 17.0827 13.373 17.1429 13.5246 17.1429H18.096C18.2475 17.1429 18.3929 17.0827 18.5 16.9755C18.6072 16.8683 18.6674 16.723 18.6674 16.5714C18.6674 16.4199 18.6072 16.2745 18.5 16.1674C18.3929 16.0602 18.2475 16 18.096 16Z" fill="white" />
                                    <path d="M18.096 18.2861H13.5246C13.373 18.2861 13.2277 18.3463 13.1205 18.4535C13.0133 18.5607 12.9531 18.706 12.9531 18.8576C12.9531 19.0091 13.0133 19.1545 13.1205 19.2616C13.2277 19.3688 13.373 19.429 13.5246 19.429H18.096C18.2475 19.429 18.3929 19.3688 18.5 19.2616C18.6072 19.1545 18.6674 19.0091 18.6674 18.8576C18.6674 18.706 18.6072 18.5607 18.5 18.4535C18.3929 18.3463 18.2475 18.2861 18.096 18.2861Z" fill="white" />
                                    <path d="M18.096 20.5713H13.5246C13.373 20.5713 13.2277 20.6315 13.1205 20.7387C13.0133 20.8458 12.9531 20.9912 12.9531 21.1427C12.9531 21.2943 13.0133 21.4396 13.1205 21.5468C13.2277 21.6539 13.373 21.7141 13.5246 21.7141H18.096C18.2475 21.7141 18.3929 21.6539 18.5 21.5468C18.6072 21.4396 18.6674 21.2943 18.6674 21.1427C18.6674 20.9912 18.6072 20.8458 18.5 20.7387C18.3929 20.6315 18.2475 20.5713 18.096 20.5713Z" fill="white" />
                                </svg>
                                <span>Project Management</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="team-tab-nav" data-bs-toggle="pill" data-bs-target="#team-tab-content" type="button" role="tab" aria-controls="team-tab-content" aria-selected="false">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="tab-icon" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.7615 6.47619C22.5499 6.47619 23.9996 5.02645 23.9996 3.2381C23.9996 1.44974 22.5499 0 20.7615 0C18.9732 0 17.5234 1.44974 17.5234 3.2381C17.5234 5.02645 18.9732 6.47619 20.7615 6.47619Z" fill="#E35523" />
                                    <path d="M20.7619 17.5238C20.6558 17.5238 20.5511 17.5297 20.4475 17.5397C21.0722 16.5846 21.5303 15.5305 21.8025 14.4222C21.8383 14.2753 21.8143 14.1201 21.7358 13.9908C21.6574 13.8615 21.5308 13.7685 21.384 13.7324C21.2371 13.6962 21.0819 13.7198 20.9524 13.7979C20.8228 13.8761 20.7296 14.0024 20.6931 14.1492C20.2391 15.9975 19.2062 17.6523 17.745 18.8719C16.2839 20.0915 14.4711 20.812 12.5714 20.9283V18.0952C12.5714 17.9437 12.5112 17.7984 12.404 17.6912C12.2969 17.584 12.1515 17.5238 12 17.5238C11.7474 17.5238 11.5052 17.4235 11.3266 17.2448C11.148 17.0662 11.0476 16.824 11.0476 16.5714C11.0476 16.3188 11.148 16.0766 11.3266 15.898C11.5052 15.7194 11.7474 15.619 12 15.619C12.1515 15.619 12.2969 15.5588 12.404 15.4516C12.5112 15.3445 12.5714 15.1991 12.5714 15.0476V14.2849C12.5714 14.1334 12.5112 13.988 12.4041 13.8809C12.2969 13.7737 12.1516 13.7135 12 13.7135C11.8484 13.7135 11.7031 13.7737 11.5959 13.8809C11.4888 13.988 11.4286 14.1334 11.4286 14.2849V14.5554C10.9898 14.6798 10.6036 14.944 10.3286 15.3079C10.0535 15.6717 9.90475 16.1153 9.90475 16.5714C9.90475 17.0275 10.0535 17.4711 10.3286 17.835C10.6036 18.1988 10.9898 18.463 11.4286 18.5874V20.9322C9.25766 20.7906 7.21235 19.8643 5.67402 18.326C4.13569 16.7876 3.20938 14.7423 3.06781 12.5714H5.90476C6.05631 12.5714 6.20165 12.5112 6.30882 12.404C6.41598 12.2969 6.47618 12.1515 6.47619 12C6.47619 11.7474 6.57653 11.5052 6.75514 11.3265C6.93374 11.1479 7.17599 11.0476 7.42857 11.0476C7.68116 11.0476 7.9234 11.1479 8.10201 11.3265C8.28061 11.5052 8.38095 11.7474 8.38095 12C8.38096 12.1515 8.44117 12.2969 8.54833 12.404C8.65549 12.5112 8.80083 12.5714 8.95238 12.5714H9.71353C9.86508 12.5714 10.0104 12.5112 10.1176 12.404C10.2248 12.2969 10.285 12.1515 10.285 12C10.285 11.8484 10.2248 11.7031 10.1176 11.5959C10.0104 11.4888 9.86508 11.4286 9.71353 11.4286H9.44457C9.32015 10.9898 9.05597 10.6036 8.69213 10.3285C8.32829 10.0535 7.88466 9.90473 7.42857 9.90473C6.97249 9.90473 6.52886 10.0535 6.16502 10.3285C5.80118 10.6036 5.53699 10.9898 5.41257 11.4286H3.07173C3.18792 9.52886 3.90843 7.71608 5.12805 6.25496C6.34766 4.79384 8.00248 3.76093 9.85082 3.30709C9.99742 3.27035 10.1235 3.17704 10.2015 3.04757C10.2794 2.9181 10.3029 2.76301 10.2668 2.61626C10.2307 2.46951 10.1379 2.34303 10.0088 2.26452C9.87964 2.18601 9.72466 2.16186 9.57775 2.19734C8.46948 2.46957 7.41538 2.92775 6.46029 3.55239C6.52512 2.88829 6.38319 2.22038 6.05392 1.64003C5.72464 1.05968 5.22411 0.595231 4.62078 0.310223C4.01746 0.0252155 3.34081 -0.0664319 2.68341 0.0478183C2.02601 0.162069 1.41997 0.476636 0.948177 0.948489C0.476389 1.42034 0.161903 2.02643 0.0477428 2.68385C-0.0664179 3.34127 0.0253218 4.0179 0.310412 4.62118C0.595502 5.22447 1.06002 5.72494 1.64041 6.05413C2.22081 6.38333 2.88874 6.52517 3.55283 6.46025C2.47508 8.10755 1.90224 10.0339 1.90477 12.0025C1.90729 13.971 2.48506 15.8959 3.56703 17.5404C2.90225 17.4728 2.23281 17.6125 1.65058 17.9404C1.06836 18.2683 0.601892 18.7684 0.315197 19.372C0.0285018 19.9756 -0.0643688 20.6531 0.0493308 21.3116C0.16303 21.9701 0.477727 22.5772 0.950233 23.0498C1.42274 23.5223 2.02989 23.837 2.68837 23.9507C3.34685 24.0644 4.02438 23.9715 4.62798 23.6848C5.23157 23.3981 5.73165 22.9316 6.05959 22.3494C6.38752 21.7672 6.52723 21.0977 6.45955 20.433C8.10408 21.5149 10.029 22.0927 11.9975 22.0952C13.9661 22.0977 15.8924 21.5249 17.5397 20.4472C17.5297 20.5508 17.5238 20.6557 17.5238 20.7619C17.5238 21.4023 17.7137 22.0284 18.0695 22.5609C18.4253 23.0934 18.9311 23.5084 19.5227 23.7535C20.1144 23.9986 20.7655 24.0627 21.3936 23.9378C22.0218 23.8128 22.5987 23.5044 23.0516 23.0516C23.5044 22.5987 23.8128 22.0217 23.9378 21.3936C24.0627 20.7655 23.9986 20.1144 23.7535 19.5227C23.5084 18.931 23.0934 18.4253 22.5609 18.0695C22.0284 17.7137 21.4023 17.5238 20.7619 17.5238ZM1.14286 3.23808C1.14286 2.82368 1.26574 2.41859 1.49597 2.07403C1.7262 1.72947 2.05343 1.46091 2.43628 1.30233C2.81914 1.14375 3.24042 1.10225 3.64686 1.1831C4.05329 1.26394 4.42663 1.4635 4.71965 1.75652C5.01268 2.04954 5.21223 2.42288 5.29308 2.82932C5.37392 3.23575 5.33243 3.65704 5.17384 4.03989C5.01526 4.42274 4.74671 4.74998 4.40215 4.9802C4.05759 5.21043 3.6525 5.33332 3.2381 5.33332C2.68261 5.33266 2.15006 5.1117 1.75727 4.71891C1.36448 4.32612 1.14352 3.79357 1.14286 3.23808ZM3.2381 22.8571C2.8237 22.8571 2.41861 22.7342 2.07405 22.504C1.72949 22.2738 1.46093 21.9466 1.30235 21.5637C1.14377 21.1808 1.10227 20.7596 1.18312 20.3531C1.26396 19.9467 1.46352 19.5734 1.75654 19.2803C2.04956 18.9873 2.4229 18.7878 2.82934 18.7069C3.23577 18.6261 3.65706 18.6676 4.03991 18.8261C4.42276 18.9847 4.75 19.2533 4.98022 19.5978C5.21045 19.9424 5.33334 20.3475 5.33334 20.7619C5.33264 21.3174 5.11168 21.8499 4.71889 22.2427C4.32611 22.6355 3.79358 22.8564 3.2381 22.8571ZM20.7619 22.8571C20.3475 22.8571 19.9424 22.7342 19.5979 22.504C19.2533 22.2738 18.9847 21.9466 18.8262 21.5637C18.6676 21.1808 18.6261 20.7596 18.7069 20.3531C18.7878 19.9467 18.9873 19.5734 19.2803 19.2803C19.5734 18.9873 19.9467 18.7878 20.3531 18.7069C20.7596 18.6261 21.1809 18.6676 21.5637 18.8261C21.9466 18.9847 22.2738 19.2533 22.504 19.5978C22.7343 19.9424 22.8571 20.3475 22.8571 20.7619C22.8565 21.3174 22.6355 21.8499 22.2427 22.2427C21.8499 22.6355 21.3174 22.8564 20.7619 22.8571Z" fill="white" />
                                    <path d="M16.7688 3.1043C15.3034 2.3149 13.6646 1.90251 12.0001 1.9043C11.8486 1.90431 11.7032 1.96452 11.5961 2.07168C11.4889 2.17884 11.4287 2.32418 11.4287 2.47573V5.9043C11.4287 6.05585 11.4889 6.20119 11.5961 6.30835C11.7032 6.41552 11.8486 6.47572 12.0001 6.47573C12.2527 6.47573 12.495 6.57607 12.6736 6.75468C12.8522 6.93328 12.9525 7.17553 12.9525 7.42811C12.9525 7.6807 12.8522 7.92294 12.6736 8.10155C12.495 8.28015 12.2527 8.38049 12.0001 8.38049C11.8486 8.3805 11.7032 8.44071 11.5961 8.54787C11.4889 8.65503 11.4287 8.80037 11.4287 8.95192V11.9995C11.4287 12.1511 11.4889 12.2964 11.5961 12.4036C11.7032 12.5108 11.8486 12.571 12.0001 12.571H14.5556C14.68 13.0098 14.9442 13.396 15.308 13.671C15.6719 13.946 16.1155 14.0948 16.5716 14.0948C17.0277 14.0948 17.4713 13.946 17.8351 13.671C18.199 13.396 18.4631 13.0098 18.5876 12.571H21.5239C21.6755 12.571 21.8208 12.5108 21.928 12.4036C22.0352 12.2964 22.0954 12.1511 22.0954 11.9995C22.0972 10.335 21.6848 8.69626 20.8954 7.23087C20.3482 7.25027 19.803 7.1568 19.2935 6.95629C18.7841 6.75577 18.3214 6.45251 17.9343 6.06538C17.5472 5.67826 17.2439 5.21557 17.0434 4.70614C16.8429 4.1967 16.7494 3.65143 16.7688 3.1043Z" fill="#E35523" />
                                </svg>
                                <span>Team Management</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="reporting-tab-nav" data-bs-toggle="pill" data-bs-target="#reporting-tab-content" type="button" role="tab" aria-controls="reporting-tab-content" aria-selected="false">
                  <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                      d="M22.2853 9.14258H19.2377C18.7832 9.14307 18.3475 9.32384 18.0261 9.64523C17.7047 9.96661 17.5239 10.4024 17.5234 10.8569V21.1426C17.5234 21.2941 17.5837 21.4395 17.6908 21.5466C17.798 21.6538 17.9433 21.714 18.0949 21.714H23.4282C23.5797 21.714 23.7251 21.6538 23.8323 21.5466C23.9394 21.4395 23.9996 21.2941 23.9996 21.1426V10.8569C23.9991 10.4024 23.8184 9.96661 23.497 9.64523C23.1756 9.32384 22.7398 9.14307 22.2853 9.14258Z"
                      fill="#E35523" />
                  <path
                      d="M23.4286 0H21.1429C20.9913 2.25831e-09 20.846 0.0602039 20.7388 0.167368C20.6316 0.274531 20.5714 0.419876 20.5714 0.571429C20.5714 0.722981 20.6316 0.868326 20.7388 0.97549C20.846 1.08265 20.9913 1.14286 21.1429 1.14286H22.0491L14.994 8.19792L9.2952 3.92373C9.18891 3.84405 9.05818 3.80388 8.92549 3.81012C8.79279 3.81637 8.66641 3.86864 8.56808 3.95796L1.14286 10.7082V0.571429C1.14286 0.419876 1.08265 0.274531 0.97549 0.167368C0.868326 0.0602039 0.722981 0 0.571429 0C0.419876 0 0.274531 0.0602039 0.167368 0.167368C0.0602039 0.274531 2.25831e-09 0.419876 0 0.571429V23.4286C7.07184e-06 23.5801 0.0602132 23.7255 0.167375 23.8326C0.274537 23.9398 0.419878 24 0.571429 24H23.4286C23.5801 24 23.7255 23.9398 23.8326 23.8326C23.9398 23.7255 24 23.5801 24 23.4286C24 23.277 23.9398 23.1317 23.8326 23.0245C23.7255 22.9173 23.5801 22.8571 23.4286 22.8571H1.14286V12.2529L8.98735 5.12128L14.7048 9.4096C14.8149 9.49202 14.951 9.532 15.0881 9.52223C15.2253 9.51246 15.3544 9.45359 15.4516 9.3564L22.8571 1.95089V2.85714C22.8571 3.0087 22.9173 3.15404 23.0245 3.2612C23.1317 3.36837 23.277 3.42857 23.4286 3.42857C23.5801 3.42857 23.7255 3.36837 23.8326 3.2612C23.9398 3.15404 24 3.0087 24 2.85714V0.571429C23.9996 0.420012 23.9392 0.274924 23.8321 0.167856C23.7251 0.0607881 23.58 0.000442212 23.4286 0Z"
                      fill="white" />
                  <path
                      d="M11.6186 12.1904C11.1641 12.1909 10.7283 12.3717 10.4069 12.6931C10.0856 13.0145 9.90479 13.4502 9.9043 13.9047V21.1428C9.9043 21.2944 9.96451 21.4397 10.0717 21.5469C10.1788 21.654 10.3242 21.7142 10.4757 21.7142H15.8091C15.9606 21.7142 16.1059 21.654 16.2131 21.5469C16.3203 21.4397 16.3805 21.2944 16.3805 21.1428V13.9047C16.38 13.4502 16.1992 13.0145 15.8778 12.6931C15.5565 12.3717 15.1207 12.1909 14.6662 12.1904H11.6186ZM15.2376 13.9047V20.5714H11.0472V13.9047C11.0473 13.7532 11.1076 13.608 11.2147 13.5008C11.3218 13.3937 11.4671 13.3335 11.6186 13.3333H14.6662C14.8177 13.3335 14.963 13.3937 15.0701 13.5008C15.1772 13.608 15.2375 13.7532 15.2376 13.9047Z"
                      fill="white" />
                  <path
                      d="M3.99944 15.2383C3.54494 15.2388 3.10919 15.4195 2.78781 15.7409C2.46642 16.0623 2.28565 16.4981 2.28516 16.9526V21.143C2.28516 21.2946 2.34537 21.4399 2.45253 21.5471C2.55969 21.6543 2.70503 21.7145 2.85658 21.7145H8.18992C8.34147 21.7145 8.48681 21.6543 8.59397 21.5471C8.70113 21.4399 8.76134 21.2946 8.76135 21.143V16.9526C8.76085 16.4981 8.58008 16.0623 8.2587 15.7409C7.93731 15.4195 7.50157 15.2388 7.04706 15.2383H3.99944ZM7.61849 16.9526V20.5716H3.42801V16.9526C3.42818 16.8011 3.48844 16.6558 3.59556 16.5487C3.70269 16.4416 3.84794 16.3813 3.99944 16.3811H7.04706C7.19856 16.3813 7.34381 16.4416 7.45094 16.5487C7.55807 16.6558 7.61832 16.8011 7.61849 16.9526Z"
                      fill="white" />
                </svg>
              </span>
                                <span>Reporting Analysis</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane show active" id="time-tab-content" role="tabpanel" aria-labelledby="time-tab-nav">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class=" section-image">
                                <img src="{{asset('home/image/home-9/tab-image.png')}}" alt="tab image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="project-tab-content" role="tabpanel" aria-labelledby="project-tab-nav">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class=" section-image">
                                <img src="{{asset('home/image/home-9/tab-image.png')}}" alt="tab image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane " id="team-tab-content" role="tabpanel" aria-labelledby="team-tab-nav">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class=" section-image">
                                <img src="{{asset('home/image/home-9/tab-image.png')}}" alt="tab image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="reporting-tab-content" role="tabpanel" aria-labelledby="reporting-tab-nav">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class=" section-image">
                                <img src="{{asset('home/image/home-9/tab-image.png')}}" alt="tab image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 9 : Content Section 2
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-9_content-section-2 section-padding-120 bg-offwhite-dark">
        <div class="container">
            <div class="row row--custom ">
                <div class="offset-lg-1 col-xl-4 col-lg-3 col-md-4 col-sm-5 col-xs-5 col-5" data-aos-duration="1000" data-aos="fade-right">
                    <div class="home-9_content-image-2-block ">
                        <div class="home-9_content-image-2 ">
                            <img src="{{asset('home/image/home-9/content-image-2.png')}}" alt="alternative text">
                        </div>
                        <div class="home-9_content-image-2-shape absolute-center">
                            <img src="{{asset('home/image/home-9/content-image-2-shape.svg')}}" alt="alternative text">
                        </div>
                        <div class="home-9_content-image-2-shape-2 ">
                            <img src="{{asset('home/image/home-9/content-image-2-shape-2.svg')}}" alt="alternative text">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto col-xl-6 col-lg-7 col-md-11 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-lg heading-lg--syne text-black-3">Organize all schedules with simple processes</h2>
                            <p>Masco is an intuitive, lightweight solution for tracking hours and projects that is easy to
                                adopt and use every day, we've designed it to be super fast.</p>
                        </div>
                        <div class="content-widget-wrapper">
                            <div class="content-widget">
                                <div class="content-widget__icon">
                                    <img src="{{asset('home/image/home-9/list-icon-1.svg')}}" alt="icon">
                                </div>
                                <div class="content-widget__body">
                                    <h3 class="content-widget__title">Download for free via any device</h3>
                                    <p>Easily download the free Masco time tracking app for iOS,
                                        Android, macOS, Windows or Linux on any device anytime.</p>
                                </div>
                            </div>
                            <div class="content-widget">
                                <div class="content-widget__icon">
                                    <img src="{{asset('home/image/home-9/list-icon-2.svg')}}" alt="icon">
                                </div>
                                <div class="content-widget__body">
                                    <h3 class="content-widget__title">Create your account in minutes</h3>
                                    <p>Create your account in minutes with the necessary
                                        information to ensure the security of your information.</p>
                                </div>
                            </div>
                            <div class="content-widget">
                                <div class="content-widget__icon">
                                    <img src="{{asset('home/image/home-9/list-icon-3.svg')}}" alt="icon">
                                </div>
                                <div class="content-widget__body">
                                    <h3 class="content-widget__title">Start tracking time with just one click</h3>
                                    <p>Track time manually using a timer or automatically for scheduled
                                        tasks and to-do lists & also tracked hours, budgets, and costs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 9  : Pricing Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-9_pricing-section bg-offwhite padding-bottom-150 bg-offwhite-dark">
        <div class="home-9_pricing-shape">
            <img src="{{asset('home/image/home-9/pricing-shape.svg')}}" alt="image alt">
        </div>
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-xxl-7 col-xl-8 col-lg-9 col-md-10">
                    <div class="section-heading">
                        <h2 class="section-heading__title heading-lg--syne heading-lg text-black-3 section-title fw-700">Perfect fit regardless of your specific budget</h2>
                        <div class="home-9_pricing-control-block">
                            <div class="home-9_pricing-control-shape">
                                <img src="{{asset('home/image/home-9/pricing-card-shape.svg')}}" alt="discound icon">
                            </div>
                            <div class="pricing-control-3">
                                <span data-pricing-trigger="pricing-1" data-target="monthly">Per Month</span>
                                <span data-pricing-trigger="pricing-1" data-target="yearly" class="pricing-control-3__indicator  toggle"></span>
                                <span data-pricing-trigger="pricing-1" data-target="yearly">Per Year</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row--custom" data-plan-id="pricing-1" data-plan-active="monthly">
                <div class="col-xl-4 col-md-6" data-aos-duration="1000" data-aos="fade-up">
                    <div class="pricing-card-4 bg-orange h-100">
                        <div class="pricing-card-4__head">
                            <h3 class="pricing-card-4__plan">Personal</h3>
                            <h3 class="pricing-card-4__price-block"><span class="pricing-card__sign">$</span><span class="pricing-card-4__price dynamic-value" data-yearly="1.99" data-monthly="2.99">2.99</span><span class="pricing-card-4__time">/Per Month</span></h3>
                        </div>
                        <div class="pricing-card-4__body">
                            <ul class="pricing-card-4__list">
                                <li> Time tracking</li>
                                <li> Unlimited projects and clients</li>
                                <li> Reporting</li>
                                <li> Timer button in 50+ web apps</li>
                            </ul>
                        </div>
                        <div class="pricing-card-4__button">
                            <a href="#" class="btn-masco btn-primary-l09 rounded-pill w-100">30-Day Free Trial</a>
                            <div class="pricing-card-4__button-bottom-text">
                                <span>No credit card required*</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos-duration="1000" data-aos="fade-up">
                    <div class="pricing-card-4 bg-primary-l09 h-100">
                        <div class="pricing-card-4__head">
                            <h3 class="pricing-card-4__plan">Small Business</h3>
                            <h3 class="pricing-card-4__price-block"><span class="pricing-card__sign">$</span><span class="pricing-card-4__price dynamic-value" data-yearly="9.99" data-monthly="19.00">19.00</span><span class="pricing-card-4__time">/Per Month</span></h3>
                        </div>
                        <div class="pricing-card-4__body">
                            <ul class="pricing-card-4__list">
                                <li> Apps and sites usage reports</li>
                                <li>Screenshots capturing</li>
                                <li> Payroll for employees</li>
                                <li> Timer button in 50+ web apps</li>
                            </ul>
                        </div>
                        <div class="pricing-card-4__button">
                            <a href="#" class="btn-masco btn-secondary-l09 rounded-pill w-100">30-Day Free Trial</a>
                            <div class="pricing-card-4__button-bottom-text">
                                <span>No credit card required*</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos-duration="1000" data-aos="fade-up">
                    <div class="pricing-card-4 bg-secondary-l09 h-100">
                        <div class="pricing-card-4__head">
                            <h3 class="pricing-card-4__plan">Enterprise Team</h3>
                            <h3 class="pricing-card-4__price-block"><span class="pricing-card__sign">$</span><span class="pricing-card-4__price dynamic-value" data-yearly="29.99" data-monthly="49.99">49.99</span><span class="pricing-card-4__time">/Per Month</span></h3>
                        </div>
                        <div class="pricing-card-4__body">
                            <ul class="pricing-card-4__list">
                                <li> Calendar integrations </li>
                                <li> Billable rates & money tracking</li>
                                <li> Task management & budgeting</li>
                                <li> Activity levels for employees</li>
                            </ul>
                        </div>
                        <div class="pricing-card-4__button">
                            <a href="#" class="btn-masco btn-primary-l09 rounded-pill w-100">30-Day Free Trial</a>
                            <div class="pricing-card-4__button-bottom-text">
                                <span>No credit card required*</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home  9 : Testimonial Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-9_testimonial-section padding-bottom-150">
        <div class="container">
            <div class="row row--custom">
                <div class="col-lg-7">
                    <div class="intagrate-block">
                        <h2 class="heading-lg heading-lg--syne text-black-3 content-title">Integrate time tracker with 70+ popular tools</h2>
                        <div class="home-9_integrate-brand-wrapper">
                            <div class="row brand-image-row">
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/brand-1.png')}}" alt="image alt">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/brand-2.png')}}" alt="image alt">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/brand-3.png')}}" alt="image alt">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/brand-4.png')}}" alt="image alt">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/brand-5.png')}}" alt="image alt">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/brand-6.png')}}" alt="image alt">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/brand-7.png')}}" alt="image alt">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/brand-8.png')}}" alt="image alt">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/brand-9.png')}}" alt="image alt">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/brand-10.png')}}" alt="image alt">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/brand-11.png')}}" alt="image alt">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-3">
                                    <div class="home-9_integrate-brand-image">
                                        <img src="{{asset('home/image/home-9/brand-12.png')}}" alt="image alt">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="testimonial-widget-large-2">
                        <div class="testimonial-widget-large-__icon content-image--mobile-width">
                            <img src="{{asset('home/image/home-9/testimonial-icon.svg')}}" alt="testimonial icon">
                        </div>
                        <p class="testimonial-widget-large-2__review-text">
                            "My hours are great for keeping track of time spent on different projects.
                            Masco makes my mandatory timesheets at the end of the week much faster."
                        </p>
                        <div class="testimonial-widget-large-2__body">
                            <div class="testimonial-widget-large-2__user-image">
                                <img src="{{asset('home/image/home-9/user-image.png')}}" alt="image alt">
                            </div>
                            <div class="testimonial-widget-large-2__user-metadeta">
                                <h4 class="testimonial-widget-large-2__user-name">
                                    Dominika Smith
                                </h4>
                                <span class="testimonial-widget-large-2__user-position">
                            Senior Digital Marketing Manager
                        </span>
                            </div>
                        </div>
                        <div class="testimonial-widget-large-2__link">
                            <a href="#">Read All Reviews <i class="fa-solid fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 9  : FAQ Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-9_faq-section padding-bottom-120">
        <div class="home-9_faq-shape">
            <img src="{{asset('home/image/home-9/faq-shape.svg')}}" alt="image alt">
        </div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xxl-7 col-lg-8 col-md-9">
                    <div class="home-9_section-heading">
                        <h2 class="home-9_section-heading__title heading-lg heading-lg--syne text-black-3">Some FAQs about our time track software</h2>
                    </div>
                </div>
            </div>
            <div class="row row--custom">
                <div class="col-lg-12">
                    <div class="accordion-style-3" id="home-9_faq">
                        <div class="accordion-item">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#home-9-faq-item" aria-expanded="true" aria-controls="home-9-faq-item">
                                Q. What is the main purpose for using time tracking?
                            </button>
                            <div id="home-9-faq-item" class="accordion-collapse collapse show" data-bs-parent="#home-9_faq">
                                <div class="accordion-item__body">
                                    Time tracking allows you to make more intelligent decisions about how you price and run projects,
                                    how you schedule your team, and even how you spend your day.
                                    In short, employee time tracking software is a computer program.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-9-faq-item-2" aria-expanded="false" aria-controls="home-9-faq-item-2">
                                Q. Does time tracking improve productivity?
                            </button>
                            <div id="home-9-faq-item-2" class="accordion-collapse collapse" data-bs-parent="#home-9_faq">
                                <div class="accordion-item__body">
                                    Time tracking allows you to make more intelligent decisions about how you price and run projects,
                                    how you schedule your team, and even how you spend your day.
                                    In short, employee time tracking software is a computer program.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-9-faq-item-3" aria-expanded="false" aria-controls="home-9-faq-item-3">
                                Q. What are the main features of tracking?
                            </button>
                            <div id="home-9-faq-item-3" class="accordion-collapse collapse" data-bs-parent="#home-9-faq">
                                <div class="accordion-item__body">
                                    Time tracking allows you to make more intelligent decisions about how you price and run projects,
                                    how you schedule your team, and even how you spend your day.
                                    In short, employee time tracking software is a computer program.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-9-faq-item-4" aria-expanded="false" aria-controls="home-9-faq-item-4">
                                Q. How does Masco time-tracking software work?
                            </button>
                            <div id="home-9-faq-item-4" class="accordion-collapse collapse" data-bs-parent="#home-9-faq">
                                <div class="accordion-item__body">
                                    Time tracking allows you to make more intelligent decisions about how you price and run projects,
                                    how you schedule your team, and even how you spend your day.
                                    In short, employee time tracking software is a computer program.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-9-faq-item-5" aria-expanded="false" aria-controls="home-9-faq-item-5">
                                Q. How much does Masco time-tracking software cost?
                            </button>
                            <div id="home-9-faq-item-5" class="accordion-collapse collapse" data-bs-parent="#home-9-faq">
                                <div class="accordion-item__body">
                                    Time tracking allows you to make more intelligent decisions about how you price and run projects,
                                    how you schedule your team, and even how you spend your day.
                                    In short, employee time tracking software is a computer program.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
