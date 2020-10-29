<style>
    .divEngranaje{
        height: 120px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    .engranaje{
        width: 90px;
        position: absolute;
        animation: rotar;
        animation-duration: 50s;
        animation-iteration-count:infinite;
    }
    .divEngranaje p{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 28px;
        z-index: 9;
        margin: 0;
        color: white;
        background-color: #e5313f;
        font-size: 12px;
        font-weight: 700;
    }
    @keyframes rotar{
        0%{
            transform: rotate(1deg);
        }
        100%{
            transform: rotate(360deg);
        }
    }
    .globo:hover{
        background-color:#fb6d78;
    }

    .logoBlobo{
        display: flex;
        justify-content: center;
    }
    .logoBlobo img{
        margin: 10px;
        width: 90%;
        border-radius: 5px;
        box-shadow: 0px 15px 25px -25px rgba(30,30,60,0.25);
    }
    @media (min-width: 990px) {
        .divEngranaje{
            margin-bottom: 15px;
        }
        .engranaje{
            width: 110px;
        }
        .divEngranaje p{
            height: 35px;
            padding-top: 3px;
            font-size: 15px;
            
        }
        .logoBlobo img{
            width: 60%;
            margin: 30px 10px 30px 10px;
        }
    }
</style>
<div class="container">
    <div class="logoBlobo">
        <img src="{{asset('/img/logo-ilaef.jpg')}}" alt="">
    </div>
    <div class="row">
        <div class="divEngranaje col-3" data-aos="zoom-in"data-aos-duration="1000"data-aos-delay="150">
            <img class="engranaje" src="{{asset('/icons/ajustes.png')}}" alt="" srcset="">
            <p>Argentina</p>
        </div>
        <div class="divEngranaje col-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
            <img class="engranaje" src="{{asset('/icons/ajustes.png')}}" alt="" srcset="">
            <p>Mexico</p>
        </div>
        <div class="divEngranaje col-3" data-aos="zoom-in" data-aos-duration = "1000" data-aos-delay="180">
            <img class="engranaje" src="{{asset('/icons/ajustes.png')}}" alt="" srcset="">
            <p>Ecuador</p>
        </div>
        <div class="divEngranaje col-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="250">
            <img class="engranaje" src="{{asset('/icons/ajustes.png')}}" alt="" srcset="">
            <p>Paraguay</p>
        </div>
        <div class="divEngranaje col-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="350">
            <img class="engranaje" src="{{asset('/icons/ajustes.png')}}" alt="" srcset="">
            <p>El Salvador</p>
        </div>
        <div class="divEngranaje col-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
            <img class="engranaje" src="{{asset('/icons/ajustes.png')}}" alt="" srcset="">
            <p>Honduras</p>
        </div>
        <div class="divEngranaje col-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="150">
            <img class="engranaje" src="{{asset('/icons/ajustes.png')}}" alt="" srcset="">
            <p>Colombia</p>
        </div>
        <div class="divEngranaje col-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="250">
            <img class="engranaje" src="{{asset('/icons/ajustes.png')}}" alt="" srcset="">
            <p>EE.UU</p>
        </div>
    </div>
</div>