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
                                <img class="rounded-circle" src="images/user/user-md-01.jpg" alt="Avata Image">
                                <a class="h5 d-block mt-3 mb-2" href="#">Albrecht Straub</a>
                                <a class="d-block text-color" href="#">albercht@example.com</a>
                            </div>

                            <ul class="nav nav-profile-follow">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="h5 d-block">1503</span>
                                        <span class="text-color d-block">Friends</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="h5 d-block">2905</span>
                                        <span class="text-color d-block">Followers</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="h5 d-block">1200</span>
                                        <span class="text-color d-block">Following</span>
                                    </a>
                                </li>

                            </ul>

                            <div class="profile-button">
                                <a class="btn btn-primary btn-pill" href="user-planing-settings.html">Upgrade Plan</a>
                            </div>

                        </div>

                        <div class="card-footer card-profile-footer">
                            <ul class="nav nav-border-top justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="user-profile.html">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="user-activities.html">Activities</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="user-profile-settings.html">Settings</a>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xl-3">
                            <!-- Settings -->
                            <div class="card card-default">
                                <div class="card-header">
                                    <h2>Settings</h2>
                                </div>

                                <div class="card-body pt-0">

                                    <ul class="nav nav-settings">
                                        <li class="nav-item">
                                            <a class="nav-link" href="user-profile-settings.html">
                                                <i class="mdi mdi-account-outline mr-1"></i> Profile
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="user-account-settings.html">
                                                <i class="mdi mdi-settings-outline mr-1"></i> Account
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user-planing-settings.html">
                                                <i class="mdi mdi-currency-usd mr-1"></i> Planing
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user-billing.html">
                                                <i class="mdi mdi-set-top-box mr-1"></i> Billing
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user-notify-settings.html">
                                                <i class="mdi mdi-bell-outline mr-1"></i>
                                                Notifications
                                            </a>
                                        </li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                        <div class="col-xl-9">
                            <!-- Account Settings -->
                            <div class="card card-default">
                                <div class="card-header">
                                    <h2 class="mb-5">Account Settings</h2>

                                </div>

                                <div class="card-body">

                                    <form>
                                        <div class="row mb-2">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="firstName">First name</label>
                                                    <input type="text" class="form-control" id="firstName">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Last name</label>
                                                    <input type="text" class="form-control" id="lastName">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="userName">User name</label>
                                            <input type="text" class="form-control" id="userName">
                                            <span class="d-block mt-1">Accusamus nobis at omnis
                                                consequuntur culpa tempore saepe animi.</span>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="newPassword">New password</label>
                                            <input type="password" class="form-control" id="newPassword">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="conPassword">Confirm password</label>
                                            <input type="password" class="form-control" id="conPassword">
                                        </div>

                                        <div class="d-flex justify-content-end mt-6">
                                            <button type="submit"
                                                class="btn btn-primary mb-2
                                btn-pill">Update
                                                Profile</button>
                                        </div>

                                    </form>
                                </div>
                            </div>




                        </div>

                    </div>
                </div>

            </div>
        </section>

        @include('layouts.partials.dashboard.footer')
