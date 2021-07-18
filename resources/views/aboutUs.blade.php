<x-app-layout>
    <link rel="stylesheet" href="/css/aboutUs.css">
    <canvas class="conection"></canvas>
    <div class="aboutUsContent container col-12 col-md-11">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="tagAboutUs">
                    {{ __('home.navbar.aboutUs') }}
                </div>
                <div class="about">
                    <p>
                        El Instituto Latinoamericano de la Empresa Familiar, es una Asociación Civil formada por institutos de la empresa familiar o entidades similares, con personalidad jurídica diferenciada, creados en cada uno de los países de Latinoamérica.
                    </p>
                </div>
                <div class="listAsoc">
                    <ul>
                        <li>
                            <p class="resaltar">IADEF</p>
                            <p>“Instituto Argentino de la Empresa Familiar” Capítulo Argentina</p>
                        </li>
                        <li>
                            <p class="resaltar">IPEF</p>
                            <p>“Instituto Paraguayo de la Empresa Familiar” Capítulo Paraguay</p>
                        </li>
                        <li>
                            <p class="resaltar">ICOEF</p>
                            <p>“Instituto Colombiano de la Empresa Familiar” Capítulo Colombia</p>
                        </li>
                        <li>
                            <p class="resaltar">ILAEF EEUU</p>
                            <p>“Instituto Latinoamericano de la Empresa Familiar EEUU” Capítulo EEUU
                            </p>
                        </li>
                        <li>
                            <p class="resaltar">CEFE</p>
                            <p>“Centro de Empresa Familiar y Emprendedores” Capítulo Honduras</p>
                        </li>
                        <li>
                            <p class="resaltar">CIBAEF</p>
                            <p>“Consejo Iberoamericano de la Empresa Familiar, A.C.” Capítulo México</p>
                        </li>
                        <li>
                            <p class="resaltar">Asociados con acuerdo de institutos por crearse en El Salvador, Ecuador, Panamá.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="logosAsoc col-lg-3">
                <ul>
                    <li>
                        <a href="https://www.iadef.org"><img src="{{asset('/img/logo0.png')}}" alt="" srcset=""></a>
                    </li>
                    <li>
                        <a href="/"><img src="{{asset('/img/logo1.jpg')}}" alt="" srcset=""></a>
                    </li>
                    <li>
                        <a href="http://www.cefe.usap.edu"><img src="{{asset('/img/logo2.png')}}" alt="" srcset=""></a>
                    </li>
                    <li>
                        <a href="http://www.ipef.org.py"><img src="{{asset('/img/logo3.png')}}" alt="" srcset=""></a>
                    </li>
                    <li>
                        <a href="https://www.icoef.com.co"><img src="{{asset('/img/logo4.png')}}" alt="" srcset=""></a>
                    </li>
                    {{-- <li>
                        <a ><img src="{{asset('/img/logo-CIBAEF.jpeg')}}" alt="" srcset=""></a>
                    </li> --}}
                </ul>
            </div>
        </div><hr>
        <div class="autoridades">
            <div>
                <p class="resaltar">Autoridades Junta Directiva</p>
            </div>
            <div class="row contFotos">
                <div class="divFoto col-10 col-md-5 col-xl-2">
                    <div class="foto"  style="background-image: url(/img/autoridades/CHRISTENSEN.jpg);"></div>
                    <p class="resaltar text-center m-auto">Natalia Christensen.<br>Presidenta ILAEF.</p>
                </div>
                <div class="divFoto col-10 col-md-5 col-xl-2">
                    <div class="foto"  style="background-image: url(/img/autoridades/diegobernal.jpg);"></div>
                    <p class="resaltar text-center m-auto">Diego Bernal.<br>Vicepresidente ILAEF.</p>
                </div>
                <div class="divFoto col-10 col-md-5 col-xl-2">
                    <div class="foto"  style="background-image: url(/img/autoridades/AndradeMarcelo.jpg);"></div>
                    <p class="resaltar text-center m-auto">Marcelo Andrade.<br>Secretario ILAEF.</p>
                </div>
                <div class="divFoto col-10 col-md-5 col-xl-2">
                    <div class="foto"  style="background-image: url(/img/autoridades/parras.jpg);"></div>
                    <p class="resaltar text-center m-auto">Sergio Parra.<br>Tesorero ILAEF.</p>
                </div>
                <div class="divFoto col-10 col-md-5 col-xl-2">
                    <div class="foto"  style="background-image: url(/img/autoridades/MargaretAbbott.png);"></div>
                    <p class="resaltar text-center m-auto">Margaret Abbott.<br>Consejera ILAEF.</p>
                </div>
                <div class="divFoto col-10 col-md-5 col-xl-2">
                    <div class="foto"  style="background-image: url(/img/autoridades/TONIO.jpg);"></div>
                    <p class="resaltar text-center m-auto">Antonio Diaz.<br>Consejero ILAEF.</p>
                </div>
                <div class="divFoto col-10 col-md-5 col-xl-2">
                    <div class="foto"  style="background-image: url(/img/autoridades/HenryHernandez.jpg);"></div>
                    <p class="resaltar text-center m-auto">Henry Hernández.<br>Consejero ILAEF.</p>
                </div>
                <div class="divFoto col-10 col-md-5 col-xl-2">
                    <div class="foto"  style="background-image: url(/img/autoridades/OMARNOGUERA.jpg);"></div>
                    <p class="resaltar text-center m-auto">Omar Noguera.<br>Consejero ILAEF.</p>
                </div>
                <div class="divFoto col-10 col-md-5 col-xl-2">
                    <div class="foto"  style="background-image: url(/img/autoridades/AliciaStivelberg.jpg);"></div>
                    <p class="resaltar text-center m-auto">Alicia Stivelberg.<br>Consejera ILAEF.</p>
                </div>
                <div class="divFoto col-10 col-md-5 col-xl-2">
                    <div class="foto"  style="background-image: url(/img/autoridades/wISTON.jpg);"></div>
                    <p class="resaltar text-center m-auto">Wiston Uzcátegui.<br>Consejero ILAEF.</p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>