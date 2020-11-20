<div class="container m-auto w-11/12 rounded-b-2xl bg-white">
    <style>
        .tagAboutUs{
            width: 200px;
            height: 60px;
            margin-left: 50px;
            color: #003485;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            font-weight: 600;
            border-radius: 0px 0px 5px 5px;
            margin-bottom: 30px;
            box-shadow: 0px 11px 25px -15px rgba(30, 30, 60, 0.22);
            border: 1px solid #f7f7f7;
        }
    </Style>
    <div class="tagAboutUs">
        {{ __('Actividades')}}
    </div>
    <div class="flex flex-wrap justify-between px-6 pb-6">
        <div class="mt-6 w-full md:hidden border-solid border border-gray-400 rounded-lg p-2">
                
            {{-- Despues seguiré con el buscador --}}
            <input class="w-full" wire:model="search" type="text" placeholder="Buscar Actividades..."/>

        </div>
       
        <div class="activities w-full ">
            @if( $search )
            <div>
                @if (count($activities->links()->elements[0]) <= 1)
                    {{ $activities->count() }}
                @else
                   {{ $activities->links() }} 
                @endif
                
            </div>
            @endif
            @if ($activities->count() > 0)
                @foreach ($activities as $activity)
                    <x-card-activity :activity="$activity"/> 
                @endforeach
                
            @else
                <p>Lo siento, pero nada coincide con los términos de búsqueda. Vuelva a intentarlo con algunas palabras clave diferentes.</p>
            @endif
            
            
            @if( $search )
                Bye
                <div class="mt-2">
                    {{$activities->links()}}
                </div>
            @endif
        </div>
        
        <div class="menu-lateral-actividades w-full md:w-3/12">
            <div class="mt-6 w-full hidden md:block border-solid border border-gray-400 rounded-lg p-2">
                
                {{-- Despues seguiré con el buscador --}}
                <input class="w-full" wire:model="search" type="text" placeholder="Buscar Actividades..."/>
        
            </div>
            <div class="mt-6 w-full shadow-md">
                <div class="w-full p-3 -mb-3 z-10 relative bg-white border-solid border rounded-xl border-gray-200  title-activity">
                    <h3 class="font-black">Últimas publicaciones</h3>
                </div>
                <div class="w-full p-4 border-solid border border-gray-500 rounded-lg">
                    <ul>
                        @foreach ($lastActivities as $lastActivity)
                            <li class="my-1">
                                <span>
                                    <a href="{{ route('activities.show', $lastActivity->slug) }} " class="flex items-center">
                                        <div class="w-3 h-3 mr-1 bg-gray-500 rounded-full"></div>
                                        <span class="w-full">{{ $lastActivity->title }}</span>
                                    </a>
                                </span>
                            </li>                            
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="mt-6 w-full shadow-md">
                <div class="w-full p-3 -mb-3 z-10 relative bg-white border-solid border rounded-xl border-gray-200  title-activity">
                    <h3 class="font-black">Categorias</h3>
                </div>
                <div class="w-full p-4 border-solid border border-gray-500 rounded-lg">
                    <ul>
                        @foreach ($categories as $category)
                            <li >
                                <span>
                                    <a href="{{ route('activities.show', $category->name) }} " class="flex items-center">
                                        <div class="w-3 h-3 mr-1 bg-gray-500 rounded-full"></div>
                                        <span>{{ $category->name }}</span>
                                    </a>
                                </span>
                            </li>                            
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="mt-6 w-full shadow-md">
                <div class="w-full p-3 -mb-3 z-10 relative bg-white border-solid border rounded-xl border-gray-200  title-activity">
                    <h3 class="font-black">Etiquetas</h3>
                </div>
                <div class="w-full p-4 border-solid border border-gray-500 rounded-lg">
                    <ul>
                        @foreach ($tags as $tags)
                            <li class=" text-blue-600">
                                <span>
                                    <a href="{{--{{ route('activities.show', $tags->name) }}--}} " class="flex items-center">
                                        <div class="mr-1">#</div>
                                        <span>{{ $tags->name }}</span>
                                    </a>
                                </span> 
                            </li>                            
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>