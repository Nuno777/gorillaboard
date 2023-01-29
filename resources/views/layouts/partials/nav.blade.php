@section('custom_css')
    '{{ asset('css/homepage_Style.css') }}'
@endsection

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid navedit">
        <a href="{{ route('index') }}"><img id="nav_Logo" src="{{ asset('img/gorilla_horizontal.png') }}"
                alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse nav_option" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown dropbtn_nav">
                        <a class="btn1 btn-secondary {{-- dropdown-toggle --}} desp_btn_nav" href="#" role="button"
                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            DESPORTOS
                        </a>

                        <ul class="dropdown-menu drop_desportos" aria-labelledby="dropdownMenuLink">
                            @foreach ($desportos as $desporto)
                                <li><a class="dropdown-item"
                                        href="{{ route('index', $desporto->id) }}">{{ $desporto->modalidades }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('sobre') }}">SOBRE</a>
                </li>
                <li>

                    <div class="dropdown dropbtn_nav">
                        <a class="btn1 btn-secondary {{-- dropdown-toggle --}} desp_btn_nav" href="#" role="button"
                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            AULAS
                        </a>
                        <ul class="dropdown-menu drop_desportos" aria-labelledby="dropdownMenuLink">
                            @foreach ($desportos as $aulaDesporto)
                                <li><a class="dropdown-item"
                                        href="{{ route('aula', $aulaDesporto->id) }}">{{ $aulaDesporto->modalidades }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li><a href="{{ route('faqs') }}">FAQS</a></li>
                <li>
                    <a id="phone_Group" href="{{ route('contactos') }}"> <img
                            id="phone_Icon"src="{{ asset('img/phone_icon.png') }}" alt="phone">CONTACTOS</a>
                </li>
                <li>
                    <div class="dropdown dropbtn_nav">

                        @if (Auth::check())
                            <a id="profile_Icon_Box" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img id="profile_Icon" src="{{ asset('storage/' . Auth::user()->img) }}" alt=""
                                    style="border-radius: 100%;">
                            </a>
                        @else
                            <a id="profile_Icon_Box" href="{{ route('login') }}">
                                <img id="profile_Icon"src="{{ asset('img/profile_icon.png') }}" alt="">
                            </a>
                        @endauth

                        <ul class="dropdown-menu drop_perfil bugfix_boot" aria-labelledby="dropdownMenuLink">
                            @if (Auth::check())
                                <li><a class="dropdown-item" href="{{ route('profile.index') }}">PERFIL</a></li>
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}">DASHBOARD</a></li>
                            @endauth
                            <li>
                                @if (Auth::check())
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item" href="route('logout')"
                                            onclick="event.preventDefault();this.closest('form').submit();">
                                            LOGOUT
                                        </a>
                                    </form>
                                @endauth

                        </li>

                </ul>

        </div>
    </li>

</ul>
</div>
</div>
</nav>
