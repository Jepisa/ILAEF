<style>
    .divCarrousel{
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    #carousel{
        box-shadow: 0px 15px 25px -4px rgba(30, 30, 60, 0.19);
    }

</style>
<div class="divCarrousel">
    <div class="car col-sm-12 col-md-12 col-lg-7">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('/img/cueros.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/img/fabrica.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/img/soldando.jpg')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>