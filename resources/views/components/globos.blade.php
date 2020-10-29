<style>
    .divGlobo{
        height: 120px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .globo{
        height: 90px;
        width: 95px;
        /* background-color:#f1d35d;
        color: #636363;  */
        background-color: #e5313f;
        color: #ffffff;  
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        /* font-family: 'Roboto', sans-serif; */
        font-size: 14px;
        font-weight: 700;
        transition: all 0.2s ease-out;
        cursor: pointer;
        box-shadow: 0px 15px 25px -4px rgba(30, 30, 60, 0.12);
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
        .divGlobo{
            margin-bottom: 15px;
        }
        .globo{
            height: 100px;
            width: 100px;
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
        <div class="divGlobo col-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="150">
            <div class="globo">
                Argentina
            </div>
        </div>
        <div class="divGlobo col-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
            <div class="globo">
                Mexico
            </div>
        </div>
        <div class="divGlobo col-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="180">
            <div class="globo">
                Ecuador
            </div>
        </div>
        <div class="divGlobo col-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="250">
            <div class="globo">
                Paraguay
            </div>
        </div>
        <div class="divGlobo col-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="350">
            <div class="globo">
                El Salvador
            </div>
        </div>
        <div class="divGlobo col-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
            <div class="globo">
                Honduras
            </div>
        </div>
        <div class="divGlobo col-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="250">
            <div class="globo">
                Colombia
            </div>
        </div>
        <div class="divGlobo col-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
            <div class="globo">
                EE.UU
            </div>
        </div>
    </div>
</div>