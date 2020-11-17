<link rel="stylesheet" href="/css/home.css">
<x-app-layout>
  <canvas class="conection"></canvas>
  <x-carrousel />
  <x-globos />
   <div class="divCards container">
    <div class="row">
      @foreach($news as $new)
       <!-- CARD -->
       <div class="col-12 col-md-6 col-lg-4" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="50">
        <a href="{{$new->url}}" id="url">
          <div class="cardNew">
            <div class="imgNew">
              <div class="tagPais"></div>
              <img src="{{$new->image}}" alt="">
            </div>
            <div class="body">
              <div class="title">
                <p>
                  {{$new->title}}
                </p>
              </div>
              <div class="description">
                <p>
                  {{$new->description}}
                </p>
              </div>
              <div class="reloj">
                  <img src='/icons/reloj.png' alt="" srcset="">
                  <p>{{$new->created_at->format('d/m/Y')}}</p>
              </div>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</x-app-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>
<script src=" https://unpkg.com/aos@next/dist/aos.js"></script>
