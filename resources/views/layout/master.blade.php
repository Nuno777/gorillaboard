<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.partials.header')
</head>

<body>

    <header>
        @include('layout.partials.nav')
    </header>

    <main>
        @yield('main')
    </main>


    <footer class="footer">
        @include('layout.partials.footer')
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>

</body>

</html>
