<header>
    <nav>
        <ul id="navbar">
            <li><a id="profile_Icon_Box" href="{{ route('login') }}"><img id="profile_Icon"
                        src="{{ asset('img/profile_icon.png') }}" alt=""></a></li>
            <li id="li_Logo"><a href="{{ route('index') }}"><img id="nav_Logo"
                        src="{{ asset('img/gorilla_horizontal.png') }}" alt=""></a></li>
            <div class="nav_option">
                <li><a id="phone_Group" href="{{ route('contactos') }}"> <img id="phone_Icon"src="{{ asset('img/phone_icon.png') }}" alt="phone">CONTACTOS</a></li>
                <li><a href="{{ route('faqs') }}">FAQS</a></li>
                <li><a href="#news">HORÁRIOS</a></li>
                <li><a href="{{ route('aula') }}">AULAS</a></li>
                <li><a href="{{ route('sobre') }}">SOBRE</a></li>
                <li>
                    <div class="dropdown">
                        <a class="btn btn-secondary {{-- dropdown-toggle --}} desp_btn_nav" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Desportos
                        </a>
                    
                        <ul class="dropdown-menu drop_desportos" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">SURF</a></li>
                        <li><a class="dropdown-item" href="#">SKATE</a></li>
                        <li><a class="dropdown-item" href="#">BODYBOARD</a></li>
                        <li><a class="dropdown-item" href="#">PADDLE SURF</a></li>
                        <li><a class="dropdown-item" href="#">DOWNHILL SKATE</a></li>
                        </ul>
                    </div>
                </li>
            </div>
        </ul>
    </nav>
</header>
