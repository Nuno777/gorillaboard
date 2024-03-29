@vite('public/css/adminCss/adminFaqs.css')

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        @include('layouts.partials.dashboard.nav')

        <section class="content">
            <div class="container-fluid">


                @if ($errors->any())
                    @include ('layouts.partials.errors')
                @endif
                <div class="card-body">
                    <h2 class="name-page"><a href="{{ route('admin.faqs.index') }}">
                            <i class='bx bx-chevron-left bx-sm'></i></a>Edit FAQ</h2>
                </div>
                <form method="POST" action="{{ route('admin.faqs.update', $faq) }}" class="form-group inline">
                    @csrf
                    @method('PUT')
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
