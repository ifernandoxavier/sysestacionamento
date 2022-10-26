<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>@yield('title')</title>

        <!-- Fonte da aplicação -->
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">

        <!-- CSS Bottstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <!-- CSS aplicação -->
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body>
        <div class="navigation">
            <ul>
                <li class="list">
                    <b></b>
                    <b></b>
                    <a href="/">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li class="list ">
                    <b></b>
                    <b></b>
                    <a href="/perfil">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <span class="title">Perfil</span>
                    </a>
                </li>
                <li class="list ">
                    <b></b>
                    <b></b>
                    <a href="/estacionamento">
                        <span class="icon"><ion-icon name="car-outline"></ion-icon></span>
                        <span class="title">Estacionamento</span>
                    </a>
                </li>
                <li class="list ">
                    <b></b>
                    <b></b>
                    <a href="/configuracoes">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Configurações</span>
                    </a>
                </li>
                <li class="list ">
                    <b></b>
                    <b></b>
                    <a href="/contatos">
                        <span class="icon"><ion-icon name="call-outline"></ion-icon></span>
                        <span class="title">Contato</span>
                    </a>
                </li>
                <li class="list">
                    <b></b>
                    <b></b>
                    <a href="#">
                        <span class="icon"><ion-icon name="exit-outline"></ion-icon></ion-icon></span>
                        <span class="title">Sair</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="toggle">
            <ion-icon name="menu-outline" class="open"></ion-icon>     
            <ion-icon name="close-outline" class="close"></ion-icon>
        </div>
        <div class="conteudo active">
            <div> <h1 class="titleTela"> @yield('title') </h1> </div> 
            @yield('content')
        </div>
        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="{{url('js/scripts.js')}}"></script>

        <script>
            let menuToggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation')
            let conteudo = document.querySelector('.conteudo')
            menuToggle.onclick = function(){
                menuToggle.classList.toggle('active');
                navigation.classList.toggle('active');
                conteudo.classList.toggle('active');
            }
            /* EFEITO BRANCO NO NAVIGATION
            let list = document.querySelectorAll('.list');
            for (let i=0; i<list.length; i++){
            list[i].onclick = function(){
            let j = 0;
            while(j < list.length){
            list[j++].className = 'list';
            }   
            list [i].className = 'list active';   
            }
            }
            */
        </script>
    </body>
</html>