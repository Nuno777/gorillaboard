<nav>
    <ul id="navbar">
        <li><a id="profile_Icon_Box" href="{{ route('login') }}"><img id="profile_Icon" src="{{ asset('img/profile_icon.png') }}"
                    alt=""></a></li>
        <li id="li_Logo"><a href="{{ route('index')}}"><img id="nav_Logo" src="{{ asset('img/gorilla_horizontal.png') }}"
                    alt=""></a></li>
        <div class="nav_option">
            <li><a id="phone_Group" href="{{ route('contactos') }}"><img id="phone_Icon" src="{{ asset('img/phone_icon.png') }}"
                        alt="">266123123</a></li>
            <li><a href="{{ route('contactos') }}">Contactos</a></li>
            <li><a href="{{ route('faqs') }}">FAQS</a></li>
            <li><a href="#news">Horarios</a></li>
            <li><a href="{{ route('aula') }}">Aulas</a></li>
            <li><a href="#about">Desportos</a></li>
            <li><a href="{{ route('sobre') }}">Sobre</a></li>
        </div>
    </ul>
</nav>