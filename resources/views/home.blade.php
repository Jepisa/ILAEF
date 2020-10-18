@extends('layouts.app')
@section('css')
    {{-- bootstrap --}}
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    {{-- MI CSS --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
'news'
<div id="div-fondo-superior">
    <nav id="navbar">
        <div>
            <img id="logo-ILAEF" scr="{{ asset('img/logo-ILAEF.jpg') }}" >
        </div>
        <div id="menu">
            <span>MENÜ</span>
        </div>
    </nav>
</div>

{{-- Carousel --}}
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('img/cueros2.jpg') }}" alt="cueros slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>..h5..</h5>
            <p>..p..</p>
        </div>
      </div>
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

{{-- Paises en los globos (Parte Media) --}}
<div id="div-fondo-medio">
    <img class="fondo-medio" src="{{ asset('img/circulos 2.jpg') }}" alt="logo-ILAEF">
    <div class="div-logo-medio">
        <img class="logo-medio" src="{{ asset('img/logo-ilaef.jpg') }}" alt="">
    </div>
    <div class="paises">
        <div class="pais">
            <a href="">
                <img src="{{ asset('img/globo.png') }}" alt="" class="img-pais">
                <span class="nombre-pais">Argentina</span>
            </a>
        </div><div class="pais">
            <a href="">
                <img src="{{ asset('img/globo.png') }}" alt="" class="img-pais">
                <span class="nombre-pais">Argentina</span>
            </a>
        </div><div class="pais">
            <a href="">
                <img src="{{ asset('img/globo.png') }}" alt="" class="img-pais">
                <span class="nombre-pais">Argentina</span>
            </a>
        </div><div class="pais">
            <a href="">
                <img src="{{ asset('img/globo.png') }}" alt="" class="img-pais">
                <span class="nombre-pais">Argentina</span>
            </a>
        </div>
    </div>

    <div class="paises">

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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
@endsection
