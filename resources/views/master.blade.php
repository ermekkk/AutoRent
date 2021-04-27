
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') | AutoRent</title>
        <!-- Fonts -->   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
             <!-- Styles -->
             <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
   
    </head>
    <body >
        <header id="header" class="sticky-top " >
        <nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(45deg, #000066, blue);">
            <div class="container">

                 <a href="/" class="navbar-brand font-weight-bold" style="font-size:25px;"><span  style="color:var(--main-color)">Auto</span>Rent</a>
                 <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navContent" aria-expanded="false" aris-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                 </button>                             
                 <div class="collapse navbar-collapse " id="navContent">
                    <ul class="navbar-nav m-auto mb-3 mb-lg-0 ">
                        <li class="nav-item  pr-2">
                            <a href="{{route('index')}}" class="nav-link header-link ">Главная</a>
                        </li>
                        <li class="nav-item  pr-2">
                            <a href="{{route('categories')}}" class="nav-link header-link">Категории</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{route('brands')}}" class="nav-link header-link">Марки</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('cars')}}" class="nav-link header-link">Автомобили</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link header-link">Условия аренды</a>
                        </li>
                        <li class="nav-item  pr-2">
                            <a href="/contacts" class="nav-link header-link">Контакты</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                          @if (Route::has('login'))
                                <div class="top-right links">
                           @auth
                             <a class='aut-st' href="{{ url('/home') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                           @else
                              <a class="aut-st" href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i> Войти</a>
                           @endauth
                </div>
            @endif
                 </div>
            </div>
        </div></nav>
    </header>
    <div style=""></div>
<div class="container ">
    <div class="starter-template">
        @if(session()->has('success'))
           <br><br><p class="alert alert-success">{{session()->get('success')}}</p>
        @endif
         @if(session()->has('warning'))
           <br><br><p class="alert alert-warning">{{session()->get('warning')}}</p>
        @endif
    </div>
</div>
@yield('content')
      <footer style="">
        <div class="footer-top  " >
            <div class="container">
                <div class="row" d-flex="" justify-content-center="">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="footer-info">
                            <h3><span  style="color:var(--main-color)">Auto</span>Rent</h3>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-links text-center">
                        <h4>Меню</h4>
                        <div class="footer-ul">
                        <ul>
                            <li>
                                <a href="{{route('index')}}">Главная</a>
                            </li>
                            <li>
                                <a href="{{route('categories')}}">Категории</a>
                            </li>
                            <li>
                                <a href="{{route('brands')}}">Марки</a>
                            </li>
                            
                            <li>
                                <a href="{{route('cars')}}">Автомобили</a>
                            </li>
                            <li>
                                <a href="#pr">Условия аренды</a>
                            </li>
                            <li>
                                <a href="#con">Контакты</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-12 footer-social text-center">
                        
                            <div class="social-links mt-3 ">
                                <a href="https://api.whatsapp.com/send?phone=+996222286103" target="_blank"><i class="fab fa-whatsapp " aria-hidden="true"></i></a>
                                <a href="tg://resolve?domain=Azimbek_01" target="_blank"><i class="fab fa-telegram" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/world_ofsites/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
