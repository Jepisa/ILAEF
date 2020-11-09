<link rel="stylesheet" href="/css/aboutUs.css">
<x-app-layout>
<canvas class="conection"></canvas>
<div class="aboutUsContent container col-12 col-md-11">
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="tagAboutUs">
                Quienes somos
            </div>
            <div>
                <p>
                    El Instituto Latinoamericano de la Empresa Familiar es una Asociación Civil formada por institutos de la empresa familiar o entidades similares, con personalidad jurídica diferenciada,  creados (o a crearse) en cada uno de los países de Latinoamérica.
                </p>
            </div>
            <div class="listAsoc">
                <ul>
                    <li>
                        <p class="resaltar">IADEF</p><p>“Instituto Argentino de la Empresa Familiar” Capítulo Argentina</p>
                    </li>
                    <li>
                        <p class="resaltar">IPEF</p><p>“Instituto Paraguayo de la Empresa Familiar” Capitulo Paraguay</p>
                    </li>
                    <li>
                        <p class="resaltar">ICOEF</p><p>“Instituto Colombiano de la Empresa Familiar” Capítulo Colombia</p>
                    </li>
                    <li>
                        <p class="resaltar">ILAEF EEUU</p><p>“Instituto Latinoamericano de la Empresa Familiar EEUU” Capítulo EEUU
                        </p>
                    </li>
                    <li>
                        <p class="resaltar">CEFE</p><p>“Centro de Empresa Familiar y Emprendedores” Capítulo Honduras</p>
                    </li>
                    <li>
                        <p class="resaltar">Asociados con acuerdo de institutos por crearse en México, El Salvador, Ecuador, Panamá</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="logosAsoc col-lg-4">
            <ul>
                <li>
                    <img src="{{asset('/img/logo-ilaef.jpg')}}" alt="" srcset="">
                </li>
                <li>
                    <img src="{{asset('/img/logo-ilaef.jpg')}}" alt="" srcset="">
                </li>
                <li>
                    <img src="{{asset('/img/logo-ilaef.jpg')}}" alt="" srcset="">
                </li>
                <li>
                    <img src="{{asset('/img/logo-ilaef.jpg')}}" alt="" srcset="">
                </li>
                <li>
                    <img src="{{asset('/img/logo-ilaef.jpg')}}" alt="" srcset="">
                </li>
            </ul>
        </div>
    </div><hr>
    <div class="autoridades">
        <div>
            <p class="resaltar">Autoridades Junta Directiva</p>
        </div>
        <div class="row">
            <div class="foto col-11 col-md-5 col-lg-2">
                <img src="{{asset('/img/autoridades/CHRISTENSEN.jpg')}}" alt="">
                <p class="resaltar">Natalia Christensen. Presidente.</p>
            </div>
            <div class="foto col-11 col-md-5 col-lg-2">
                <img src="{{asset('/img/autoridades/diegobernal.jpg')}}" alt="">
                <p class="resaltar">Diego Bernal. Vicepresidente ILAEF.</p>
            </div>
            <div class="foto col-11 col-md-5 col-lg-2">
                <img src="{{asset('/img/autoridades/AndradeMarcelo.jpg')}}" alt="">
                <p class="resaltar">Marcelo Andrade. Secretario ILAEF.</p>
            </div>
            <div class="foto col-11 col-md-5 col-lg-2">
                <img src="{{asset('/img/autoridades/parras.jpg')}}" alt="">
                <p class="resaltar">Sergio Parra. Tesorero ILAEF.</p>
            </div>
            <div class="foto col-11 col-md-5 col-lg-2">
                <img src="{{asset('/img/autoridades/MargaretAbbott.png')}}" alt="">
                <p class="resaltar">Margaret Abbott. Consejera ILAEF.</p>
            </div>
            <div class="foto col-11 col-md-5 col-lg-2">
                <img src="{{asset('/img/autoridades/TONIO.jpg')}}" alt="">
                <p class="resaltar">Antonio Diaz. Consejero ILAEF.</p>
            </div>
            <div class="foto col-11 col-md-5 col-lg-2">
                <img src="{{asset('/img/autoridades/HenryHernandez.jpg')}}" alt="">
                <p class="resaltar">Henry Hernandez. Consejero ILAEF.</p>
            </div>
            <div class="foto col-11 col-md-5 col-lg-2">
                <img src="{{asset('/img/autoridades/OMARNOGUERA.jpg')}}" alt="">
                <p class="resaltar">Omar Noguera. Consejero ILAEF.</p>
            </div>
            <div class="foto col-11 col-md-5 col-lg-2">
                <img src="{{asset('/img/autoridades/AliciaStivelberg 2019.jpg')}}" alt="">
                <p class="resaltar">Alicia Stivelberg. Consejero ILAEF.</p>
            </div>
            <div class="foto col-11 col-md-5 col-lg-2">
                <img src="{{asset('/img/autoridades/wISTON.jpg')}}" alt="">
                <p class="resaltar">Wiston Uzcátegui: Consejero ILAEF.</p>
            </div>
        </div>
    </div>
