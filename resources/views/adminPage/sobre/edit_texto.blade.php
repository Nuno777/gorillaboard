@vite('public/css/adminCss/edit_texto_sobrestyle.css')

@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        @include('layouts.partials.dashboard.nav')


             <div class="row">
                <div class="col-sm-12">
                    <h1 class="display-3">Sobre Texto</h1>     
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                      {{ session()->get('success') }}  
                    </div>
                  @endif
                  <table class="table table-striped table_edit">
                    <thead>
                        <tr>
                          <td>Texto</td>
                        </tr>
                    </thead>
                    <tbody>
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
                        @foreach($sobre_textos as $sobre_text)

                        <tr>
                            <td>{{$sobre_text->texto}} </td>
                            <td>
                                
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-sobretext-{{ $sobre_text->id }}">
                                    Editar
                                  </button>
                    
                                  <div class="modal fade" id="modal-sobretext-{{ $sobre_text->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-sobretext-{{ $sobre_text->id }}-title" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-l" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4><label for="stock_name">Editar texto:*</label></h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{ route('admin.sobre_texto.update', $sobre_text->id) }}">
                                                @method('PUT') 
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="stock_name" id="stock_name" value="{{ $sobre_text->texto }}" />
                                                </div>
                                    
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                <div>
                </div>

        </section>

        @include('layouts.partials.dashboard.footer')