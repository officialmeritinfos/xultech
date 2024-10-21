@foreach($blogs as $blog)
    <div class="blog-card-large">
        <div class="blog-card-large__image">
            <img src="{{$blog->featuredImage}}" alt="blog image">
        </div>
        <div class="blog-card-large__body">
            <div class="blog-card-large__meta">
                <a href="{{route('resources.blogs.author',['author'=>$blog->user->username])}}">
                    <span class="blog-card-large__user">
                        <img src="{{asset('home/image/blog/user-image.png')}}" alt="user image">
                        {{$blog->user->name}}
                    </span>
                </a>
                <a href="{{route('resources.blogDetail',['slug'=>$blog->slug])}}">
                    <span class="blog-card-large__time">
                        <img src="{{asset('home/image/blog/blog-card-icon.svg')}}" alt="user image">
                        {{$blog->created_at->format('M d, Y')}}
                    </span>
                </a>
                <a href="{{route('resources.blogs.category',['category'=>$blog->category])}}">
                    <span class="blog-card-large__category">
                        {{$blog->category}}
                    </span></a>
            </div>
            <a href="{{route('resources.blogDetail',['slug'=>$blog->slug])}}">
                <h2 class="blog-card-large__title">
                    {{$blog->title}}
                </h2>
            </a>
            <p>
                {!! shortenText($blog->content,30) !!}
            </p>
            <a href="{{route('resources.blogDetail',['slug'=>$blog->slug])}}" class="blog-card-large__link">
                <span>Read More</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
@endforeach
