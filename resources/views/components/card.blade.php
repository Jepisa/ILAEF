<style>
    .divCards{
        margin-top: 50px;
    }
    .cardNew{
        /* max-width: 400px; */
        width: 100%;
        max-height: 450px;
        margin: 10px 10px 40px 10px;
        border-radius: 4px;
        box-shadow: 0px 15px 25px -4px rgba(30, 30, 60, 0.19);
    }
    .imgNew{
        height: 250px;
        position: relative;
        display: flex;
        justify-content: center;
    }
    .imgNew img{
        height: 100%;
        width: 100%;
        border-radius: 4px 4px 0px 0px;
    }
    .tagPais{
        position: absolute;
        bottom: -10;
        padding: 3px;
        min-width: 100px;
        height: 30px;
        font-size: 14px;
        text-align: center;
        border-radius: 4px;
        background-color: #e5313f;
        color: white;
    }
    .body{
        width: 100%;
        height: 200px;
    }
    .title{
        width: 100%;
        height: 60px;
        padding: 10px;
        overflow: hidden;
        display: flex;
        align-items: center;
        font-size: 19px;
        font-weight: 700;
        color: rgb(56, 56, 56);
        border-bottom: 1px solid rgb(226, 226, 226);
    }
    .description{
        padding: 10px;
        height: 140px;
        text-align: left;
    }
    .description p{
        margin: 0;
    }
    
</style>

<div class="divCards container">
    <div class="row">
        <!-- CARD -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="50">
            <div class="cardNew">
                <div class="imgNew">
                    <div class="tagPais">Argentina</div>
                    <img src="{{asset('/img/ILAEF_grupal1.jpg')}}" alt="">
                </div>
                <div class="body">
                    <div class="title">
                        Lorem ipsum dolor, sit amet 
                    </div>
                    <div class="description">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,  excepturi quidem veniam exercitationem corrupti bexcepturi quidem veniam exercitationem corrupti b 
                        </p>
                    </div>
                </div>
             </div>
        </div>
        <!-- CARD -->
    </div>
</div>
