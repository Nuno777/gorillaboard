@extends('layouts.master')
@section('title', 'GorillaBoards')

@section('main')
 <!-- Carousel wrapper -->
 <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
            aria-label="Slide 3"></button>
    </div>

    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="{{ asset('img/supertubosfoto.png') }}" class="d-block w-100" alt="Sunset Over the City" />

            <div class="centered"><img src="{{ asset('img/supertubosgif.gif') }}" alt=""></div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{ asset('img/ericeira1.png') }}" class="d-block w-100" alt="Canyon at Nigh" />
            <div class="centered"><img src="{{ asset('img/Boardridersgif.gif') }}" alt=""></div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{ asset('img/serradaestrelaimg.png') }}" class="d-block w-100" alt="Cliff Above a Stormy Sea" />
            <div class="centered">Serra da Estrela</div>
        </div>
    </div>
    <!-- Inner --> 

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
        data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
        data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel wrapper -->

<div id="info_Row">
    <div class="row">
        <div class="info_home col">

                <h3>Desportos</h3>
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.13 165">
                    <polygon class="cls-4" points="53.62 124.71 177.13 165 177.13 0 0 0 53.62 124.71"/>
                    <g>
                      <g>
                        <line class="cls-1" x1="120" y1="103.51" x2="99.55" y2="103.51"/>
                        <path class="cls-1" d="M99.55,101.63c.34-2.47,.44-4.66,.31-6.62-.21-4.19-1.25-7.29-2.4-9.59-2.71-5.42-6.38-7.09-9.72-13.73,0-.03-.03-.05-.05-.08-2.45-4.95-3.2-9.61-3.44-12.82,0-14.09,11.41-25.53,25.53-25.53s25.5,11.44,25.5,25.53c-.42,3.62-1.54,9.22-4.9,15.03l-.16,.23c-3.31,5.76-6.36,7.4-8.62,12.58-.89,2.01-1.72,4.74-1.93,8.36-.13,1.95-.05,4.17,.31,6.64"/>
                        <path class="cls-2" d="M84.26,58.81c.23,3.2,.99,7.87,3.44,12.82-2.19-3.75-3.44-8.15-3.44-12.82Z"/>
                        <path class="cls-2" d="M135.29,58.81c0,5.6-1.8,10.81-4.9,15.03,3.36-5.81,4.48-11.41,4.9-15.03Z"/>
                        <rect class="cls-1" x="99.56" y="95.01" width="20.44" height="8.5"/>
                        <rect class="cls-1" x="99.56" y="103.51" width="20.44" height="8.5"/>
                        <line class="cls-1" x1="109.77" y1="24.08" x2="109.77" y2="14.55"/>
                        <line class="cls-1" x1="75.41" y1="56.27" x2="65.88" y2="56.27"/>
                        <line class="cls-1" x1="143.97" y1="56.27" x2="153.5" y2="56.27"/>
                        <line class="cls-1" x1="134.23" y1="33.97" x2="140.55" y2="26.84"/>
                        <line class="cls-1" x1="85.32" y1="33.97" x2="79" y2="26.84"/>
                        <g>
                          <polygon class="cls-3" points="123.14 59.62 105.62 73.54 108.67 62.91 97.05 62.75 114.57 48.83 111.71 59.67 123.14 59.62"/>
                          <path class="cls-3" d="M122.02,58.5c-5.1,4.06-10.2,8.11-15.31,12.17-.74,.59-1.47,1.17-2.21,1.76l2.64,1.54c1.02-3.54,2.03-7.08,3.05-10.63,.29-1-.51-1.99-1.52-2l-11.62-.16,1.12,2.7c5.1-4.06,10.2-8.11,15.31-12.17,.74-.59,1.47-1.17,2.21-1.76l-2.64-1.54c-.95,3.61-1.91,7.22-2.86,10.83-.26,.99,.49,2,1.52,2,3.81-.02,7.62-.03,11.44-.05,2.03,0,2.04-3.17,0-3.16-3.81,.02-7.62,.03-11.44,.05l1.52,2c.95-3.61,1.91-7.22,2.86-10.83,.43-1.64-1.47-2.47-2.64-1.54-5.1,4.06-10.2,8.11-15.31,12.17-.74,.59-1.47,1.17-2.21,1.76-1.13,.89-.14,2.68,1.12,2.7l11.62,.16-1.52-2c-1.02,3.54-2.03,7.08-3.05,10.63-.47,1.65,1.49,2.45,2.64,1.54,5.1-4.06,10.2-8.11,15.31-12.17,.74-.59,1.47-1.17,2.21-1.76,1.59-1.26-.66-3.49-2.23-2.23Z"/>
                        </g>
                      </g>
                      <rect class="cls-4" x="102.13" y="96.04" width="15.21" height="5.94"/>
                      <rect class="cls-4" x="102.14" y="105.27" width="15.27" height="5.94"/>
                    </g>
                  </svg>
        </div>
        <div class="info_home col">

            <h3>Aulas</h3>
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.13 165">
                <polygon class="cls-4" points="53.62 124.71 177.13 165 177.13 0 0 0 53.62 124.71"/>
                <g>
                  <g>
                    <line class="cls-1" x1="120" y1="103.51" x2="99.55" y2="103.51"/>
                    <path class="cls-1" d="M99.55,101.63c.34-2.47,.44-4.66,.31-6.62-.21-4.19-1.25-7.29-2.4-9.59-2.71-5.42-6.38-7.09-9.72-13.73,0-.03-.03-.05-.05-.08-2.45-4.95-3.2-9.61-3.44-12.82,0-14.09,11.41-25.53,25.53-25.53s25.5,11.44,25.5,25.53c-.42,3.62-1.54,9.22-4.9,15.03l-.16,.23c-3.31,5.76-6.36,7.4-8.62,12.58-.89,2.01-1.72,4.74-1.93,8.36-.13,1.95-.05,4.17,.31,6.64"/>
                    <path class="cls-2" d="M84.26,58.81c.23,3.2,.99,7.87,3.44,12.82-2.19-3.75-3.44-8.15-3.44-12.82Z"/>
                    <path class="cls-2" d="M135.29,58.81c0,5.6-1.8,10.81-4.9,15.03,3.36-5.81,4.48-11.41,4.9-15.03Z"/>
                    <rect class="cls-1" x="99.56" y="95.01" width="20.44" height="8.5"/>
                    <rect class="cls-1" x="99.56" y="103.51" width="20.44" height="8.5"/>
                    <line class="cls-1" x1="109.77" y1="24.08" x2="109.77" y2="14.55"/>
                    <line class="cls-1" x1="75.41" y1="56.27" x2="65.88" y2="56.27"/>
                    <line class="cls-1" x1="143.97" y1="56.27" x2="153.5" y2="56.27"/>
                    <line class="cls-1" x1="134.23" y1="33.97" x2="140.55" y2="26.84"/>
                    <line class="cls-1" x1="85.32" y1="33.97" x2="79" y2="26.84"/>
                    <g>
                      <polygon class="cls-3" points="123.14 59.62 105.62 73.54 108.67 62.91 97.05 62.75 114.57 48.83 111.71 59.67 123.14 59.62"/>
                      <path class="cls-3" d="M122.02,58.5c-5.1,4.06-10.2,8.11-15.31,12.17-.74,.59-1.47,1.17-2.21,1.76l2.64,1.54c1.02-3.54,2.03-7.08,3.05-10.63,.29-1-.51-1.99-1.52-2l-11.62-.16,1.12,2.7c5.1-4.06,10.2-8.11,15.31-12.17,.74-.59,1.47-1.17,2.21-1.76l-2.64-1.54c-.95,3.61-1.91,7.22-2.86,10.83-.26,.99,.49,2,1.52,2,3.81-.02,7.62-.03,11.44-.05,2.03,0,2.04-3.17,0-3.16-3.81,.02-7.62,.03-11.44,.05l1.52,2c.95-3.61,1.91-7.22,2.86-10.83,.43-1.64-1.47-2.47-2.64-1.54-5.1,4.06-10.2,8.11-15.31,12.17-.74,.59-1.47,1.17-2.21,1.76-1.13,.89-.14,2.68,1.12,2.7l11.62,.16-1.52-2c-1.02,3.54-2.03,7.08-3.05,10.63-.47,1.65,1.49,2.45,2.64,1.54,5.1-4.06,10.2-8.11,15.31-12.17,.74-.59,1.47-1.17,2.21-1.76,1.59-1.26-.66-3.49-2.23-2.23Z"/>
                    </g>
                  </g>
                  <rect class="cls-4" x="102.13" y="96.04" width="15.21" height="5.94"/>
                  <rect class="cls-4" x="102.14" y="105.27" width="15.27" height="5.94"/>
                </g>
              </svg>
    </div>
    <div class="info_home col">

        <h3>Loja</h3>
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.13 165">
            <polygon class="cls-4" points="53.62 124.71 177.13 165 177.13 0 0 0 53.62 124.71"/>
            <g>
              <g>
                <line class="cls-1" x1="120" y1="103.51" x2="99.55" y2="103.51"/>
                <path class="cls-1" d="M99.55,101.63c.34-2.47,.44-4.66,.31-6.62-.21-4.19-1.25-7.29-2.4-9.59-2.71-5.42-6.38-7.09-9.72-13.73,0-.03-.03-.05-.05-.08-2.45-4.95-3.2-9.61-3.44-12.82,0-14.09,11.41-25.53,25.53-25.53s25.5,11.44,25.5,25.53c-.42,3.62-1.54,9.22-4.9,15.03l-.16,.23c-3.31,5.76-6.36,7.4-8.62,12.58-.89,2.01-1.72,4.74-1.93,8.36-.13,1.95-.05,4.17,.31,6.64"/>
                <path class="cls-2" d="M84.26,58.81c.23,3.2,.99,7.87,3.44,12.82-2.19-3.75-3.44-8.15-3.44-12.82Z"/>
                <path class="cls-2" d="M135.29,58.81c0,5.6-1.8,10.81-4.9,15.03,3.36-5.81,4.48-11.41,4.9-15.03Z"/>
                <rect class="cls-1" x="99.56" y="95.01" width="20.44" height="8.5"/>
                <rect class="cls-1" x="99.56" y="103.51" width="20.44" height="8.5"/>
                <line class="cls-1" x1="109.77" y1="24.08" x2="109.77" y2="14.55"/>
                <line class="cls-1" x1="75.41" y1="56.27" x2="65.88" y2="56.27"/>
                <line class="cls-1" x1="143.97" y1="56.27" x2="153.5" y2="56.27"/>
                <line class="cls-1" x1="134.23" y1="33.97" x2="140.55" y2="26.84"/>
                <line class="cls-1" x1="85.32" y1="33.97" x2="79" y2="26.84"/>
                <g>
                  <polygon class="cls-3" points="123.14 59.62 105.62 73.54 108.67 62.91 97.05 62.75 114.57 48.83 111.71 59.67 123.14 59.62"/>
                  <path class="cls-3" d="M122.02,58.5c-5.1,4.06-10.2,8.11-15.31,12.17-.74,.59-1.47,1.17-2.21,1.76l2.64,1.54c1.02-3.54,2.03-7.08,3.05-10.63,.29-1-.51-1.99-1.52-2l-11.62-.16,1.12,2.7c5.1-4.06,10.2-8.11,15.31-12.17,.74-.59,1.47-1.17,2.21-1.76l-2.64-1.54c-.95,3.61-1.91,7.22-2.86,10.83-.26,.99,.49,2,1.52,2,3.81-.02,7.62-.03,11.44-.05,2.03,0,2.04-3.17,0-3.16-3.81,.02-7.62,.03-11.44,.05l1.52,2c.95-3.61,1.91-7.22,2.86-10.83,.43-1.64-1.47-2.47-2.64-1.54-5.1,4.06-10.2,8.11-15.31,12.17-.74,.59-1.47,1.17-2.21,1.76-1.13,.89-.14,2.68,1.12,2.7l11.62,.16-1.52-2c-1.02,3.54-2.03,7.08-3.05,10.63-.47,1.65,1.49,2.45,2.64,1.54,5.1-4.06,10.2-8.11,15.31-12.17,.74-.59,1.47-1.17,2.21-1.76,1.59-1.26-.66-3.49-2.23-2.23Z"/>
                </g>
              </g>
              <rect class="cls-4" x="102.13" y="96.04" width="15.21" height="5.94"/>
              <rect class="cls-4" x="102.14" y="105.27" width="15.27" height="5.94"/>
            </g>
          </svg>
</div>
    </div>    
</div>
@endsection

