@include('layouts.partials.dashboard.head')

@vite('public/css/adminCss/adminImages.css')

<body class="navbar-fixed sidebar-fixed" id="body" style="padding: 30px;">


    @include('layouts.partials.dashboard.nav')

    <h1>Imagens</h1>
  
    <form action="{{route('admin.Img_Dashboard.index')}}" method="GET" role="search" id="searchbar_imgs">
      <div class="input-group">
          <input type="text" class="form-control" name="q"
              placeholder="Search users"> <span class="input-group-btn">
              <button type="submit" class="btn btn-primary searchbtn" style="border-radius: 0">
                GO
              </button>
          </span>
      </div>
    </form>

  <div class="galerias_imgs_desportos">
    @foreach($desportos as $desporto)
    
      <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapse-{{ $desporto->id }}" role="button" aria-expanded="false" aria-controls="collapseExample" style="color: black;">
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
                      <h5 class="modal-title" id="modal-desporto-{{ $image->id }}-title">{{ $image->image }}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="{{ asset('storage/galeria/'. $image->image) }}" alt="brr" width="100%" />
                    </div>
                    <div class="modal-footer">
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
  </div>
    <form action="{{ route('admin.Img_Dashboard.store') }}" method="post" enctype="multipart/form-data" class="add_img_desp">
      @csrf
      <h4>Desporto:</h4>
      <div class="radio_options_desp">
        @foreach ($desportos as $desporto)
        <div class="rad_sing_option">
        <input type="radio" id="{{ $desporto->modalidades }}_rad" class="radio_options" name="desp_img" value="{{ $desporto->id }}" required/>
        <label for="{{ $desporto->modalidades }}_rad">{{ $desporto->modalidades }}</label>
        </div>
        @endforeach
      </div>
      <input type="text" class="form-control-file" name="image_name" id="inputImage" aria-describedby="fileHelp" />
      <input type="file" class="form-control-file" name="image" id="inputImage" aria-describedby="fileHelp" required/>
      <small id="fileHelp" class="form-text text-muted">
          Please upload a valid file image. Size of image should not be more than 2MB
      </small>
      <button type="submit" class="btn-primary desp_submit">Submeter</button>
  </form>

</body>

@include('layouts.partials.dashboard.footer')