@vite('public/css/adminCss/adminFaqs.css')

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        @include('layouts.partials.dashboard.nav')

        <section class="content">
            <div class="container-fluid">
                <form method="POST" action="{{ route('admin.faqs.store') }}" class="form-group">
                    @csrf
                    <h2 class="name-page"><a href="{{ url()->previous() }}">
                            <i class='bx bx-chevron-left bx-sm'></i></a>Criar nova FAQ</h2>
                    @include('adminPage.faqs.partials.add-edit')
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="ok">Save</button>
                        <a href="{{ route('admin.faqs.index') }}" class="btn btn-default">Cancel</a>
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>
@include('layouts.partials.dashboard.footer')
