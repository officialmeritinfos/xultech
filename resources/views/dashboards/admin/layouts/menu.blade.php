<!-- Start Sidebar Area -->
<div class="side-menu-area">
    <div class="side-menu-logo bg-linear">
        <a href="{{redirectToDashboard($user)}}" class="navbar-brand d-flex align-items-center">
            <img src="{{asset($web->logo_path)}}" alt="image">
        </a>

        <div class="burger-menu d-none d-lg-block">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>

        <div class="responsive-burger-menu d-block d-lg-none">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>
    </div>

    <nav class="sidebar-nav" data-simplebar>
        <ul id="sidebar-menu" class="sidebar-menu">
            <li class="nav-item-title">MENU</li>
            <li>
                <a href="{{redirectToDashboard($user)}}" class="box-style">
                    <i class="ri-dashboard-line"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item-title">APPS</li>

            <li>
                <a href="#" class="has-arrow box-style">
                    <i class="ri-newspaper-line"></i>
                    <span class="menu-title">Blog</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li>
                        <a href="{{route('admin.blog')}}">
                            <span class="menu-title">Posts</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.blog.new')}}">
                            <span class="menu-title">Add Post</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" class="has-arrow box-style">
                    <i class="ri-file-2-line"></i>
                    <span class="menu-title">Our Product</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li>
                        <a href="{{route('admin.our-products')}}">
                            <span class="menu-title">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.our-products.new')}}">
                            <span class="menu-title">Add Product</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" class="has-arrow box-style">
                    <i class="ri-account-pin-box-fill"></i>
                    <span class="menu-title">Careers</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li>
                        <a href="{{route('admin.job.index')}}">
                            <span class="menu-title">Jobs</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item-title">Ecommerce</li>

            <li>
                <a href="#" class="has-arrow box-style">
                    <i class="ri-code-box-line"></i>
                    <span class="menu-title">Scripts</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li>
                        <a href="profile">
                            <span class="menu-title">Profile</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" class="has-arrow box-style">
                    <i class="ri-pages-line"></i>
                    <span class="menu-title">Client Projects</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li>
                        <a href="contact">
                            <span class="meni-title">Contact</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item-title">Company</li>

            <li>
                <a href="#" class="has-arrow box-style">
                    <i class="ri-award-line"></i>
                    <span class="menu-title">Projects</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li>
                        <a href="inbox">
                            <span class="menu-title">Inbox</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" class="has-arrow box-style">
                    <i class="ri-building-3-line"></i>
                    <span class="menu-title">Subsidiary</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li>
                        <a href="apex">
                            <span class="menu-title">Apex</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" class="has-arrow box-style">
                    <i class="ri-calendar-2-line"></i>
                    <span class="menu-title">Schedules</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li>
                        <a href="alerts">
                            <span class="menu-title">Alerts</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" class="has-arrow box-style">
                    <i class="ri-user-shared-line"></i>
                    <span class="menu-title">Teams</span>
                </a>
                <ul class="sidemenu-nav-second-level">
                    <li>
                        <a href="form-layouts">
                            <span class="menu-title">Form Layouts</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" class="has-arrow box-style">
                    <i class="ri-file-add-line"></i>
                    <span class="menu-title">Bookings</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li>
                        <a href="alert-email">
                            <span class="menu-title">Alert Email</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>


        <div class="dark-bar">
            <a href="#" class="d-flex align-items-center">
                <span class="dark-title">Enable Dark Theme</span>
            </a>

            <div class="form-check form-switch">
                <input type="checkbox" class="checkbox" id="darkSwitch">
            </div>
        </div>
    </nav>
</div>
