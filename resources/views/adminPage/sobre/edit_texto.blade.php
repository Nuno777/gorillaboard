@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        @include('layouts.partials.dashboard.nav')


             <div class="row">
                <div class="col-sm-12">
                    <h1 class="display-3">Stocks</h1>     
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                      {{ session()->get('success') }}  
                    </div>
                  @endif
                  <table class="table table-striped">
                    <thead>
                        <tr>
                          <td>ID</td>
                          <td>Stock Name</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sobre_textos as $sobre_text)
                        <tr>
                            <td>{{$sobre_text->id}}</td>
                            <td>{{$sobre_text->texto}} </td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                <div>
                </div>

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Editing Stock</h1>
 
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        @foreach ($sobre_textos as $texto)
        
        <form method="post" action="{{ route('admin.sobre_texto.update', $texto->id) }}">
            @method('PUT') 
            @csrf
            <div class="form-group">
 
                <label for="stock_name">Stock Name:*</label>
                <input type="text" class="form-control" name="stock_name" value="{{ $texto->texto }}" />
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        @endforeach
    </div>
</div> 
        </section>

        @include('layouts.partials.dashboard.footer')