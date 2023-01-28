@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        @include('layouts.partials.dashboard.nav')

        <section class="content">
            <div class="content-wrapper">
                <div class="content">
                    <!-- Card Profile -->
                    <div class="card card-default card-profile">

                        <div class="card-header-bg" style="background-image:url(assets/img/user/user-bg-01.jpg)"></div>
                        <div class="card-body card-profile-body">

                            <div class="profile-avata">
                                @if (Auth::check())
                                    <img src="{{ asset('img/' . Auth::user()->img) }}" class="rounded-circle"
                                        alt="User Image" />
                                @else
                                    <a href="{{ route('login') }}">
                                        <img src="{{ asset('img/profile_icon.png') }}" alt="">
                                    </a>
                                @endauth
                                <span class="h5 d-block mt-3 mb-2">{{ Auth::user()->name }}</span>
                                <span class="d-block">{{ Auth::user()->email }}</span>
                                <br>
                        </div>
                    </div>

                    <div class="card-footer card-profile-footer">
                        <ul class="nav nav-border-top justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Profile</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profileAdmin.edit') }}">Settings</a>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-default">
                            <div class="d-flex p-5">
                                <div class="icon-md bg-secondary rounded-circle mr-3">
                                    <i class="mdi mdi-account-plus-outline"></i>
                                </div>
                                <div class="text-left">
                                    <span class="h2 d-block">890</span>
                                    <p>New Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-default">
                            <div class="d-flex p-5">
                                <div class="icon-md bg-success rounded-circle mr-3">
                                    <i class="mdi mdi-table-edit"></i>
                                </div>
                                <div class="text-left">
                                    <span class="h2 d-block">350</span>
                                    <p>Order Placed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-default">
                            <div class="d-flex p-5">
                                <div class="icon-md bg-primary rounded-circle mr-3">
                                    <i class="mdi mdi-content-save-edit-outline"></i>
                                </div>
                                <div class="text-left">
                                    <span class="h2 d-block">1360</span>
                                    <p>Total Sales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-default">
                            <div class="d-flex p-5">
                                <div class="icon-md bg-info rounded-circle mr-3">
                                    <i class="mdi mdi-bell"></i>
                                </div>
                                <div class="text-left">
                                    <span class="h2 d-block">$8930</span>
                                    <p>Monthly Revenue</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    @include('layouts.partials.dashboard.footer')
