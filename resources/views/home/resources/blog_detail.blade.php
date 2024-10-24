@extends('home.layout.blogBase')
@section('content')
    @push('css')
        <style>
            /* Target any <pre> element with a class starting with 'language-' */
            pre[class^="language-"] {
                background-color: #f8f9fa; /* Light background */
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #d3d3d3; /* Slight border */
                max-height: 250px; /* Max height for the scroll */
                overflow-x: auto; /* Horizontal scrolling */
                overflow-y: auto; /* Vertical scrolling */
                font-family: 'Courier New', Courier, monospace; /* Code-like font */
            }

            code {
                color: #d63384; /* Code text color */
                font-size: 0.9rem; /* Adjust the font size */
                line-height: 1.5; /* Line height for readability */
            }

        </style>
    @endpush


    <div class="blog-details_main-section ">
        <div class="inner_banner-section">
            <img class="inner_banner-background-image" src="{{asset('home/image/common/inner-bg.png')}}" alt="image alt">
            <div class="container">
                <div class="inner_banner-content-block">
                    <h3 class="inner_banner-title">
                        {{$pageName}}
                    </h3>
                    <ul class="banner__page-navigator">
                        <li>
                            <a href="{{route('resources.blogs')}}">Blog</a>
                        </li>
                        <li class="active">
                            <a href="{{url()->current()}}">
                                Blog Details
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="blog-details_main-wrapper section-padding-120">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="blog-content">
                            <img src="{{$post->featuredImage}}" alt="blog image" class="mb-30 w-100">
                            <div class="blog-content-meta">
                                <a href="{{route('resources.blogs.author',['author'=>$post->user->username])}}">
                                    <span class="blog-content__user"><img src="{{$post->user->profile_photo_path??'https://ui-avatars.com/api/?rounded=true&background=random&name='.$post->user->name}}" alt="user image">{{$post->user->name}}</span></a>
                                <a href="#">
                                    <span class="blog-content__time"><img src="{{asset('home/image/blog/blog-card-icon.svg')}}" alt="user image">
                                    {{$post->created_at->format('M d, Y')}}
                                    </span></a>
                                <a href="{{route('resources.blogs.category',['category'=>$post->category])}}">
                                    <span class="blog-content__category">{{$post->category}}</span></a>
                            </div>
                            <div class="blog-content-wrapper">
                                {!! $post->content !!}
                                <h3 class="blog-bottom-text">Thanks for reading ❤</h3>
                                <div class="blog-content__social-options">
                                    <div class="social-options-left">
                                        <span><img src="{{asset('home/image/resiources/eye.svg')}}" alt="views"
                                            style="width: 20px;">{{$post->viewers()->count()}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </div>


@endsection
