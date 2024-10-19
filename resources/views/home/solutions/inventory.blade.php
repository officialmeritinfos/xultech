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
   Service Details main Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="service-details_main-section section-padding-120" style="padding:2rem;">
        <div class="row justify-content-center ">
            <div class="col-lg-8">
                <div class="service-details_main-image">
                    <img src="{{asset('home/image/solutions/sales-inventory.jpg')}}" alt="service image" class="w-100">
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Streamlining Your Stock and Boosting Sales</h3>
                    <p>
                        When it comes to running a business, managing inventory and keeping track of sales can be a headache.
                        Whether you're a small boutique, a bustling restaurant, or a large retail chain, juggling stock
                        levels and sales data manually is like trying to herd cats—it’s just not efficient. Enter
                        {{$siteName}}’s Inventory and Sales Solution(sounds like the movie titled Enter The Dragon right?),
                        your all-in-one system designed to help you keep your stock organized, track your sales effortlessly,
                        and maximize profitability.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Inventory Management Made Easy</h3>
                    <p>
                        No more second-guessing whether you’re low on stock or trying to remember if you’ve re-ordered
                        that popular item. With {{$siteName}}’s Inventory Solution, everything is updated in real-time, ensuring
                        that your shelves (physical or digital) are always stocked with what your customers want.
                    </p>
                    <h5 class="service-details-title">Key Features of Our Inventory Management</h5>
                    <p>
                        <strong>Real-Time Stock Tracking:</strong>
                        Know exactly what’s in your inventory at any given moment. As sales are made, your inventory is
                        automatically updated, so you’re never in the dark.
                    </p>
                    <p>
                        <strong>Automated Reorder Alerts:</strong>
                        Don’t wait until it’s too late. Our system will notify you when stock levels are low, so you can reorder in time.
                    </p>
                    <p>
                        <strong>Multi-location Inventory Support:</strong>
                        Managing multiple branches or warehouses? No problem. Our solution keeps track of stock across
                        different locations, so you know where everything is.
                    </p>
                    <p>
                        <strong>Product Categorization:</strong>
                        Organize your products by category, size, color, or any other attribute that fits your business.
                        This makes tracking and reordering easier.
                    </p>
                    <p>
                        <strong>Batch and Expiry Management:</strong>
                        Especially useful for industries like food, pharmaceuticals, or beauty, where product batches need
                        to be tracked and expiration dates monitored.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Sales Tracking That Boosts Your Bottom Line
                    </h3>
                    <p>
                        Keeping track of your sales isn’t just about knowing what was sold—it’s about using that information
                        to drive smarter business decisions. With {{$siteName}}’s Sales Solution, you’ll not only track daily
                        transactions but also gain insights into your customers’ shopping habits and your top-performing products.
                    </p>
                    <p>
                        <strong>Detailed Sales Reports</strong>
                        Get access to reports that show your daily, weekly, or monthly sales at a glance. Identify your
                        best-selling products and pinpoint sales trends that will help you restock and market effectively.
                        <br/>
                    </p>
                    <p>
                        <strong> Point-of-Sale Integration:</strong>
                        Our solution integrates seamlessly with your point-of-sale (POS) systems, ensuring that every
                        sale is automatically recorded and updated in your system.
                    </p>
                    <p>
                        <strong>Multi-channel Sales Tracking:</strong>
                        If you’re selling both online and offline, we’ve got you covered. Track sales from all channels
                        in one place, giving you a complete view of your business.
                    </p>
                    <p>
                        <strong>Customer Purchase History:</strong>
                        Understand your customers’ preferences by viewing their purchase history. Use this information
                        to create personalized promotions or offer loyalty rewards.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">
                        Perfect for Businesses in Every Industry
                    </h3>
                    <p>
                        Whether you’re selling products or services, {{$siteName}}’s Inventory and Sales Solution is flexible
                        enough to fit any business model. Here’s how it can help different industries:
                    </p>
                    <div class="row row--custom">
                        <div class="col-md-6">
                            <p>
                                <strong>Retail Stores:</strong><br/>
                                Manage in-store and online inventory seamlessly.<br/>
                                Track seasonal trends and adjust stock levels accordingly.<br/>
                                Monitor employee sales performance and improve customer service.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Restaurants and Cafes:</strong><br/>
                                Keep track of ingredients and avoid food waste by using batch tracking.<br/>
                                Manage both dine-in and takeout sales from one platform.<br/>
                                Ensure that your kitchen always has what it needs with automatic reordering.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>E-commerce Platforms:</strong><br/>
                                Easily sync inventory between your physical store and online shop.<br/>
                                Handle product variations (size, color, etc.) with ease.<br/>
                                Ensure a smooth shopping experience for your customers by keeping product listings accurate.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Wholesale and Distribution:</strong><br/>
                                Track products across multiple warehouses.<br/>
                                Manage large orders with automatic invoicing and payment tracking..<br/>
                                Reduce the risk of overstock or understock by using real-time stock monitoring.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Pharmaceuticals:</strong><br/>
                                Manage stock expiration dates and avoid selling expired products.<br/>
                                Track batches and ensure regulatory compliance.<br/>
                                Automatically generate restocking orders when critical items are low.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Ready to Get Your Inventory and Sales Under Control?</h3>
                    <p>
                        {{$siteName}}’s Inventory and Sales Solution is designed to take the headache out of managing stock and
                        tracking sales, allowing you to focus on what really matters: growing your business. Whether you're
                        running a single retail store or managing multiple warehouses, our solution is scalable, reliable,
                        and easy to use.
                        <br/>
                        Let’s take your business to the next level! Get in touch with us today, and let’s discuss how we
                        can help you streamline your operations and boost your bottom line.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
