<header class="theme-2">
    <div class="header__upper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header__upper--left">

                        @if ( Auth::user()->isRider() )

                            <div class="d-none d-lg-block logo">
                                <a href="{{ route('rider.dashboard') }}">
                                    <img src="{{ asset('assets/assets/images/logo-main.webp') }}" alt="Site Logo">
                                </a>
                            </div>
                            <div class="d-block d-lg-none logo w-80px">
                                <a href="{{ route('rider.dashboard') }}">
                                    <img src="{{ asset('assets/assets/images/logo-main.webp') }}" alt="Site Logo">
                                </a>
                            </div>

                        @elseif ( Auth::user()->isDriver() )

                            <div class="d-none d-lg-block logo">
                                <a href="{{ route('driver.dashboard') }}">
                                    <img src="{{ asset('assets/assets/images/logo-main.webp') }}" alt="Site Logo">
                                </a>
                            </div>
                            <div class="d-block d-lg-none logo w-80px">
                                <a href="{{ route('driver.dashboard') }}">
                                    <img src="{{ asset('assets/assets/images/logo-main.webp') }}" alt="Site Logo">
                                </a>
                            </div>

                        @elseif ( Auth::user()->isAdmin() )

                            <div class="d-none d-lg-block logo">
                                <a href="{{ route('admin.dashboard') }}">
                                    <img src="{{ asset('assets/assets/images/logo-main.webp') }}" alt="Site Logo">
                                </a>
                            </div>
                            <div class="d-block d-lg-none logo w-80px">
                                <a href="{{ route('admin.dashboard') }}">
                                    <img src="{{ asset('assets/assets/images/logo-main.webp') }}" alt="Site Logo">
                                </a>
                            </div>

                        @endif

                        <button type="button" class="nav-toggle-btn a-nav-toggle ms-auto d-block d-lg-none">
                            <span class="nav-toggle nav-toggle-sm">
                                <span class="stick stick-1"></span>
                                <span class="stick stick-2"></span>
                                <span class="stick stick-3"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-6" width="100%" style="align-items: end; align-content: end;">
                    <div class="header__upper--right">
                        <nav class="navigation">
                            <ul>
                                <li class="m-0">
                                    <a href="{{ route('driver.dashboard') }}" aria-expanded="false">
                                        Dashboard       
                                    </a>
                                </li>
                                <!-- <li class="m-0">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h6 class="m-0">Analytics <i class="fas fa-angle-down"></i></h6>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="partner-profile.html">Partner Profile</a>
                                        </div>
                                    </div>
                                </li> -->
                              
                                <li class="m-0"><a href="#">Help</a></li>
                                <li class="m-0"><a href="#"><i class="far fa-envelope"></i></a></li>
                            </ul>
                        </nav>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="media">
                                    @php
                                        $file = Auth()->user()->profile_photo_path;
                                        $photo_path  = asset('storage/' . $file);
                                    @endphp

                                    @if ($file)
                                        <img class="me-3 profile-picture-header" src="{{ asset($photo_path) }}" alt="partner-img" alt="ProfilePicture">
                                    @else
                                        <img class="me-3 profile-picture-header" src="{{ asset('assets/assets/images/avatar.png') }}" alt="ProfilePicture">
                                    @endif

                                    <div class="media-body">
                                        <h6 class="m-0">{{ Auth()->user()->firstname." ".Auth()->user()->lastname }}
                                            <i class="fas fa-angle-down"></i>
                                        </h6>
                                        <p class="m-0">Ghana</p>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('driver.edit-profile.edit') }}">Profile</a>
                                <a class="dropdown-item" href="{{ route('driver.change-password.edit') }}">Change Password</a>
                                <a class="dropdown-item" href="{{ route('driver.register-vehicle.index') }}">Register Vehicle</a>
                                <a class="dropdown-item" href="#">Earnings</a>

                                <form method="POST" action="{{ route('logout') }}" style="text-decoration: none;">
                                    @csrf

                                    <button class="dropdown-item">Logout Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>