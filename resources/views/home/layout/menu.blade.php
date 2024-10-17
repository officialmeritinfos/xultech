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
                        <li class="nav-item">
                            <a href="{{route('landingPage')}}" class="nav-link-item drop-trigger">Home</a>
                        </li>
                        <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger">Company<i class="fas fa-angle-down"></i></a>
                            <div class="sub-menu" id="submenu-1">
                                <ul class="sub-menu_list">
                                    <li class="sub-menu_item">
                                        <a href="{{route('company.aboutUs')}}">
                                            <span class="menu-item-text">About Us</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('company.ourTeam')}}">
                                            <span class="menu-item-text">Our Team</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('company.career')}}">
                                            <span class="menu-item-text">Careers</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('company.contact')}}">
                                            <span class="menu-item-text">Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger">Solutions<i class="fas fa-angle-down"></i>
                            </a>
                            <div class="sub-menu" id="submenu-3">
                                <ul class="sub-menu_list">
                                    <li class="sub-menu_item">
                                        <a href="{{route('solutions.uiDesign')}}">
                                            <span class="menu-item-text">UI/UX Design</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('solutions.webDevelopment')}}">
                                            <span class="menu-item-text">Web Development</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('solutions.mobileDevelopment')}}">
                                            <span class="menu-item-text">Mobile App Development</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('solutions.customSoftware')}}">
                                            <span class="menu-item-text">Custom Software Development</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('solutions.ecommerceSolutions')}}">
                                            <span class="menu-item-text">E-commerce Solutions</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('solutions.crmSolutions')}}">
                                            <span class="menu-item-text">CRM Solutions</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('solutions.consultingSolutions')}}">
                                            <span class="menu-item-text">Consulting Solutions</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('solutions.businessManagementSolutions')}}">
                                            <span class="menu-item-text">Business Management Systems</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('solutions.inventory-systems')}}">
                                            <span class="menu-item-text">Inventory & Sales System</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('solutions.schoolSolution')}}">
                                            <span class="menu-item-text">School Solutions</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('solutions.bookingSolutions')}}">
                                            <span class="menu-item-text">Booking Solutions</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger">Industries<i class="fas fa-angle-down"></i>
                            </a>
                            <div class="sub-menu" id="submenu-13">
                                <ul class="sub-menu_list">
                                    <li class="sub-menu_item">
                                        <a href="{{route('industry.healthCare')}}">
                                            <span class="menu-item-text">Healthcare</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('industry.finance')}}">
                                            <span class="menu-item-text">Finance</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('industry.retail')}}">
                                            <span class="menu-item-text">Retail</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('industry.education')}}">
                                            <span class="menu-item-text">Education</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('industry.realEstate')}}">
                                            <span class="menu-item-text">Real Estate</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('industry.logistics')}}">
                                            <span class="menu-item-text">Logistics</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('industry.manufacturing')}}">
                                            <span class="menu-item-text">Manufacturing</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('industry.hospitality')}}">
                                            <span class="menu-item-text">Hospitality</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-item-has-children">
                            <a href="{{route('product.index')}}" class="nav-link-item drop-trigger">Products<i class="fas fa-angle-down"></i>
                            </a>
                            <div class="sub-menu" id="submenu-13">
                                <ul class="sub-menu_list">
                                    @foreach(ourProducts() as $product)
                                        <li class="sub-menu_item">
                                            <a href="{{route('product.detail',['slug'=>convertToSlug($product->name),'id'=>$product->id])}}">
                                                <span class="menu-item-text">{{$product->name}}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger">Resources<i class="fas fa-angle-down"></i>
                            </a>
                            <div class="sub-menu" id="submenu-13">
                                <ul class="sub-menu_list">
                                    <li class="sub-menu_item">
                                        <a href="{{route('resources.blogs')}}">
                                            <span class="menu-item-text">Blogs</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('resources.privacyPolicy')}}">
                                            <span class="menu-item-text">Privacy Policy</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('resources.termsOfService')}}">
                                            <span class="menu-item-text">Terms of Service</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu_item">
                                        <a href="{{route('resources.work-process')}}">
                                            <span class="menu-item-text">Our Work Process</span>
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
                <a href="{{route('bookUsPage')}}" class="btn-masco btn-masco--header btn-primary-l09 rounded-pill btn-fill--down">
                    <span>Get Started</span></a>
            </div>
        </nav>
    </div>
</header>
