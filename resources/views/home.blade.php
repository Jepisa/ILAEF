<link rel="stylesheet" href="/css/home.css">
<x-app-layout>
  <canvas class="conection"></canvas>
  <x-carrousel />
  <x-globos />
  <x-card />
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