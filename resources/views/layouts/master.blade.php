<!DOCTYPE html>
<html lang="en">


@include('layouts.partials.head')


<body>
    <div class="screen">
        <div class="loader">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    @include('layouts.partials.nav')

    <main>
        <div class="col-md-12">
            @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show " role="alert">
                    <strong>{{ Session::get('message') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:#4f5962;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
        @yield('main')
    </main>

    @include('layouts.partials.BTTbutton')
    @include('layouts.partials.footer')


    <script>
        $(window).on('load', function() {
            $(".loader").parent().fadeOut("slow");
        });
    </script>
</body>

</html>
