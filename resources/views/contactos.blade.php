    @extends('layout.master')
    @section('title', 'GorillaBoards')
    @section('main')
        <section>
            <div class="row">
                <div class="col-2 offset-2">
                    <div class="title">
                        <h1>Contactos</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 offset-2">
                    <div class="map">
                        <iframe class="map-size"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49339.97844983393!2d-9.437329400000001!3d39.384565599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1f45c49805a145%3A0x26caf596a0956bf3!2sPeniche!5e0!3m2!1spt-PT!2spt!4v1668611396621!5m2!1spt-PT!2spt"
                            width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-8  offset-2">
                    <form action="#" method="post">

                        <div class="name">
                            <label for="name" class="name-padding">Nome</label><br>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Insira o seu nome">
                        </div>

                        <div class="email">
                            <label for="email" class="email-padding">Email</label><br>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Insira o seu mail">
                        </div>

                        <div class="message">
                            <label for="message" class="message-padding">Menssagem</label><br>
                            <textarea name="message" id="message" class="form-control" rows="3" placeholder="Insira a sua menssagem"></textarea>
                        </div>

                        <div>
                            <input type="submit" class="button" value="Submeter">
                        </div>

                    </form>
                </div>
            </div>

        </section>

@endsection




    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
</body>

</html>
