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

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~
Career Page : main section
~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="career_main-section section-padding-120">
        <div class="container">
            <div class="career_main-image">
                <img src="{{asset('home/image/career/career-image.png')}}" alt="">
            </div>
            <div class="career-main__section-heading">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-9">
                        <h2 class="heading-md text-black career_main-title">Curently open positions</h2>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <ul class="navigation-list navigation-list--inline">
                            <li class="active" data-filter="*">
                                <button class="btn rounded-pill">All</button>
                            </li>
                            <li class="" data-filter=".portfolio-1">
                                <button class="btn rounded-pill">Design</button>
                            </li>
                            <li class="" data-filter=".portfolio-2">
                                <button class="btn rounded-pill">Development</button>
                            </li>
                            <li class="" data-filter=".portfolio-3">
                                <button class="btn rounded-pill">Business</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row career-card-row navigation-active isotope-navigation">
                @foreach($jobs as $job)
                    <div class="col-lg-6 grid-item  portfolio-1 portfolio-3">
                        <div class="career-card">
                            <div class="career-card__body">
                                <h3 class="career-card__title">{{$job->title}}</h3>
                                <p>
                                    {{shortenText($job->description,20)}}
                                </p>
                            </div>
                            <div class="career-card__job-info">
                                <span><img src="{{asset('home/image/icons/clock.svg')}}" alt="clock">Full Time</span>
                                <span><img src="{{asset('home/image/icons/location.svg')}}" alt="location">{{$job->employment_type}},{{$job->location}}</span>
                                <span><img src="{{asset('home/image/icons/cash.svg')}}" alt="cash">
                                    {{$job->salary_range}}
                                </span>
                            </div>
                            <a href="{{route('company.careerDetail',['slug'=>$job->slug])}}" class="btn-link btn-arrow career-card__link">Apply now</a>
                        </div>
                    </div>
                @endforeach
            </div>



        </div>
    </div>


@endsection
