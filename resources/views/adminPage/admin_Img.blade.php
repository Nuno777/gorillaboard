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

    
    <p>
        <a class="btn" data-toggle="collapse" href="#surf_gal" role="button" aria-expanded="false" aria-controls="collapseExample" style="color: black;">
          Imagens Surf
        </a>
    </p>
      <div class="collapse" id="surf_gal">
        <div class="card card-body">
            @foreach ($desportos_img as $desp)

            @if ($desp->desporto_id == 1)
            <img src="{{ asset('storage/galeria/'. $desp->image) }}" alt="brr" style="width: 200px;"/>
            @endif
            @endforeach
        </div>
      </div>

      <p>
        <a class="btn" data-toggle="collapse" href="#skate_gal" role="button" aria-expanded="false" aria-controls="collapseExample" style="color: black;">
          Imagens Skate
        </a>
    </p>
      <div class="collapse" id="skate_gal">
        <div class="card card-body">
            @foreach ($desportos_img as $desp)

            @if ($desp->desporto_id == 2)
            <img src="{{ asset('storage/galeria/'. $desp->image) }}" alt="brr" style="width: 200px;"/>
            @endif
            @endforeach
        </div>
      </div>

      <p>
        <a class="btn" data-toggle="collapse" href="#bodyboard_gal" role="button" aria-expanded="false" aria-controls="collapseExample" style="color: black;">
          Imagens Bodyboard
        </a>
    </p>
      <div class="collapse" id="bodyboard_gal">
        <div class="card card-body">
            @foreach ($desportos_img as $desp)

            @if ($desp->desporto_id == 3)
            <img src="{{ asset('storage/galeria/'. $desp->image) }}" alt="brr" style="width: 200px;"/>
            @endif
            @endforeach
        </div>
      </div>

      <p>
        <a class="btn" data-toggle="collapse" href="#dhskate_gal" role="button" aria-expanded="false" aria-controls="collapseExample" style="color: black;">
          Imagens Downhill Skate
        </a>
    </p>
      <div class="collapse" id="dhskate_gal">
        <div class="card card-body">
            @foreach ($desportos_img as $desp)

            @if ($desp->desporto_id == 4)
            <img src="{{ asset('storage/galeria/'. $desp->image) }}" alt="brr" style="width: 200px;"/>
            @endif
            @endforeach
        </div>
      </div>

      <p>
        <a class="btn" data-toggle="collapse" href="#paddle_gal" role="button" aria-expanded="false" aria-controls="collapseExample" style="color: black;">
          Imagens Paddle Surf
        </a>
    </p>
      <div class="collapse" id="paddle_gal">
        <div class="card card-body">
            @foreach ($desportos_img as $desp)

            @if ($desp->desporto_id == 5)
            <img src="{{ asset('storage/galeria/'. $desp->image) }}" alt="brr" style="width: 200px;"/>
            @endif
            @endforeach
        </div>
      </div>




</body>

@include('layouts.partials.dashboard.footer')