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
                                        <p for="">Saudação</p>
                                        <label for="">Sr</label>
                                        <input type="radio" name="salutation" value="Sr">
                                        <label for="">Sra</label>
                                        <input type="radio" name="salutation" value="Sra">
                                        <label for="">Nenhum</label>
                                        <input type="radio" name="salutation" value="">

                                        <label for="name">Nome</label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}" required>
                                        <label for="email">E-Mail</label>
                                        <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}" required>
                                        <label for="number_phone">Número Telemovel</label>
                                        <input type="tel"  pattern="[0-9]{3}[0-9]{3}[0-9]{3}" class="form-control" placeholder="number_phone" name="number_phone" value="{{ old('number_phone', $user->number_phone)}}">
                                        <label for="img">Imagem</label>
                                        <input type="file" class="form-control" name="img" id="img"  value="{{  $user->img   }}"  >
                                        <label for="admin">Admin</label>
                                        <input type="text" class="form-control" name="admin" id="admin" value="{{ $user->admin }}" required>
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
