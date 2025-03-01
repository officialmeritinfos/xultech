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


    <section class="section-padding">
        <div class="container">
            <div class="row portfolio-v2 isotope-navigation">

                @foreach($products as $product)
                    <div class="col-md-6 grid-item grid-height-2 portfolio-1 portfolio-5">
                        <a href="{{ route('product.detail',['slug'=>convertToSlug($product->name),'id'=>$product->id]) }}" class="portfolio-widget portfolio-widget--overlay">
                            <div class="portfolio-widget_image-block">
                                <img src="{{ $product->icon_path }}" alt="portfolio image">
                            </div>
                            <div class="portfolio-widget__title-block">
                                <h3 class="portfolio-widget__title">
                                    {{ $product->name }}
                                </h3>
                                <span class="portfolio-widget__category">
                                    {{ $product->category }}
                                </span>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>

        </div>
    </section>


@endsection
