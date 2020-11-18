<link rel="stylesheet" href="{{ asset('/css/home.css') }}">
<x-app-layout>
  <style>
    .conection {
        display: none;
    }
    @media (min-width: 768px) {
        .conection {
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -9;
            height: 90% !important;
        }
    }
    
</style>
  <canvas class="conection"></canvas>
  <x-carrousel />
  <x-globos />
  @isset($news)
    <div class="divCards container">
      <div class="row">
        @foreach($news as $new)
        <!-- CARD -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="50">
          <a href="{{$new->url}}" id="url">
            <div class="cardNew">
              <div class="imgNew">
                <div class="tagPais"></div>
                <img src="{{$new->image}}" alt="">
              </div>
              <div class="body">
                <div class="title">
                  <p>
                    {{$new->title}}
                  </p>
                </div>
                <div class="description">
                  <p>
                    {{$new->description}}
                  </p>
                </div>
                <div class="reloj">
                    <img src='/icons/reloj.png' alt="" srcset="">
                    <p>{{$new->created_at->format('d/m/Y')}}</p>
                </div>
              </div>
            </div>
          </a>
@extends('layouts.app')
@section('css')
    {{-- bootstrap --}}
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    {{-- MI CSS --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')

<div id="div-fondo-superior">

{{-- agrego aca lo del navbar que estaba en la pagina de prueba - Franco --}}
<nav class="nav-index">
        <div class="nav-background">  
                
            {{-- header mobile --}}
            <div class="header-desktop">
                <div class="div-logo">
                    <img class="logo-ILAEF" src="{{ asset('img/Logos-ILAEF.jpg') }}" alt="ILAEF">
                </div>
                <div class="div-enlaces">
                    <a class="a-home" href=""><img src="https://www.flaticon.es/premium-icon/icons/svg/2168/2168260.svg" alt="home" style="width: 30px !important; height: 24px; padding: 0 2px;"></a>
                    <a href="">Quiénes Somos</a>
                    <a href="">Nuestra misión</a>
                    <a href="">Agenda</a>
                    <a href="">Eventos</a>
                    <a href="">Biblioteca</a>
                </div> 
            </div>
            {{-- header mobile --}}
            <div class="header-mobile">
                <div class="div-logo-mobile">
                    <img class="logo-ILAEF-mobile" src="{{ asset('img/Logos-ILAEF.jpg') }}" alt="ILAEF">
                </div>
                <div class="div-enlaces-mobile">
                    <ul class="menu_items">
                        <li><a href="">Quiénes Somos</a></li>
                        <li><a href="">Nuestra misión</a></li>
                        <li><a href="">Agenda</a></li>
                        <li><a href="">Eventos</a></li>
                        <li><a href="">Biblioteca</a></li>
                    </ul>    
                    
                </div> 
                <span class="menu_mobile">
                   <i><img src="{{ asset('img/menu_mobile.png') }}" alt="" class="menu_mobile_logo"></i>
                </span>
                
                    
                
            </div>
        </nav>
</div>

{{-- Carousel --}}
<div class="carousel">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('img/cueros2.jpg') }}" alt="cueros slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>..h5..</h5>
            <p>..p..</p>
        </div>
        @endforeach
      </div>
  
    </div>
  @endisset
</x-app-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>
<script src=" https://unpkg.com/aos@next/dist/aos.js"></script>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('img/fabrica2.jpg') }}" alt="fabrica slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>..h5..</h5>
            <p>..p..</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('img/soldando2.jpg') }}" alt="soldando slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>..h5..</h5>
            <p>..p..</p>
        </div>
      </div>
    </div>
</div>
</div>
{{-- Paises en los globos (Parte Media) --}}
<div id="div-fondo-medio">
    <img id="img-logo-medio" src="{{ asset('img/circulos 2.jpg') }}" alt="logo-ILAEF">
    <div>
        <a href="">
            <img src="" alt="" class="paises">
            <span class="nombre-pais"></span>
        </a>
    </div>
    <div>
        <a href="">
            <img src="" alt="" class="paises">
            <span class="nombre-pais"></span>
        </a>
    </div>
    <div>
        <a href="">
            <img src="" alt="" class="paises">
            <span class="nombre-pais"></span>
        </a>
    </div>
    <div>
        <a href="">
            <img src="" alt="" class="paises">
            <span class="nombre-pais"></span>
        </a>
    </div>
    <div>
        <a href="">
            <img src="" alt="" class="paises">
            <span class="nombre-pais"></span>
        </a>
    </div>
    <div>
        <a href="">
            <img src="" alt="" class="paises">
            <span class="nombre-pais"></span>
        </a>
    </div>
    <div>
        <a href="">
            <img src="" alt="" class="paises">
            <span class="nombre-pais"></span>
        </a>
    </div>
    <div>
        <a href="">
            <img src="" alt="" class="paises">
            <span class="nombre-pais"></span>
        </a>
    </div>
</div>

{{-- Novedades de los Capitulos --}}
<div id="novedades">

</div>

{{-- Footer --}}
<footer>
    <div id="logo-footer">
        <img src="" alt="Logo-ILAEF">
    </div>
    <div id="redes-sociales">
        <span>SEGUINOS</span>
    </div>
    <div id="contacto">
        <span>CONTACTO</span>
    </div>
</footer>

@endsection

@section('script')
    <!-- JS, Popper.js, and jQuery -->
    <script src="../js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
@endsection
