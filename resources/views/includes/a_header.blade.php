<div class="preloader bg-orange">
    <div class="content">
        <img src="images/logo_anim.svg" alt="">
        <div class="nk-preloader-spinner"></div>
    </div>
</div>
<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="search-bar flex-grow-1">
            </div>
            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item mobile-search-icon">
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="row row-cols-3 g-3 p-3">
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:;">
                                <div class="msg-header">
                                    <p class="msg-header-title">Notifications</p>
                                    <p class="msg-header-clear ms-auto">Marks all as read</p>
                                </div>
                            </a>
                            <div class="header-notifications-list">
                            </div>
                            <a href="javascript:;">
                                <div class="text-center msg-footer">View All Notifications</div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:;">
                                <div class="msg-header">
                                    <p class="msg-header-title">Messages</p>
                                    <p class="msg-header-clear ms-auto">Marks all as read</p>
                                </div>
                            </a>
                            <div class="header-message-list">
                            </div>
                            <a href="javascript:;">
                                <div class="text-center msg-footer">View All Messages</div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div style="width: 50px; height: 50px; border-radius: 50px; display: flex; background-color:antiquewhite; border: 1px solid black; justify-content:center; align-items: center"
                        class="bg-primary-dim">
                        <span
                            style="text-align: center; font-weight:bolder; color:grey">{{ substr(auth()->user()->username,0,2) }}</span>
                    </div>
                    <div class="user-info ps-3">
                        <p class="user-name mb-0"> {{ auth()->user()->username }}</p>
                        <p class="designattion mb-0"> {{ auth()->user()->email }}</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('admin.profile.view') }}"><i
                                class="bx bx-user"></i><span>Profile</span></a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('admin.logout') }}"><i
                                class='bx bx-log-out-circle'></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

























{{-- <header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>
            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center">
                    
                </ul>
            </div>
            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset("assets/images/avatars/avatar-2.png") }}" class="user-img" alt="user avatar">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">Pauline Seitz</p>
                        <p class="designattion mb-0">Web Designer</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:;"><i
                                class="bx bx-user"></i><span>Profile</span></a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;"><i
                                class="bx bx-cog"></i><span>Settings</span></a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;"><i
                                class='bx bx-home-circle'></i><span>Dashboard</span></a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;"><i
                                class='bx bx-dollar-circle'></i><span>Earnings</span></a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;"><i
                                class='bx bx-download'></i><span>Downloads</span></a>
                    </li>
                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;"><i
                                class='bx bx-log-out-circle'></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header> --}}
