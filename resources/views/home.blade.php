<style>
  .conection {
    display:none;
  }
  @media (min-width: 768px) {
    .conection{
      position:absolute;
      display:block;
      top: 0;
      left: 0;
      z-index: -9;
      /* height: 80% !important;
      border: 1px solid rgb(126, 126, 126); */
    }
  }
</style>
<x-app-layout>
  <canvas class="conection"></canvas>
  <x-carrousel/>
  <x-globos/>
  <x-card/>
</x-app-layout>
