@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
@stop


<footer class="footer">
    <div class="footer__addr">
        <h1 class="footer__logo"><img src="{{ asset('img/gori_horizontal_branco.png') }}" alt="logo" width="130" />
        </h1>

        <h2>Contacto</h2>

        <address>
            Leiria, Portugal. Escola Superior de Tecnologia e Gestao<br>

            <a class="footer__btn" href="mailto:gorillaboards@gmail.com">Contacte-nos</a>
        </address>
    </div>

    <ul class="footer__nav">
        <li class="nav__item">
            <h2 class="nav__title">Doação</h2>

            <ul class="nav__ul">
                <li>
                    <a href="{{ route('index','#savetgor') }}">Gorilla Care</a>
                </li>
            </ul>
        </li>

        <li class="nav__item nav__item--extra">
            <h2 class="nav__title">Aulas</h2>

            <ul class="nav__ul nav__ul--extra">

                @foreach ($desportos as $desporto)
                <li>
                    <a href="{{ route('aula', $desporto->id) }}">{{ $desporto->modalidades }}</a>
                </li>
            @endforeach

            </ul>
        </li>

        <li class="nav__item">
            <h2 class="nav__title">Sobre</h2>

            <ul class="nav__ul">
                <li>
                    <a href="{{ route('sobre') }}">Sobre nós</a>
                </li>

                <li>
                    <a href="{{ route('contactos') }}">Contactos</a>
                </li>

                <li>
                    <a href="{{ route('faqs') }}">FAQs</a>
                </li>
            </ul>
        </li>
    </ul>

    <div class="legal">
        <p>&copy; 2022 GorillaBoards. Todos os direitos reservados.</p>


    </div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="@yield('custom_js')"></script>
