@vite('public/css/adminCss/adminFaqs.css')

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        @include('layouts.partials.dashboard.nav')

        <section class="content">
            <div class="container-fluid">
                <h2 class="name-page"><a href="{{ url()->previous() }}">
                        <i class='bx bx-chevron-left bx-sm'></i></a>Informação do atleta {{ $atleta->id }}</h2>
            </div>
            <div class="card-body">
                <div><strong>Id</strong> {{ $atleta->id }} </div>
                <div><strong>nasc_atleta</strong> {{ $atleta->nasc_atleta }} </div>
                <div><strong>idade_atleta</strong> {{ $atleta->idade_atleta }} </div>
                <div><strong>email_encarregado_edu</strong> {{ $atleta->email_encarregado_edu }} </div>
                <div><strong>cc_encarregado_edu</strong> {{ $atleta->cc_encarregado_edu }} </div>
                <div><strong>tele_encarregado_edu</strong> {{ $atleta->tele_encarregado_edu }} </div>
                <div><strong>user_id</strong> {{ $atleta->user_id }} </div>
            </div>
            <button class="btn-warming"><a href="{{ url()->previous() }}"></a></button>
        </section>
    </div>
</body>
    @include('layouts.partials.dashboard.footer')
