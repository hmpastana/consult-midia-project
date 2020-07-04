<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
    <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="dashkit/src/index.html">
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
                <a class="nav-link" href="#sidebarDashboards" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarDashboards"><i class="fe fe-home"></i> Dashboards</a>

                <div class="collapse show" id="sidebarDashboards">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="dashkit/src/index.html" class="nav-link">Default</a>
                        </li>
                        <li class="nav-item">
                            <a href="dashkit/src/dashboard-project-management.html" class="nav-link">Project Management</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link @@if(page=='widgets.html'){active}" href="dashkit/src/widgets.html"><i class="fe fe-grid"></i> Widgets</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#sidebarAuth" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth"><i class="fe fe-user"></i> Authentication</a>
                <div class="collapse" id="sidebarAuth">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="#sidebarSignIn" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn">Sign in</a>
                            <div class="collapse" id="sidebarSignIn">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="dashkit/src/sign-in-cover.html" class="nav-link">Cover</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashkit/src/sign-in-illustration.html" class="nav-link">Ilustration</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashkit/src/sign-in.html" class="nav-link">
                                            Basic
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#sidebarSignUp" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp">Sign up</a>
                            <div class="collapse" id="sidebarSignUp">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="dashkit/src/sign-up-cover.html" class="nav-link">
                                            Cover
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashkit/src/sign-up-illustration.html" class="nav-link">
                                            Illustration
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashkit/src/sign-up.html" class="nav-link">
                                            Basic
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#sidebarPassword" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPassword">
                                Password reset
                            </a>
                            <div class="collapse" id="sidebarPassword">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="dashkit/src/password-reset-cover.html" class="nav-link">
                                            Cover
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashkit/src/password-reset-illustration.html" class="nav-link">
                                            Illustration
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashkit/src/password-reset.html" class="nav-link">
                                            Basic
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#sidebarError" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarError">
                                Error
                            </a>
                            <div class="collapse" id="sidebarError">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="dashkit/src/error-illustration.html" class="nav-link">
                                            Illustration
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashkit/src/error.html" class="nav-link">
                                            Basic
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item d-md-none">
              <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                <span class="fe fe-bell"></span> Notifications
              </a>
            </li>
        </ul>

        <!-- Divider -->
        <hr class="navbar-divider my-3">

        <!-- Heading -->
        <h6 class="navbar-heading">
        Documentation
        </h6>

          <!-- Navigation -->
        <ul class="navbar-nav mb-md-4">
            <li class="nav-item">
                <a class="nav-link" href="#sidebarBasics" data-toggle="collapse" role="button" aria-expanded="@@if(category=='basics'){true}@@if( category!=='basics'){false}" aria-controls="sidebarBasics">
                    <i class="fe fe-clipboard"></i> Basics
                </a>
                <div class="collapse @@if(category=='basics'){show}" id="sidebarBasics">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item @@if(page=='getting-started.html'){active}">
                        <a href="dashkit/src/docs/getting-started.html" class="nav-link">
                            Getting Started
                        </a>
                    </li>
                    <li class="nav-item @@if(page=='design-file.html'){active}">
                        <a href="dashkit/src/docs/design-file.html" class="nav-link">
                            Design File
                        </a>
                    </li>
                </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#sidebarComponents" data-toggle="collapse" role="button" aria-expanded="@@if(category=='components'){true}@@if( category!=='components'){false}" aria-controls="sidebarComponents">
                    <i class="fe fe-book-open"></i> Components
                </a>
                <div class="collapse @@if(page=='components.html'){show}" id="sidebarComponents">
                    <ul class="nav nav-sm flex-column">
                        <li>
                            <a href="dashkit/src/docs/components.html#tooltips" class="nav-link">
                                Tooltips
                            </a>
                        </li>
                        <li>
                            <a href="dashkit/src/docs/components.html#typography" class="nav-link">
                                Typography
                            </a>
                        </li>
                        <li>
                            <a href="dashkit/src/docs/components.html#utilities" class="nav-link">
                                Utilities
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link @@if(page=='changelog.html'){active}" href="dashkit/src/docs/changelog.html">
                <i class="fe fe-git-branch"></i> Changelog <span class="badge badge-primary ml-auto">v1.6.0</span>
                </a>
            </li>
        </ul>

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
                    <img src="{{ asset('dashkit/src/assets/img/avatars/profiles/avatar-1.jpg')}}" class="avatar-img rounded-circle" alt="...">
                </div>
            </a>
              <!-- Menu -->
            <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                <a href="dashkit/src/profile-posts.html" class="dropdown-item">Profile</a>
                <a href="dashkit/src/account-general.html" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Logout
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
