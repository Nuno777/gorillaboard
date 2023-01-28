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
        @yield('main')
    </main>

    @include('layouts.partials.BTTbutton')
    @include('layouts.partials.footer')


    <script>
        $(window).on('load', function(){
            $(".loader").parent().fadeOut("slow");
        });
    </script>
</body>

</html>
