<style>
    .divPaises{
        margin-top: 50px;
        justify-content: space-evenly;
    }
    .divPais{
        height: 60px;
        min-width: 140px;
        display: flex;
        margin-left: 10px;
        border-radius: 10px;
        justify-content: center;
        align-items: center;
        position: relative;
        margin-bottom: 40px;
        background-color: #e5313f;
        cursor: pointer;
        box-shadow: 0px 15px 21px -9px rgba(30, 30, 60, 0.09);
    }
    .engranaje{
        width: 90px;
        position: absolute;
    }
    .divPais a{
        text-decoration: none;
    }
    .divPais p{
        padding: 0;
        margin: 0;
        color: white;
        font-size: 12px;
        font-weight: 700;
        transition: all .2s;
    }
    .divPais p:hover{
        transform: scale(1.1);
    }

    .logoIlaef{
        display: flex;
        justify-content: center;
    }
    .logoIlaef img{
        margin: 10px;
        width: 90%;
        border-radius: 5px;
        box-shadow: 0px 15px 25px -25px rgba(30,30,60,0.25);
    }
    @media (min-width: 990px) {
        .divPaises{
            margin-top: 80px;
        }
        .divPais{
            min-width: 115px;
            margin-left: 10px;
            margin-bottom: 15px;
            margin-bottom: 50px;
        }
        .engranaje{
            width: 110px;
        }
        .divPais p{
            height: 35px;
            padding-top: 3px;
            font-size: 15px;
            
        }
        .logoIlaef img{
            width: 60%;
            margin: 30px 10px 50px 10px;
        }
    }
</style>
<div class="container">
    <div class="logoIlaef">
        <img src="{{asset('/img/logo-ilaef.jpg')}}" alt="">
    </div>
    <div class="divPaises row">
        <div class="divPais col-3 col-lg-1" data-aos="zoom-in"data-aos-duration="1000"data-aos-delay="150">
            <a href=""><p>Argentina</p></a>
        </div>
        <div class="divPais col-3 col-lg-1" data-aos="zoom-in"data-aos-duration="1000"data-aos-delay="400">
            <a href=""><p>Colombia</p></a>
        </div>
        <div class="divPais col-3 col-lg-1" data-aos="zoom-in"data-aos-duration="1000"data-aos-delay="150">
            <a href=""><p>Ecuador</p></a>
        </div>
        <div class="divPais col-3 col-lg-1" data-aos="zoom-in"data-aos-duration="1000"data-aos-delay="180">
            <a href=""><p>EE.UU</p></a>
        </div>
        <div class="divPais col-3 col-lg-1" data-aos="zoom-in"data-aos-duration="1000"data-aos-delay="250">
            <a href=""><p>El Salvador</p></a>
        </div>
        <div class="divPais col-3 col-lg-1" data-aos="zoom-in"data-aos-duration="1000"data-aos-delay="350">
            <a href=""><p>Honduras</p></a>
        </div>
        <div class="divPais col-3 col-lg-1" data-aos="zoom-in"data-aos-duration="1000"data-aos-delay="100">
            <a href=""><p>México</p></a>
        </div>
        <div class="divPais col-3 col-lg-1" data-aos="zoom-in"data-aos-duration="1000"data-aos-delay="150">
            <a href=""><p>Panamá</p></a>
        </div>
        <div class="divPais col-3 col-lg-1" data-aos="zoom-in"data-aos-duration="1000"data-aos-delay="250">
           <a href=""><p>Paraguay</p></a>
        </div>
    </div>
</div>







<!-- <div class="divPais col-3 col-lg-1" data-aos="zoom-in"data-aos-duration="1000"data-aos-delay="150">
            <img class="engranaje" src="{{asset('/icons/ajustes.png')}}" alt="" srcset="">
            <p>Argentina</p>
        </div>
        <div class="divPais col-3 col-lg-1" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
            <img class="engranaje" src="{{asset('/icons/ajustes.png')}}" alt="" srcset="">
            <p>Mexico</p>
        </div>
        <div class="divPais col-3 col-lg-1" data-aos="zoom-in" data-aos-duration = "1000" data-aos-delay="180">
            <img class="engranaje" src="{{asset('/icons/ajustes.png')}}" alt="" srcset="">
            <p>Ecuador</p>
        </div>
        <div class="divPais col-3 col-lg-1" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="250">
            <img class="engranaje" src="{{asset('/icons/ajustes.png')}}" alt="" srcset="">
            <p>Paraguay</p>
        </div>
        <div class="divPais col-3 col-lg-1" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="350">
            <img class="engranaje" src="{{asset('/icons/ajustes.png')}}" alt="" srcset="">
            <p>El Salvador</p>
        </div>
        <div class="divPais col-3 col-lg-1" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
            <img class="engranaje" src="{{asset('/icons/ajustes.png')}}" alt="" srcset="">
            <p>Honduras</p>
        </div>
        <div class="divPais col-3 col-lg-1" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="150">
            <img class="engranaje" src="{{asset('/icons/ajustes.png')}}" alt="" srcset="">
            <p>Colombia</p>
        </div>
        <div class="divPais col-3 col-lg-1" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="250">
            <img class="engranaje" src="{{asset('/icons/ajustes.png')}}" alt="" srcset="">
            <p>EE.UU</p>
        </div> -->