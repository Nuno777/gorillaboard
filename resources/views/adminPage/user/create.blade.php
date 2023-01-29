@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">


    @include('layouts.partials.dashboard.nav')
    <div class="wrapper">
        <section class="content">
            <div class="container-fluid">
                @if ($errors->any())
                @include ('layouts.partials.errors')
            @endif
                <div class="row">
                    <div class="col-md-12">
                        <a style="font-size:25px;" href="{{ route('admin.user.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
                        <h3>Criar users</h3>

                        <form action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <input type="text" class="form-control" name="name" id="name" required>
                                        <label for="name">E-Mail</label>
                                        <input type="text" class="form-control" name="email" id="email" required>
                                        <label for="name">Imagem</label>
                                        <input type="file" class="form-control" name="img" id="img" required>
                                        <label for="name">Admin</label>
                                        <input type="text" class="form-control" name="admin" id="admin"required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Inserir</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

    </div>
    </section>

    @include('layouts.partials.dashboard.footer')
