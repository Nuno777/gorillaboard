@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">


    @include('layouts.partials.dashboard.nav')
    <div class="wrapper">
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <a style="font-size:25px;" href="{{ route('admin.sobre.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
                        <h3>Criar Sobre</h3>

                        <form action="{{ route('admin.sobre.store') }}" method="post" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label for="name">Texto</label>
                                        <input type="text" class="form-control" name="texto" id="texto">
                                        <label for="name">Imagem</label>
                                        <input type="file" class="form-control" name="img" id="img" required>
                                        <label for="name">Featured</label>
                                        <input type="text" class="form-control" name="featured" id="featured"required>
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