<nav class="navbar main-top-navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="responsive-burger-menu d-block d-lg-none">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>


        <ul class="navbar-nav ms-auto mb-lg-0">
            <li class="nav-item">
                <a href="#" class="nav-link ri-fullscreen-btn" id="fullscreen-button">
                    <i class="ri-fullscreen-line"></i>
                </a>
            </li>

            <li class="nav-item notification-box dropdown">
                <div class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="notification-btn">
                        <i class="ri-notification-2-line"></i>
                        <span class="badge">{{$user->limitedInactiveActivities(10)->count()}}</span>
                    </div>
                </div>

                <div class="dropdown-menu">
                    <div class="dropdown-header d-flex justify-content-between align-items-center bg-linear">
                        <span class="title d-inline-block">{{$user->limitedInactiveActivities(10)->count()}} New Notifications</span>
                        <a href="{{route('admin.markAllAsRead')}}" class="mark-all-btn d-inline-block">Mark all as read</a>
                    </div>

                    <div class="dropdown-body" data-simplebar>
                        @foreach($user->limitedInactiveActivities(10)->get() as $activity)
                            <a href="{{route('admin.markNotificationAsRead',['id'=>$activity->id])}}" class="dropdown-item d-flex align-items-center">
                                <div class="icon">
                                    <i class='bx bx-bell'></i>
                                </div>


                                <div class="content">
                                    <span class="d-block">{{$activity->action}}</span>
                                    <p class="sub-text mb-0">
                                        {{$activity->created_at->diffForHumans()}}
                                    </p>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    <div class="dropdown-footer">
                        <a href="{{route('admin.notifications')}}" class="dropdown-item">View All</a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown profile-nav-item">
                <a class="nav-link dropdown-toggle avatar" href="#" id="navbarDropdown-4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{$user->profile_photo_path??'https://ui-avatars.com/api/?rounded=true&background=random&name='.$user->name}}"
                         width="50" alt="Images">
                    <h3>{{$user->name}}</h3>
                    <span>{{ucfirst($user->role)}}</span>
                </a>

                <div class="dropdown-menu">
                    <div class="dropdown-header d-flex flex-column align-items-center">
                        <div class="figure mb-3">
                            <img src="{{$user->profile_photo_path??'https://ui-avatars.com/api/?rounded=true&background=random&name='.$user->name}}" class="rounded-circle" alt="image">
                        </div>

                        <div class="info text-center">
                            <span class="name">{{$user->name}}</span>
                            <span class="name" style="word-break: break-word;">
                                <span class="badge bg-primary cpy" data-clipboard-text="{{$user->uuid}}">
                                    {{$user->uuid}}
                                </span>
                            </span>
                            <p class="mb-3 email">
                                {{$user->email}}
                            </p>
                        </div>
                    </div>

                    <div class="dropdown-body">
                        <ul class="profile-nav p-0 pt-3">
                            <li class="nav-item">
                                <a href="profile" class="nav-link">
                                    <i class="ri-user-line"></i>
                                    <span>Profile</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="inbox" class="nav-link">
                                    <i class="ri-bell-line"></i>
                                    <span>My Activities</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="edit-profile" class="nav-link">
                                    <i class="ri-edit-box-line"></i>
                                    <span>Edit Profile</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="settings" class="nav-link">
                                    <i class="ri-settings-5-line"></i>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-footer">
                        <ul class="profile-nav">
                            <li class="nav-item">
                                <a href="{{route('logout')}}" class="nav-link">
                                    <i class="ri-login-circle-line"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</nav>
