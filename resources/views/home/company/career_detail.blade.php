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
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Career Details Page : main section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="career-details_main-section section-padding-120">
        <div class="container">
            <div class="row row--custom">
                <div class="col-xl-7">
                    <div class="career-details_main-block">
                        <div class="career-details">
                            <h2 class="career-details_section__title">Job Details:</h2>
                            <p>
                                {{$job->description}}
                            </p>
                            <div class="career-details_job-info">
                                <span><img src="{{asset('home/image/icons/clock.svg')}}" alt="clock">Full Time</span>
                                <span><img src="{{asset('home/image/icons/location.svg')}}" alt="location">{{$job->employment_type}}, {{$job->location}}</span>
                                <span><img src="{{asset('home/image/icons/cash.svg')}}" alt="cash">$25k-$40k</span>
                            </div>
                        </div>
                        <div class="career-details">
                            <h3 class="career-details_title">Job Responsibilities</h3>
                            <div class="career-details_info">
                                {!! $job->responsibilities !!}
                            </div>
                        </div>
                        <div class="career-details">
                            <h3 class="career-details_title">Requirements</h3>
                            <div class="career-details_info">
                                {!! $job->requirements !!}
                            </div>
                        </div>
                        <div class="career-details">
                            <h3 class="career-details_title">Need help?</h3>
                            <p>Not sure exactly what we’re looking for or just want clarification?
                                We’d be happy to chat with you and clear things up for you. Anytime</p>
                            <div class="career-details_widget-row">
                                <div class="career-details_widget">
                                    <div class="career-details_widget__icon">
                                        <img src="{{asset('home/image/career/phone.svg')}}" alt="">
                                    </div>
                                    <div class="career-details_widget__body">
                                        <h3 class="career-details_widget__title">Call us</h3>
                                        <span>
                                            {!! $web->contact_phone !!}
                                        </span>
                                    </div>
                                </div>
                                <div class="career-details_widget">
                                    <div class="career-details_widget__icon">
                                        <img src="{{asset('home/image/career/mail.svg')}}" alt="">
                                    </div>
                                    <div class="career-details_widget__body">
                                        <h3 class="career-details_widget__title">Email us</h3>
                                        <span>{{$web->contact_email}}</span>
                                    </div>
                                </div>
                                <div class="career-details_widget">
                                    <div class="career-details_widget__icon">
                                        <img src="{{asset('home/image/career/location.svg')}}" alt="">
                                    </div>
                                    <div class="career-details_widget__body">
                                        <h3 class="career-details_widget__title">Office address</h3>
                                        <span>
                                            {!! $web->address !!}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-10">
                    <livewire:company.job-submission :job="$job"/>
                </div>

            </div>
        </div>
    </div>

@endsection
