<style>
    .footer{
        margin-top: 40px;
        background-color: rgb(255, 255, 255);
        border-top: 1px solid #e0e2e76b;
    }
    .textSeparador{
        margin: 10px;
        padding-top: 10px;
        text-align: center;
        font-size: 22px;
        font-weight: 600;
        color: #585858;
    }
    .contacto li{
        margin: 15px 0px;
        font-weight: 700;
        list-style: none;
        color: #e5313f;
    }
    .contacto img{
        width: 25px;
        margin-right: 15px;
    }
    
    .redes img{
        width: 35px;
        border-radius: 50%;
        box-shadow: 0px 15px 25px -4px rgba(30, 30, 60, 0.12);
    }
    .redes ul{
        padding:0;
        display: flex;
        justify-content: space-evenly;
    }
    .redes li{
        list-style: none;
        display: inline;
        margin-top: 20px;
    }
    .banner img{
        width: 85%;
        height: 65%;
    }
    .divBanner{
        display: flex;
        justify-content: center;
    }
    .desarrollado{
        height: 30px;
        background: #e4e4e4;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    @media (min-width: 768px){
        .contacto img{
            width: 25px;
            margin-right: 15px;
        }
        .contacto ul{
            padding: 0;
        }
        .contacto li{
            padding: 0;
            font-size: 16px;
            margin-left: 100px;
        }
        .redes img{
            width: 50px;
        }
    }
</style>


<div class="">
    <div class="footer row">
        <div class="contacto col-sm-12 col-md-4">
            <div class="textSeparador">
                <p>
                    Contacto
                </p><hr>
            </div>
            <div>
                <ul>
                    <li>
                        <img src="{{asset('/icons/ubicacion.png')}}" alt="">Direccion Numero Pais
                    </li>
                    <li>
                        <img src="{{asset('/icons/email.png')}}" alt="">info@ilaef.org
                    </li>
                    <li>
                        <img src="{{asset('/icons/telefono.png')}}" alt="">0223 475-6492
                    </li>
                </ul>
            </div>
        </div>
        <div class="redes col-sm-12 col-md-4">
            <div class="textSeparador">
                <p>
                    Seguinos
                </p><hr>
                <div>
                    <ul>
                        <li>
                            <a href=""><img src="{{asset('/icons/facebook.png')}}" alt="" srcset=""></a>
                        </li>
                        <li>
                            <a href=""><img src="{{asset('/icons/twitter.png')}}" alt="" srcset=""></a>
                        </li>
                        <li>
                            <a href=""><img src="{{asset('/icons/youtube.png')}}" alt="" srcset=""></a>
                        </li>
                        <li>
                            <a href=""><img src="{{asset('/icons/linkedin.png')}}" alt="" srcset=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="banner col-sm-12 col-md-4">
            <div class="textSeparador">
                <p>
                    ILAEF
                </p><hr>
            </div>
            <div class="divBanner">
                <img src="{{asset('/img/logo-ilaef.jpg')}}" alt="">
            </div>
        </div>
        <div class="desarrollado col-12">
            Desarrollado por Lorem ipsum dolor sit amet.
        </div>
    </div>
</div>