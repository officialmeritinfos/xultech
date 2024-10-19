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
                    <img src="{{asset('home/image/solutions/ecommerce.png')}}" alt="service image" class="w-100">
                </div>
                <div class="service-details_main-single">

                    <p>
                        Imagine two local businesses. Let’s call them Bobby’s Boutique and Sarah’s Styles. Both sell trendy
                        fashion items and have a loyal customer base in their neighborhood. They started around the same time,
                        and for years, their stores had the same foot traffic and sales. Fast forward to the digital age,
                        and things have started to change.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">The Tale of Bobby’s Boutique (No Online Presence)</h3>
                    <p>
                        Bobby, who’s proud of his physical store, refuses to go online. “Why bother with all that digital stuff?”
                        he thinks. “I’ve got customers, I’ve got sales, and people know where to find me.”
                        <br/>
                        Sure, things are fine—for now. But slowly, Bobby notices fewer people coming into the store. He
                        tries to ignore it, but the truth is, people are shopping differently now. They want convenience,
                        the ability to browse from their phones, compare prices instantly, and have products delivered to
                        their doors. Bobby doesn’t offer that, and it’s starting to show. He’s still relying on word of
                        mouth and hoping customers will walk by.
                        <br/>
                        Meanwhile, just down the street…
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">The Story of Sarah’s Styles (Embracing eCommerce)</h3>
                    <p>
                        Sarah, on the other hand, saw the digital wave coming. She quickly jumped on board and partnered
                        with {{$siteName}} to build her online store. Within months of launching her website, something magical
                        started to happen: she wasn’t just selling to the locals anymore—she was selling to the world.
                        <br/>
                        Her online store was sleek, easy to navigate, and mobile-friendly. Customers could shop at any time,
                        from anywhere, without leaving the comfort of their homes. Sarah even implemented features like
                        personalized recommendations and quick checkout, so the experience felt tailored and smooth. And
                        because she offered multiple payment options and fast shipping, customers came back again and again.
                        <br/>
                        Meanwhile, just down the street…
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">The Moral of the Story: Don’t Be Bobby, Be Sarah!</h3>
                    <p>
                        The world is shopping online. Whether you’re selling clothes, gadgets, or even services, having
                        an eCommerce platform means you’re not limited by location or store hours. And at {{$siteName}}, we help
                        businesses like Sarah’s build online stores that not only look beautiful but also perform seamlessly.
                        <br/>
                        So, what did Sarah’s Styles gain from eCommerce that Bobby’s Boutique missed out on?
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <strong>Unlimited Reach:</strong><br/>
                                When you have an online store, you’re not just waiting for foot traffic—you’re tapping into
                                a global audience. Sarah’s business wasn’t restricted by geography; she could sell her products
                                to anyone, anywhere, at any time.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Convenience for Customers:</strong><br/>
                                Online shopping isn’t just a trend; it’s a convenience that customers have come to expect.
                                No one wants to deal with crowds or wait for a store to open. With Sarah’s eCommerce platform,
                                customers could browse, buy, and get their orders delivered—all from their phones or laptops.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Sales Around the Clock:</strong><br/>
                                Physical stores have working hours. Sarah’s online store? It never closed. Whether it was
                                3 a.m. or noon, Sarah was making sales while sipping coffee, sleeping, or even on vacation.
                                Her store worked for her 24/7.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Personalized Shopping Experience:</strong><br/>
                                Thanks to the advanced features we built into Sarah’s site—like personalized product recommendations
                                and special offers for returning customers—Sarah didn’t just have a store; she had a powerful
                                tool to boost customer engagement. Bobby, still stuck in his ways, had no such advantage.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Data-Driven Decisions:</strong><br/>
                                Sarah’s eCommerce platform gave her access to real-time data on customer behavior—what they
                                were buying, when they were shopping, and even why they were abandoning carts. This helped
                                her make smarter decisions, like which products to stock more of and when to offer discounts.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">How {{$siteName}} Can Help You Be More Like Sarah</h3>
                    <p>
                        At {{$siteName}}, we know that every business has the potential to thrive online. That’s why we build
                        custom eCommerce platforms designed to meet your unique needs. Whether you’re a small boutique
                        like Bobby or a growing brand like Sarah, we offer:
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <strong>Seamless Checkout Processes: Making Shopping a Breeze:</strong><br/>
                                Picture this: your customers have found the perfect product, their shopping cart is ready,
                                and then they’re hit with a long, complicated checkout process. Cue the groans and abandoned carts.
                                <br/>
                                We believe that the checkout process should be as easy as clicking “Buy Now” and moving
                                on with your day. At {{$siteName}}, we design checkout flows that are simple, intuitive, and
                                fast. No unnecessary fields, no confusing steps. Your customers can complete their purchase
                                in seconds, leaving them more time to, well, shop again!
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Mobile-First Design: Because Most of Your Traffic Will Come from Phones:</strong><br/>
                                Did you know that the majority of online shoppers are browsing on their phones? Yep, mobile
                                traffic accounts for over 70% of eCommerce site visits. This means that if your website isn’t
                                optimized for mobile, you’re leaving money on the table.
                                <br/>
                                At {{$siteName}}, we design with a mobile-first approach. That means we build your website with
                                mobile users in mind from the start—no awkward resizing or missing buttons. Your customers
                                will get a smooth shopping experience no matter what device they’re using, whether it’s a
                                smartphone, tablet, or desktop - and to make it easier for them to access your website, we
                                turn your website into a full Progress Web App(PWA), which acts and functions like a mobile
                                app.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Multi-Currency Support: Selling Globally, Without a Hitch:</strong><br/>
                                Your products are awesome—so why limit yourself to just one market? With {{$siteName}}, you can
                                expand your reach to a global audience. We build eCommerce platforms that support multi-currency
                                options, allowing you to sell in different currencies with ease. Whether your customers
                                are in New York, London, or Tokyo, they’ll see prices in their own currency and can pay
                                without any extra hassle.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Advanced Analytics: Know What’s Working and What’s Not:</strong><br/>
                                Data is your business’s best friend. With advanced analytics, you’ll know exactly how your
                                customers are behaving—what they’re buying, what’s trending, and even why some are abandoning
                                their carts.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="service-details_main-single">
                    <p>
                        Let’s talk about Papa Chukwudi and Mr. Bayo—both hard-working men in the car spare-parts business,
                        but they run their businesses a little differently.
                    </p>
                    <h3 class="service-details_main-title">Papa Chukwudi: The eCommerce Success Story</h3>
                    <p>
                        Papa Chukwudi, an Onitsha born trader, always ahead of the game, decided to take his car spare-parts
                        business online. He partnered with {{$siteName}} (of course!), and now he’s not just selling to people
                        in his neighborhood—he’s selling to the entire country! With his eCommerce platform, customers
                        can browse his wide range of spare parts, from brake pads to engine oil, all from the comfort of their homes.
                    </p>
                    <p>
                        Here are some of the benefits Papa Chukwudi enjoys from selling spare parts online:
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <p>
                                <strong>Step 1: Access to a Nationwide (and Global!) Market:</strong><br/>
                                Papa Chukwudi isn’t limited to customers walking by his shop. He’s selling to anyone, anywhere!
                                When he runs a facebook ad now, he get calls from people in Imo State asking him about some
                                mechanical spare-parts.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Step 2: Sales 24/7:</strong><br/>
                                His shop never closes! Even while Papa Chukwudi is asleep, customers are browsing his online
                                store and placing orders. Whether it’s 2 a.m. or during Sunday service, his eCommerce platform
                                keeps bringing in sales without him lifting a finger - then he processes the orders during the weekday.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Step 3: Better Organization and Inventory Management:</strong><br/>
                                Papa Chukwudi has his entire inventory digitally tracked. No more surprises about which
                                parts are in stock and which ones aren’t. His system automatically updates when a customer
                                buys something, so he knows exactly when to restock and never has to worry about selling items he doesn’t have.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Step 4: Easier for Customers:</strong><br/>
                                Who wants to drive across town, search for parking, and then hope the shop has the part
                                you need? Papa Chukwudi’s customers can search for the exact part they need, pay online,
                                and either have it delivered or pick it up at their convenience - just as his store in
                                Coal Camp Enugu does.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Step 5: Building Customer Loyalty:</strong><br/>
                                Papa Chukwudi can offer special discounts and loyalty programs. Repeat customers get a
                                special deal, and personalized product recommendations keep them coming back for more.
                            </p>
                        </div>
                    </div>
                    <h3 class="service-details_main-title">Mr. Bayo: The Old School Seller</h3>
                    <p>
                        Mr. Bayo, on the other hand, still runs his business the traditional way—no online store, just
                        his good old brick-and-mortar shop. He’s a master at customer service and knows his regulars by
                        name. But here’s what Mr. Bayo is missing out on:
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <p>
                                <strong>1. Limited to Local Customers</strong>
                                Unlike Papa Chukwudi, Mr. Bayo is only selling to people who can physically visit his shop.
                                If someone lives in another city or can’t make the trip, they’re out of luck. He’s limited
                                by geography and shop hours.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>2. No Sales After Hours</strong>
                                Once Mr. Bayo locks up for the day, that’s it. No more sales until he opens his doors again
                                in the morning. If someone urgently needs a part after 6 p.m., they’ll have to wait—and
                                they might even go somewhere else.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>3. No Online Payment Options</strong>
                                Mr. Bayo doesn’t offer the convenience of online payments. Customers need to bring cash
                                or a card, and if they forget, well, it’s back to the shop another day.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>4. Inventory Headaches</strong>
                                Managing inventory manually is tricky for Mr. Bayo. Sometimes, he runs out of popular parts
                                before he even realizes it. Keeping track of stock is a full-time job in itself.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>5. Missing Out on Data and Analytics</strong>
                                Mr. Bayo doesn’t have the data Papa Chukwudi has. He has no idea which parts are most
                                popular, what times of the day customers shop, or how many people visit his store but leave
                                without buying. All this valuable info is missing, so it’s hard for him to make data-driven decisions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row service-details_main-image-row">
                    <div class="col-12">
                        <img src="{{asset('home/image/solutions/whatsapp-business.png')}}" alt="service image" class="w-100">
                    </div>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">Why Having an eCommerce Store Beats WhatsApp Business</h3>
                    <p>
                        Now, let’s be real for a second. WhatsApp Business is great, but it’s like the bike with training
                        wheels of online selling. It’s handy for a quick chat with customers, but when it comes to running
                        a fully-fledged business, an eCommerce store takes the crown every single time.
                        <br/>
                        So, why should you upgrade from WhatsApp Business to a proper eCommerce platform like Sarah’s Styles & Papa Chukwudi?
                        Let’s break it down—with a touch of humor, of course.
                    </p>

                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <p>
                                <strong>Because Browsing Isn’t Fun on WhatsApp:</strong><br/>
                                Imagine this: your customers have to scroll through message threads or dig through photo
                                albums to find that one item they wanted to buy
                                <br/>
                                On an eCommerce site? It’s like walking into a well-organized boutique where everything
                                is neatly displayed, easily searchable, and—bonus—you can sort by price, popularity, and
                                reviews. No more back-and-forth messaging!
                                Talking about reviews, you have to manually create a category for reviews and then add them
                                as if they're products available for checkout - eww!
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Cart Abandonment? Not with WhatsApp, Because There’s No Organized Cart:</strong><br/>
                                Let’s talk about one of the biggest drawbacks of WhatsApp Business: no organized shopping cart. On
                                an eCommerce platform, your customers can add multiple items to their cart, think about it,
                                and come back later to complete their purchase. It’s like giving them a little basket to
                                fill as they wander your digital aisles. Whatsapp Business lacks this.
                                <br/>
                                With WhatsApp? You’re stuck messaging back and forth, asking, “Are you still interested?”
                                over and over, until you start to feel like a salesperson at the mall who just won’t take a
                                hint. An eCommerce store gives your customers the freedom to browse, shop, and buy at their own pace.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>24/7 Sales Without Needing to Respond to Messages:</strong><br/>
                                When you rely on WhatsApp Business, you’re basically saying, “You can only shop when I’m
                                available to answer.” But what happens when you’re asleep, on vacation, or (gasp!) just
                                want a break? Your sales stop.
                                <br/>
                                With an eCommerce store, your business is open 24/7. Whether your customer is an early bird
                                or a night owl, they can complete a purchase anytime—no need to wait for you to reply with,
                                “Yes, it’s available” at 2 a.m.!
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Professionalism:</strong><br/>
                                Let’s face it: sliding into someone’s DMs to buy a product isn’t exactly the most professional
                                shopping experience. It’s fine for a small side hustle, but if you’re running a legit business—whether
                                it's fashion, gadgets, or services—you need a platform that represents your brand with style and professionalism.
                                <br/>
                                An eCommerce platform gives you that polished, trustworthy look. Customers know they’re
                                dealing with a business that’s serious about what it does. It’s like the difference between
                                having a proper storefront and selling out of your trunk in a parking lot.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Better Inventory Management:</strong><br/>
                                On WhatsApp, how do you keep track of inventory? Maybe you’re sending the same item’s photo
                                to five customers, and suddenly, boom—you’ve oversold. Now you’re backtracking, explaining
                                to disappointed customers why you’re out of stock.

                                <br/>
                                With an eCommerce platform, inventory updates automatically. Customers only see what’s
                                available, and you don’t have to worry about apologizing later for that inventory mishap.
                                It's like having a personal assistant who manages all your stock levels for you.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Multiple Payment Options:</strong><br/>
                                On WhatsApp, your customers are stuck with whatever payment method you prefer—bank transfer,
                                mobile money, or maybe a third-party payment link you send them after they confirm an order.
                                Not exactly smooth, right?
                                <br/>
                                With an eCommerce platform, you can offer multiple payment options—credit cards, PayPal,
                                direct bank transfers, even cryptocurrencies if that’s your thing. Customers can choose
                                the method that works for them and check out in seconds, no awkward follow-up needed.
                            </p>
                        </div>

                    </div>
                    <div class="service-details_main-single">
                        <h3 class="service-details_main-title">
                            Why {{$siteName}} is the Best Choice for eCommerce Software Development
                        </h3>
                        <p>
                            At {{$siteName}}, we don’t just build websites—we build adventures in shopping! Your online store
                            isn’t just a collection of product pages; it’s the digital version of a department store, but
                            without the annoying elevator music. We believe that eCommerce should be simple, exciting, and
                            most of all, successful. So why trust {{$siteName}} with your eCommerce development? Let’s break it
                            down, and don’t worry—we’ll keep it as fun as possible!
                        </p>
                        <p>
                            <strong>We Understand Your Customers:</strong>
                            Shopping online should feel like a fun conversation, not a lecture on economics. That’s why
                            we create eCommerce platforms that are designed with your customers in mind. We get to know
                            your audience—what makes them click that “Add to Cart” button, what makes them browse for hours,
                            and how to keep them coming back for more. We sprinkle a bit of digital magic dust on every
                            store we build, ensuring your customers have a shopping experience they’ll remember.
                        </p>
                        <p>
                            <strong>  Mobile? Desktop? We’ve Got You Covered:</strong>
                            We all know the world lives on their phones these days—sometimes even in the shower! So we make
                            sure your online store looks stunning on every screen size. Whether someone’s shopping for
                            shoes on their phone or comparing prices on a tablet, our designs adjust like yoga instructors—flexible and flawless.
                        </p>
                        <p>
                            <strong> Security at the Core:</strong>
                            We prioritize security in everything we do. From data encryption to secure authentication,
                            we build ecommerce software that protects your business and your users from cyber threats.
                        </p>
                        <p>
                            <strong> We Provide Ongoing Support:</strong>
                            Your app’s journey doesn’t end at launch, and neither does our support. We offer ongoing maintenance,
                            updates, and support to make sure your app stays up-to-date, secure, and relevant. Whether it’s
                            fixing bugs, adding new features, or simply making improvements, we’re here for the long haul.
                        </p>
                        <p>
                            <strong> We’re a Startup That Can’t Afford to Disappoint:</strong>
                            Here’s the kicker: we’re a new startup, and we know that every project is an opportunity to
                            prove ourselves. That’s why we work harder, smarter, and faster than anyone else. We can’t
                            afford to disappoint you because your success is our success. You’ll get a team that’s hungry
                            to impress and passionate about delivering results that knock your socks off. Trust us; we’re
                            in this to win.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
