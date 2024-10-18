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
        Team : Team Section
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="team-section section-padding-100 padding-bottom-120 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-11">
                    <div class="section-heading text-center">
                        <h2 class="section-heading__title heading-md--v3">The amazing team behind our creative products</h2>
                    </div>
                </div>
            </div>
            <div class="row team-card-2-row">
                @foreach($teams as $team)
                    <div class="col-lg-3 col-sm-6 col-8">
                        <div class="team-card-2" data-bs-toggle="modal" data-bs-target="#teamModal{{$team->id}}" style="cursor: pointer;">
                            <img src="{{ asset('home/team/' . $team->photo) }}" alt="Team Member Image" style="height: 200px;">
                            <div class="team-card-2__body">
                                <h4 class="team-card-2__name">
                                    {{ $team->name }}
                                </h4>
                                <span class="team-card-2__position">
                                    {{ $team->position }}
                                </span>
                                <span class="click-indicator mb-2" style="color: #F4B905; font-size: 12px;">Click for more info</span>
                                <div class="team-card-2__social-links hvr-blue">
                                    <a href="{{ $team->twitter_url }}" target="_blank">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="{{ $team->facebook_url }}" target="_blank">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="{{ $team->instagram_url }}" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="{{ $team->linkedin_url }}" target="_blank">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="teamModal{{$team->id}}" tabindex="-1" aria-labelledby="teamModalLabel{{$team->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="teamModalLabel{{$team->id}}">{{ $team->name }} - {{ $team->position }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('home/team/' . $team->photo) }}" alt="Team Member Image" class="img-fluid mb-3">
                                    <p>{{ $team->bio }}</p> <!-- Display the bio here -->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


@endsection
