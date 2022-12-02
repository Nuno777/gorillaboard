<!DOCTYPE html>
<html lang="en">


@include('layouts.partials.head')


<body>

    @include('layouts.partials.nav')

    <main>
        @yield('main')
    </main>


    @include('layouts.partials.footer')

</body>

</html>
