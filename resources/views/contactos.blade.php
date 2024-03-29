    @extends('layouts.master')

    @section('custom_css', asset('css/contactos.css'))

    @section('title', 'GorillaBoards')
    @section('main')

        <section class="container">

            <div class="text-center">
                <div class="title">
                    <h1>Contactos</h1>
                </div>
            </div>

            <div class="row">

                <div class="map">
                    <iframe class="map-size"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49339.97844983393!2d-9.437329400000001!3d39.384565599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1f45c49805a145%3A0x26caf596a0956bf3!2sPeniche!5e0!3m2!1spt-PT!2spt!4v1668611396621!5m2!1spt-PT!2spt"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>


            </div>

            <div class="container-fluid">
                @if ($errors->any())
                    @include ('layouts.partials.errors')
                @endif

                @if (!empty(session('success')))
                    @include ('layouts.partials.success')
                @endif
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="text-center icons">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-phone mt-4 fa-3x"></i>
                                <p>+ 351 234 567 890</p>
                            </li>

                            <li><i class="fas fa-envelope mt-4 fa-3x"></i>
                                <p>gorillaboards@gmail.com</p>
                            </li>

                            <li><i class="fas fa-map-marker-alt mt-4 fa-3x"></i>
                                <p>Rua do Sol, Peniche</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="">
                        <form action="{{ route('contactos.store') }}" method="post">
                            @csrf
                            <div class="name">
                                <label for="name" class="name-padding">Nome</label><br>
                                
                                @if (Auth::check())
                                <input type="text" name="nome_Contactos" id="name" class="form-control"
                                placeholder="Insira o seu nome" value="{{ Auth::user()->name }}">
                                @else
                                <input type="text" name="nome_Contactos" id="name" class="form-control"
                                placeholder="Insira o seu nome">
                                @endif
                            </div>
                            @if ($errors->has('nome_Contactos'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nome_Contactos') }}</strong>
                                </span>
                            @endif

                            <div class="email">
                                <label for="email" class="email-padding">Email</label><br>

                                @if (Auth::check())
                                    <input type="email" name="email_Contactos" id="email" class="form-control"
                                        placeholder="Insira o seu mail" value="{{ Auth::user()->email }}">
                                @else
                                    <input type="email" name="email_Contactos" id="email" class="form-control"
                                        placeholder="Insira o seu mail">
                                @endif
                            </div>

                            <div class="message">
                                <label for="message" class="message-padding">Mensagem</label><br>
                                <textarea name="menssagem_Contactos" id="message" class="form-control" rows="3"
                                    placeholder="Insira a sua mensagem"></textarea>
                            </div>

                            <div>
                                <input type="submit" class="button" value="Submeter">
                            </div>

                        </form>
                    </div>
                </div>
            </div>


        </section>

    @endsection

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>





    <!-- <section class="container">

        <div class="row">

            <div class="col">
                <div class="text-start">
                    <div class="title">
                        <h1>Contactos</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="">
                <div class="">
                    <div class="map">
                        <iframe class="map-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49339.97844983393!2d-9.437329400000001!3d39.384565599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1f45c49805a145%3A0x26caf596a0956bf3!2sPeniche!5e0!3m2!1spt-PT!2spt!4v1668611396621!5m2!1spt-PT!2spt" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="">
                    <form action="" method="post">

                        <div class="name">
                            <label for="name" class="name-padding">Nome</label><br>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Insira o seu nome">
                        </div>

                        <div class="email">
                            <label for="email" class="email-padding">Email</label><br>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Insira o seu mail">
                        </div>

                        <div class="message">
                            <label for="message" class="message-padding">Menssagem</label><br>
                            <textarea name="message" id="message" class="form-control" rows="3" placeholder="Insira a sua menssagem"></textarea>
                        </div>

                        <div>
                            <input type="submit" class="button" value="Submeter">
                        </div>

                    </form>
                </div>
            </div>
        </div>


    </section> -->
