<header class="site-header site-header--menu-left site-header--transparent site-header--absolute">
    <div class="container">
        <nav class="navbar site-navbar">
            <!--~~~~~~~~~~~~~~~~~~~~~~~~
              Brand Logo
          ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="brand-logo">
                <a href="{{route('landingPage')}}">
                    <!-- light version logo (logo must be black)-->
                    <img class="logo-light" src="{{asset($web->logo_path)}}" alt="brand logo">
                    <!-- Dark version logo (logo must be White)-->
                </a>
            </div>
            <div class="menu-block-wrapper ">
                <div class="menu-overlay"></div>
                <nav class="menu-block" id="append-menu-header">
                    <div class="mobile-menu-head">
                        <a href="{{route('landingPage')}}">
                            <img src="{{asset($web->logo2)}}" alt="brand logo" style="width: 100px;">
                        </a>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                    </div>
                    <ul class="site-menu-main">
                        <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger">Demos<i class="fas fa-angle-down"></i>
                            </a>
                            <div class="sub-menu" id="submenu-1">
                                <ul class="sub-menu_list">
                                    <li class="sub-menu_item">
                                        <a href="index">
                                            <span class="menu-item-text">Digital agency</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="index-2">
                                            <span class="menu-item-text">Chat software</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="index-3">
                                            <span class="menu-item-text">Fitness App</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="index-4">
                                            <span class="menu-item-text">Online Courses</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="index-5">
                                            <span class="menu-item-text">SEO Agency</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="index-6">
                                            <span class="menu-item-text">Cold Email</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="index-7">
                                            <span class="menu-item-text">Web Hosting</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="index-8">
                                            <span class="menu-item-text">Startup</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="index-9">
                                            <span class="menu-item-text">Tracking Software</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="index-10">
                                            <span class="menu-item-text">AI Writing Tool</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="about" class="nav-link-item drop-trigger">About Us</a>
                        </li>
                        <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger">Pages<i class="fas fa-angle-down"></i>
                            </a>
                            <div class="sub-menu" id="submenu-3">
                                <ul class="sub-menu_list">
                                    <li class="sub-menu_item nav-item-has-children child-item">
                                        <a href="#" class="sub-menu__item-link">
                                            <span class="menu-item-text">Services</span>
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                        <div class="sub-menu child-sub" id="submenu-22">
                                            <ul class="sub-menu_list">
                                                <li class="sub-menu_item">
                                                    <a href="service">
                                                        <span class="menu-item-text">Service</span>
                                                    </a>
                                                </li>
                                                <li class="sub-menu_item">
                                                    <a href="service-details">
                                                        <span class="menu-item-text">Service Details</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="team">
                                            <span class="menu-item-text">Team</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item nav-item-has-children child-item">
                                        <a class="sub-menu__item-link">
                                            <span class="menu-item-text">Pricing</span>
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                        <div class="sub-menu child-sub" id="submenu-11">
                                            <ul class="sub-menu_list">
                                                <li class="sub-menu_item">
                                                    <a href="pricing">
                                                        <span class="menu-item-text">Pricing 1</span>
                                                    </a>
                                                </li>
                                                <li class="sub-menu_item">
                                                    <a href="pricing-2">
                                                        <span class="menu-item-text">Pricing 2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sub-menu_item nav-item-has-children child-item">
                                        <a class="sub-menu__item-link">
                                            <span class="menu-item-text">Career</span>
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                        <div class="sub-menu child-sub" id="submenu-4">
                                            <ul class="sub-menu_list">
                                                <li class="sub-menu_item">
                                                    <a href="career">
                                                        <span class="menu-item-text">Career</span>
                                                    </a>
                                                </li>
                                                <li class="sub-menu_item">
                                                    <a href="career-details">
                                                        <span class="menu-item-text">Career Details</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sub-menu_item nav-item-has-children child-item">
                                        <a class="sub-menu__item-link">
                                            <span class="menu-item-text">Portfolio</span>
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                        <div class="sub-menu child-sub" id="submenu-7">
                                            <ul class="sub-menu_list">
                                                <li class="sub-menu_item">
                                                    <a href="portfolio">
                                                        <span class="menu-item-text">Portfolio 1 Classic</span>
                                                    </a>
                                                </li>
                                                <li class="sub-menu_item">
                                                    <a href="portfolio-2">
                                                        <span class="menu-item-text">Portfolio 2 Masonry</span>
                                                    </a>
                                                </li>
                                                <li class="sub-menu_item">
                                                    <a href="portfolio-3">
                                                        <span class="menu-item-text">Portfolio 3 Modern</span>
                                                    </a>
                                                </li>
                                                <li class="sub-menu_item">
                                                    <a href="portfolio-4">
                                                        <span class="menu-item-text">Portfolio 4 Minimal</span>
                                                    </a>
                                                </li>
                                                <li class="sub-menu_item">
                                                    <a href="portfolio-details">
                                                        <span class="menu-item-text">Portfolio Details</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sub-menu_item nav-item-has-children child-item">
                                        <a class="sub-menu__item-link">
                                            <span class="menu-item-text">Blog</span>
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                        <div class="sub-menu child-sub" id="submenu-12">
                                            <ul class="sub-menu_list">
                                                <li class="sub-menu_item">
                                                    <a href="blog">
                                                        <span class="menu-item-text">Blog</span>
                                                    </a>
                                                </li>
                                                <li class="sub-menu_item">
                                                    <a href="blog-details">
                                                        <span class="menu-item-text">Blog Details</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sub-menu_item nav-item-has-children child-item">
                                        <a class="sub-menu__item-link">
                                            <span class="menu-item-text">Faq</span>
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                        <div class="sub-menu child-sub" id="submenu-8">
                                            <ul class="sub-menu_list">
                                                <li class="sub-menu_item">
                                                    <a href="faq">
                                                        <span class="menu-item-text">FAQ 1</span>
                                                    </a>
                                                </li>
                                                <li class="sub-menu_item">
                                                    <a href="faq-2">
                                                        <span class="menu-item-text">FAQ 2</span>
                                                    </a>
                                                </li>
                                                <li class="sub-menu_item">
                                                    <a href="faq-3">
                                                        <span class="menu-item-text">FAQ 3</span>
                                                    </a>
                                                </li>
                                                <li class="sub-menu_item">
                                                    <a href="faq-4">
                                                        <span class="menu-item-text">FAQ 4</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sub-menu_item nav-item-has-children child-item">
                                        <a class="sub-menu__item-link">
                                            <span class="menu-item-text">Utility</span>
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                        <div class="sub-menu child-sub" id="submenu-9">
                                            <ul class="sub-menu_list">
                                                <li class="sub-menu_item">
                                                    <a href="404">
                                                        <span class="menu-item-text">404</span>
                                                    </a>
                                                </li>
                                                <li class="sub-menu_item">
                                                    <a href="coming-soon">
                                                        <span class="menu-item-text">Coming Soon</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sub-menu_item nav-item-has-children child-item">
                                        <a class="sub-menu__item-link">
                                            <span class="menu-item-text">Account</span>
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                        <div class="sub-menu child-sub" id="submenu-10">
                                            <ul class="sub-menu_list">
                                                <li class="sub-menu_item">
                                                    <a href="sign-in">
                                                        <span class="menu-item-text">Sign In</span>
                                                    </a>
                                                </li>
                                                <li class="sub-menu_item">
                                                    <a href="sign-up">
                                                        <span class="menu-item-text">Sign Up</span>
                                                    </a>
                                                </li>
                                                <li class="sub-menu_item">
                                                    <a href="reset-password">
                                                        <span class="menu-item-text">Reset Password</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger">Contact<i class="fas fa-angle-down"></i>
                            </a>
                            <div class="sub-menu" id="submenu-13">
                                <ul class="sub-menu_list">
                                    <li class="sub-menu_item">
                                        <a href="contact">
                                            <span class="menu-item-text">Contact 1</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="contact-2">
                                            <span class="menu-item-text">Contact 2</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="contact-3">
                                            <span class="menu-item-text">Contact 3</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~
            mobile menu trigger
           ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="mobile-menu-trigger">
                <span></span>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~
              Mobile Menu Hamburger Ends
            ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="header-cta-btn-wrapper">
                <a href="#" class="btn-masco btn-masco--header btn-masco--header-secondary">
                    <span>Login</span>
                </a>
                <a href="#" class="btn-masco btn-masco--header btn-primary-l09 rounded-pill btn-fill--down">
                    <span>Sign up free</span></a>
            </div>
        </nav>
    </div>
</header>
