@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        @include('layouts.partials.dashboard.nav')

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-header" style="background-color: #F3F8FB">
                            <div class="card-body">
                                <h4 class="title">Lista das Inscrições</h4>
                            </div>

                            <form action="{{ route('presenca.update', $userDesporto) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlPassword">Password</label>
                                    <input type="password" class="form-control" id="exampleFormControlPassword"
                                        placeholder="Password">
                                </div>

                                <div class="form-footer mt-6">
                                    <button type="submit" class="btn btn-primary btn-pill">Marcar Presença</button>
                                    <button type="submit" class="btn btn-light btn-pill" >Cancel</button>
                                </div>
                            </form>

                            <div class="row">
                                <div class="col-md-12">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>

    @include('layouts.partials.dashboard.footer')
