<style>
  .background {
    display:none;
  }
  @media (min-width: 768px) {
    .background{
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
  <canvas class="background"></canvas>
  <x-carrousel/>
  <x-globos/>
  <x-card/>
</x-app-layout>
