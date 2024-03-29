<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="" />
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                    href="{{ route('admin.dashboard') }}">
                    <i data-feather="grid" class="nav-icon icon-xs me-2"></i> Dashboard
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Menu</div>
            </li>
            <!-- Nav item -->
            <li class="nav-item nav-collapsed">
                <a class="nav-link has-arrow collapsed" href="#!" data-bs-toggle="collapse"
                    data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                    <i data-feather="layers" class="nav-icon icon-xs me-2">
                    </i> Pages
                </a>
                <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#!">
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!">
                                Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!">
                                Billing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!">
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!">
                                404 Error
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
