<style>
    .divNav{
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .navbar {
        height: 50px;
        width: 95%;
        background: white;
        border: 1px solid #e2e2e2;
        border-radius: 25px;
        align-items: end;
        margin: 5px;
        box-shadow: 0px 15px 25px -4px rgba(30, 30, 60, 0.12);
        transition: all 0.4s;
    }
    .logos {
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .logoNavBar img {
        height: 35px;
    }

    .logoMenu img {
        width: 30px;
    }

    .collapse {
        display: none;
        transition: all 0.5s ease-out
    }

    .collapse ul {
        list-style: none;
        padding: 0;
        margin-left: 10px;
        padding: 10px;
        font-family: 'Roboto', sans-serif;
        font-size: 15px;
        /* color: #56478e; */
    }

    .collapse li {
        margin: 10px 0px;
        cursor: pointer;
    }
    .collapse a{
        text-decoration: none;
    }

    @media (min-width: 768px) {
        .navbar {
            display: flex;
            height: 80px;
            width: 100%;
            background: none;
            border-radius:0;
            border: 1px solid rgba(185, 185, 185, 0);
            align-items: end;
            padding: 0;
            margin: 5px;
            box-shadow: none;
            justify-content: space-around;
        }
        .logos{
            width: 20%;
        }
        .logoNavBar img {
            height: 75px;
            border: 1px solid #f1f1f1;
            border-radius: 10px;
            box-shadow: 0px 15px 25px -4px rgba(30, 30, 60, 0.12);
        }
        .logoMenu{
            display: none;
        }
        #collapse{
            display: flex;
        
        }
        
        .collapse ul{
            display: flex;
            font-size: 18px;
        }
        .collapse li{
            height: 50px;
            min-width: 100px;
            text-align: center;
            margin: 5px;
            padding: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #f1f1f1;
            border-radius: 10px;
            background: white;
            box-shadow: 0px 15px 25px -4px rgba(30, 30, 60, 0.12);
            transition: all 0.2s;
        }
        .collapse a{
            color: #003485;
            margin-top: 12px;
            height: 100%;
            width: 100%;
        }
        .collapse li:hover{
            background:#f7f7f7;
        }
        .collapse li:active{
            background: #003485;
        }
        .collapse li:active a{
            color: white;
        }
        #menuAdmin{
            background: #003485;
        }
        #menuAdmin a{
            color: white;
        }
        #menuAdmin a:active{
            color:  #003485;
        }
        #menuAdmin:active{
            background:white;
        }

    }
    @media (min-width: 1024px) {
        .collapse li{
            height: 55px;
            min-width: 150px;
            margin: 5px;
        }
    }

    /* -------------------------- */
    .text-sm {
    font-size: 0.875rem;
}

.border-2 {
    border-width: 2px;
}
.border-transparent {
    border-color: transparent;
}
.rounded-full {
    border-radius: 9999px;
}
.focus\:outline-none:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
}
.focus\:border-gray-300:focus {
    --border-opacity: 1;
    border-color: #d2d6dc;
    border-color: rgba(210, 214, 220, var(--border-opacity));
}

.transition {
    transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform;
}

.duration-150 {
    transition-duration: 150ms;
}
.ease-in-out {
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}


.h-8 {
    height: 2rem;
}
.object-cover {
    object-fit: cover;
}

.miami div .shadow-lg{
    position: absolute;
    z-index: 1;
    margin-left: -153px;
}

</style>
<div class="miami d-flex justify-content-end">
    @auth
        <x-jet-dropdown align="right" width="48">
            <x-slot name="trigger">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <button class="d-flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </button>
                @else
                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                @endif
            </x-slot>

            <x-slot name="content">
                <!-- Account Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Account') }}
                </div>

                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                    {{ __('Profile') }}
                </x-jet-dropdown-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                        {{ __('API Tokens') }}
                    </x-jet-dropdown-link>
                @endif

                <div class="border-t border-gray-100"></div>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-dropdown-link>
                </form>
            </x-slot>
        </x-jet-dropdown>
    @endauth
</div>
<div class="divNav">
    <div class="navbar" id="navbar">

        <div class="logos">
            <div class="logoNavBar">
                <a href="{{ route('home') }}">
                    <img src="{{asset('/img/logo.png')}}" alt="">
                </a>
            </div>
            <div class="logoMenu" id="menu">
                <img src="{{asset('/icons/menu.png')}}" alt="">
            </div>
        </div>
        <div class="collapse" id="collapse">
            <ul>
                <li>
                    <a href="{{ route('home') }}">{{ __('Home') }}</a>
                </li>
                <li>
                    <a href="{{ route('aboutUs') }}">{{ __('Quienes Somos') }}</a>
                </li>
                <li>
                    <a href="{{ route('ourMission') }}">{{ __('Nuestra Mision') }}</a>
                </li>
                {{-- <li>
                    <a href="{{ route('activities.index') }}">{{ __('Actividades') }}</a>
                </li> --}}
                @auth
                <li id="menuAdmin">
                    <a href="/admin">Admin</a>
                </li>
                @endauth
                
            </ul>
        </div>
    </div>
    
</div>

<script>
    const menu = document.getElementById('menu')
    const nav = document.getElementById('navbar')
    const collapse = document.getElementById('collapse')
    menu.addEventListener('click', (ev) => {
        var heightNav = window.getComputedStyle(nav).height;
        if (heightNav == '50px') {
            nav.style.height = "250px"
            collapse.style.display = 'block'
        } else {
            nav.style.height = "50px"
            collapse.style.display = 'none'
        }
    })
</script>