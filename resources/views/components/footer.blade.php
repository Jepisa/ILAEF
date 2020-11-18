<style>
    .footer{
        margin-top: 40px;
        background-color:#484646;
    }
    .textSeparador{
        margin: 10px;
        padding-top: 10px;
        text-align: center;
        font-size: 22px;
        font-weight: 600;
        color: #f3f3f3;
    }
    .contacto li{
        margin: 15px 0px;
        list-style: none;
        color: #f3f3f3;
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
        padding: 20px;
        display: flex;
        justify-content: center;
        background-image: url(/img/logo-footer.png);
        height: 230px;
        width: 100%;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat
    }
    .desarrollado{
        min-height: 30px;
        background: #616060;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #f3f3f3;
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
            transition: all 0.2s;
        }
        .redes img:hover{
            background-color: rgba(66, 66, 66, 0.678);
        }
    }
</style>


<div class="">
    <div class="footer row col-12 ml-0">
        <div class="contacto col-sm-12 col-md-4">
            <div class="textSeparador">
                <p>
                    Contacto
                </p><hr>
            </div>
            <div>
                <ul>
                    <li>
                        <img class="svgIcons" src="{{asset('/icons/posicion.png')}}" alt="">Direccion Numero Pais
                    </li>
                    <li>
                        <img class="svgIcons" src="{{asset('/icons/correo.png')}}" alt="">info@ilaef.org
                    </li>
                    <li>
                        <img class="svgIcons"src="{{asset('/icons/llamada.png')}}" alt="">0223 475-6492
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
                            <a href="https://www.facebook.com/ilaef"><img src="{{asset('/icons/facebook.png')}}" alt="" srcset=""></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/ILAEF2"><img src="{{asset('/icons/twitter.png')}}" alt="" srcset=""></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/feed/storefront?bp=ogUCKAQ%3D"><img src="{{asset('/icons/youtube.png')}}" alt="" srcset=""></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/ilaef/"><img src="{{asset('/icons/linkedin.png')}}" alt="" srcset=""></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/ilaef_instlatamef/"><img src="{{asset('/icons/instagram.png')}}" style="background: white;" alt="" srcset=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="banner col-sm-12 col-md-4">
            <div class="divBanner"></div>
        </div>
        <div class="desarrollado col-12">
            <p class="mb-0">Desarrollado por voluntarios de Digital House</p>
        </div>
    </div>
</div>