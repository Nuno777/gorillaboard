@include('layouts.partials.dashboard.head')

@vite('public/css/adminCss/adminImages.css')

<body class="navbar-fixed sidebar-fixed" id="body" style="padding: 30px;">


    @include('layouts.partials.dashboard.nav')
    
    <form action="{{ route('admin.Img_Dashboard.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <p>Desporto:</p>

        @foreach ($desportos as $desporto)

        <input type="radio" id="{{ $desporto->modalidades }}_rad" class="radio_options" name="desp_img" value="{{ $desporto->id }}" required/>
        <label for="{{ $desporto->modalidades }}_rad">{{ $desporto->modalidades }}</label>
        @endforeach
        <input type="text" class="form-control-file" name="image_name" id="inputImage" aria-describedby="fileHelp" />
        <input type="file" class="form-control-file" name="image" id="inputImage" aria-describedby="fileHelp" required/>
        <small id="fileHelp" class="form-text text-muted">
            Please upload a valid file image. Size of image should not be more than 2MB
        </small>
        <button type="submit">Submeter</button>
    </form>

    
    <form action="/search" method="POST" role="search">
      @csrf
      <div class="input-group">
          <input type="text" class="form-control" name="q"
              placeholder="Search users"> <span class="input-group-btn">
              <button type="submit" class="btn btn-default">
                  <span class="glyphicon glyphicon-search"></span>
              </button>
          </span>
      </div>
    </form>

    @foreach($desportos as $desporto)
    
      <p>
        <a class="btn" data-toggle="collapse" href="#collapse-{{ $desporto->id }}" role="button" aria-expanded="false" aria-controls="collapseExample" style="color: black;">
          Imagens - {{ $desporto->modalidades }}
        </a>
      </p>
  
      <div class="collapse gal_images" id="collapse-{{ $desporto->id }}">

        <div class="card card-body">
            @foreach ($desporto->images as $image)
              <button type="button" class="btn" data-toggle="modal" data-target="#modal-desporto-{{ $image->id }}">
                <img src="{{ asset('storage/galeria/'. $image->image) }}" alt="brr" style="width: 200px;"/>
              </button>

              <div class="modal fade" id="modal-desporto-{{ $image->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-desporto-{{ $image->id }}-title" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-l" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modal-desporto-{{ $image->id }}-title">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="{{ asset('storage/galeria/'. $image->image) }}" alt="brr" width="100%" />
                    </div>
                    <div class="modal-footer">
                      <a href="rotaparaeditar/id" class="btn btn-secondary">Editar</a>
                      <form method="POST" action="{{ route('admin.Img_Dashboard.destroy', $image) }}">
                        @csrf
                        @method('DELETE')
                          <button type="submit" class="btn btn-secondary">Eliminar</button>
                      </form>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
      </div>
    @endforeach

</body>

@include('layouts.partials.dashboard.footer')