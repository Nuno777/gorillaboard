@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        @include('layouts.partials.dashboard.nav')

        <section class="content">
            <div class="container-fluid">
                @foreach ($logCollection as $log)
                    <p>{{ $log }}</p>
                @endforeach
            </div>
        </section>

        @include('layouts.partials.dashboard.footer')

