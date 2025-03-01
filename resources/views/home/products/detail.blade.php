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

    <div class="portfolio-details_article">
        <div class="container">
            <article class="portfolio-details_article-block">
                <div class="portfolio-details_thumbnail-block">
                    <img class="portfolio-details_thumbnail-image" src="{{ $product->icon_path }}" alt="image alt">
                    <div class="portfolio-details_thumbnail-list">
                        <div class="">
                            <h3>Version:</h3>
                            <p>{{ $product->version }}</p>
                        </div>
                        <div>
                            <h3>License:</h3>
                            <p>{{ $product->license_type }}</p>
                        </div>
                        <div>
                            <h3>Category:</h3>
                            <p>{{ $product->category }}</p>
                        </div>
                        <div>
                            <h3>Website Link:</h3>
                            <p>
                                <a href="{{$product->website}}" target="_blank">
                                    {{ $product->website }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="portfolio-details_article-body">
                    <div>
                        <h2>Product overview</h2>
                        <p>
                            {!! $product->description !!}
                        </p>
                    </div>
                    <div>
                        <h3>Product Features</h3>
                       <ul class="list">
                           {!! $product->features !!}
                        </ul>
                    </div>
                    @foreach($product->media_files as $image)
                        <img src="{{$image}}" alt="image alt">
                    @endforeach

                </div>
            </article>
        </div>
    </div>



@endsection