</div>
</x-app-layout>








<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>
<script src=" https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  window.onload = function () {
    Particles.init({
      selector: '.conection',
      connectParticles: true,
      maxParticles: 110,
      minDistance: 150,
    });
  };
  AOS.init(); 
</script>





<!-- <div class="row">
    <div class="foto col-11 col-md-5 col-lg-2">
        <img src="{{asset('/img/autoridades/CHRISTENSEN.jpg')}}" alt="">
        <p class="resaltar">Natalia Christensen. Presidente.</p>
    </div>
    <div class="foto col-11 col-md-5 col-lg-2">
        <img src="{{asset('/img/autoridades/diegobernal.jpg')}}" alt="">
        <p class="resaltar">Diego Bernal. Vicepresidente ILAEF.</p>
    </div>
    <div class="foto col-11 col-md-5 col-lg-2">
        <img src="{{asset('/img/autoridades/AndradeMarcelo.jpg')}}" alt="">
        <p class="resaltar">Marcelo Andrade. Secretario ILAEF.</p>
    </div>
    <div class="foto col-11 col-md-5 col-lg-2">
        <img src="{{asset('/img/autoridades/parras.jpg')}}" alt="">
        <p class="resaltar">Sergio Parra. Tesorero ILAEF.</p>
    </div>
    <div class="foto col-11 col-md-5 col-lg-2">
        <img src="{{asset('/img/autoridades/MargaretAbbott.png')}}" alt="">
        <p class="resaltar">Margaret Abbott. Consejera ILAEF.</p>
    </div>
    <div class="foto col-11 col-md-5 col-lg-2">
        <img src="{{asset('/img/autoridades/TONIO.jpg')}}" alt="">
        <p class="resaltar">Antonio Diaz. Consejero ILAEF.</p>
    </div>
    <div class="foto col-11 col-md-5 col-lg-2">
        <img src="{{asset('/img/autoridades/HenryHernandez.jpg')}}" alt="">
        <p class="resaltar">Henry Hernandez. Consejero ILAEF.</p>
    </div>
    <div class="foto col-11 col-md-5 col-lg-2">
        <img src="{{asset('/img/autoridades/OMARNOGUERA.jpg')}}" alt="">
        <p class="resaltar">Omar Noguera. Consejero ILAEF.</p>
    </div>
    <div class="foto col-11 col-md-5 col-lg-2">
        <img src="{{asset('/img/autoridades/AliciaStivelberg 2019.jpg')}}" alt="">
        <p class="resaltar">Alicia Stivelberg. Consejero ILAEF.</p>
    </div>
    <div class="foto col-11 col-md-5 col-lg-2">
        <img src="{{asset('/img/autoridades/wISTON.jpg')}}" alt="">
        <p class="resaltar">Wiston Uzcátegui: Consejero ILAEF.</p>
    </div>
</div> -->