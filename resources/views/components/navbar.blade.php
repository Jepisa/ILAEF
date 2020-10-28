<style type="text/css">
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

    }
    @media (min-width: 1024px) {
        .collapse li{
            height: 55px;
            min-width: 150px;
            margin: 5px;
        }
    }
</style>

<div class="divNav">
    <div class="navbar" id="navbar">
        <div class="logos">
            <div class="logoNavBar">
                <img src="{{asset('/img/logo.png')}}" alt="">
            </div>
            <div class="logoMenu" id="menu">
                <img src="{{asset('/icons/menu.png')}}" alt="">
            </div>
        </div>
        <div class="collapse" id="collapse">
            <ul>
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">Quienes Somos</a>
                </li>
                <li>
                    <a href="">Nuestra Mision</a>
                </li>
                <li>
                    <a href="">Agenda</a>
                </li>
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