<div class="activity mt-6">
    <div  class="title-activity w-11/12 p-3 -mb-2 z-10 relative bg-white border-solid border rounded-xl border-gray-200">
        <h2 class="font-black">{{ $activity->title }}</h2>
    </div>
    <div class="div-activity w-full p-4 border-solid border border-gray-400 rounded-lg">
        <p class="font-black">{{ $activity->subtitle }}</p>
        <div class="lead">
            <p class="font-thin">{{ $activity->lead }}</p>
        </div>
        <div class="flex flex-col md:flex-row md:justify-end">
            <div class="leer-mas text-center flex justify-center items-center w-full md:w-1/6 md:order-none">
                <a href="" class="text">Leer más</a>{{-- Aún no hace nada, pero tendría que mostrar un modal con livewire--}}
            </div>
            <div class="share-to-social-networks flex justify-end w-full  md:w-6/12">
                <ul class="flex items-center">
                    <span>Compartir en</span>
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url($activity->slug) }}">
                            <img class="w-7" src="{{asset('/icons/facebook.png')}}" alt="" srcset="">
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/intent/tweet?text={{ $activity->lead.' '.url($activity->slug) }}">
                            <img class="w-7" src="{{asset('/icons/twitter.png')}}" alt="" srcset="">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ url($activity->slug) }}">
                            <img class="w-7" src="{{asset('/icons/linkedin.png')}}" alt="" srcset="">
                        </a>
                    </li>
                    <li>
                        <a href="https://api.whatsapp.com/send?text={{ $activity->lead.' '.url($activity->slug) }}" data-text="BOTÓN COMPARTIR EN WHATSAPP EN MI PÁGINA WEB" data-action="share/whatsapp/share">
                            <img class="w-7" src="{{ asset('icons/whatsapp.svg')}}">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
</div>