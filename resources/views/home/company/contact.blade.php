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

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
       Conatct : Feature Section
   ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="contact_feature-section section-padding">
        <div class="container">
            <div class="row justify-content-center gutter-y-default">
                <div class="col-lg-4 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="">
                    <div class="feature-card">
                        <div class="feature-card__icon">
                            <img src="{{asset('home/image/contact-details/feature-icon-1.svg')}}" alt="image alt">
                        </div>
                        <div class="feature-card__body">
                            <h3 class="feature-card__title">Chat with us</h3>
                            <p>
                                We are waiting to help you out with any challenges every Sunday-Saturday from
                                6am to 1am UTC
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="">
                    <div class="feature-card">
                        <div class="feature-card__icon">
                            <img src="{{asset('home/image/contact-details/feature-icon-2.svg')}}" alt="image alt">
                        </div>
                        <div class="feature-card__body">
                            <h3 class="feature-card__title">Give us a call</h3>
                            <p>Give us a ring at <span>{{$web->contact_phone}}</span>. Every Sunday-Saturday from 8 am to 11 pm UTC.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="">
                    <div class="feature-card">
                        <div class="feature-card__icon">
                            <img src="{{asset('home/image/contact-details/feature-icon-3.svg')}}" alt="image alt">
                        </div>
                        <div class="feature-card__body">
                            <h3 class="feature-card__title">Email Us</h3>
                            <p>Drop us an email at <span>{{$web->contact_email}}</span> and you'll receive a reply within an hour.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="">
                    <div class="feature-card">
                        <div class="feature-card__icon">
                            <img src="{{asset('home/image/contact-details/feature-icon-3.svg')}}" alt="image alt">
                        </div>
                        <div class="feature-card__body">
                            <h3 class="feature-card__title">Visit Us</h3>
                            <p>
                                Drop by and say Hello to the Team at: <br/>
                                <strong>22 Edozie Street, Uwani, Enugu, Nigeria.</strong><br/>
                                {{ $web->address }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
