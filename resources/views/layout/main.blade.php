<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <link href="https: //fonts.googleapis.com/css2? family=Roboto" rel="stylesheet">

         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/style.css">



        <title>@yield('titulo')</title>

       
    </head>
    <body>
        <header>
            <nav  class="navbar navbar-expand-lg bg-light">

                <div class="container-fluid" id="navBar">

                    <a class="navbar-brand" href="/">
                        <img src="/img/hdcevents_logo.svg" id="navbar-img">
                    </a>
                    
                    <div class="collapse navbar-collapse" id="navbarNav">

                        <ul class="navbar-nav">

                            <li class="nav-item">
                                 <a class="nav-link active" aria-current="page" href="/">Eventos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="/eventos/criar">Criar eventos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="/eventos/logar">Entrar</a>
                            </li>

                            <li class="nav-item">
                                 <a class="nav-link active" href="/eventos/cadastrar">Cadastrar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        @yield('content')
       

        <footer>Loft eventos &copy; 2022</footer>

        <script  type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script> 
        <script  nomodule  src = "https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js" > </script>

        <script src="/js/script.js"></script>
    </body>
</html>
