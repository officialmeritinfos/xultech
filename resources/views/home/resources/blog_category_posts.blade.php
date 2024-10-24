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
    <!-- ~~~~~~~~~~~~~~~~~~~~~
    BLog Page : main section
   ~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="blog_main-section section-padding-120">
        <div class="container">
            <div class="row">

                @if($blogs->count() >0)
                    <div class="col-xl-8">
                        <div class="blog_content">
                            <div class="blog-card-large-row" id="blog">
                                @include('home.resources.components.post_list')
                            </div>
                        </div>
                        @if($blogs->hasMorePages())
                            <div class="row g-3">
                                <div class="text-center mt-4 mb-4">
                                    <button id="load-more" class="btn btn-outline-dark btn-auto btn-sm" data-url="{{ url()->full() }}">Load More</button>
                                </div>
                            </div>
                        @endif
                    </div>
                @else
                    <div class="col-xl-12">
                        <div class="blog_content">
                            <div class="blog-card-large-row">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p>No Posts have been published Yet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>

    @push('js')

        <script>
            $(document).ready(function() {
                let page = 1;
                let loadMoreBtn = $('#load-more');
                let loadMoreUrl = loadMoreBtn.data('url');
                let originalText = loadMoreBtn.text();

                loadMoreBtn.click(function() {
                    page++;
                    //show loading icon
                    loadMoreBtn.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...');
                    $.ajax({
                        url: loadMoreUrl,
                        type: 'GET',
                        data: { page: page },
                        success: function(response) {
                            if(response.products) {
                                $('#blog').append(response.products);
                                if(!response.hasMorePages) {
                                    loadMoreBtn.hide();
                                } else {
                                    loadMoreBtn.text(originalText);
                                }
                            }else {
                                loadMoreBtn.text(originalText);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error loading more products:', error);
                            loadMoreBtn.text(originalText);
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
