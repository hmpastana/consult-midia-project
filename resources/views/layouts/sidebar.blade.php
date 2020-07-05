<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
    <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('dashboard', [ Request::Segment(1)])}}">
            <img src="{{ asset('dashkit/src/assets/img/logo.svg')}}" class="navbar-brand-img mx-auto" alt="...">
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

                <!-- Toggle -->
                <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <img src="{{ asset('dashkit/src/assets/img/avatars/profiles/avatar-1.jpg')}}" class="avatar-img rounded-circle" alt="...">
                    </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                    <a href="dashkit/src/profile-posts.html" class="dropdown-item">Profile</a>
                    <a href="dashkit/src/account-general.html" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a href="dashkit/src/sign-in.html" class="dropdown-item">Logout</a>
                </div>

            </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
            <div class="input-group input-group-rounded input-group-merge">
                <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="fe fe-search"></span>
                    </div>
                </div>
            </div>
        </form>
          <!-- Navigation -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'dashboard') active @endif" href="{{route('dashboard', [ Request::Segment(1)])}}"><i class="fe fe-home"></i> @lang('titles.dashboard')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#sidebarAuth" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth"><i class="fe fe-user"></i> @lang('titles.profile')</a>
                <div class="collapse" id="sidebarAuth">
                    <ul class="nav nav-sm flex-column">
                        <li>
                          <a href="{{ route('profile_posts', [ Request::Segment(1)])}}" class="nav-link @if(Route::currentRouteName() == 'profile_posts') active @endif">
                            @lang('titles.posts')
                          </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item d-md-none">
              <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                <span class="fe fe-bell"></span> @lang('titles.notifications')
              </a>
            </li>
        </ul>

        <!-- Divider -->
        <hr class="navbar-divider my-3">

        <!-- Push content down -->
        <div class="mt-auto"></div>


        <!-- User (md) -->
        <div class="navbar-user d-none d-md-flex" id="sidebarUser">

            <!-- Icon -->
            <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
                <span class="icon">
                    <i class="fe fe-bell"></i>
                </span>
            </a>

            <!-- Dropup -->
            <div class="dropup">

                  <!-- Toggle -->
                <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <img src="{{ asset('dashkit/src/assets/img/avatars/profiles/me.jpg')}}" class="avatar-img rounded-circle" alt="...">
                    </div>
                </a>
                  <!-- Menu -->
                <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                    <a href="{{ route('profile_posts', [ Request::Segment(1)])}}" class="dropdown-item">@lang('titles.profile')</a>
                    <hr class="dropdown-divider">
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            @lang('titles.logout')
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </div>

            </div>

            <!-- Icon -->
            <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
                <span class="icon">
                    <i class="fe fe-search"></i>
                </span>
            </a>
        </div>
        </div> <!-- / .navbar-collapse -->
    </div>
</nav>
