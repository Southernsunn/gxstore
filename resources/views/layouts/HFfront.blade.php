<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <!-- Recursos Locales -->
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/bootstrap-social.css') !!}
    {!! Html::style('css/layouts.css')!!}

    <!-- Título dinámico de la página -->
    <title>@yield('title')</title>

  </head>

  <body id="">
    <!-- Panel de administración -->
    <header>
          <nav class="navbar navbar-default navbar-static-top" role="navigation">
          <!-- Link img de banner Uvirtual -->

          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" name="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-sate">
                <span class="sr-only">Desplegar / Ocultar menú</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="{{ URL::route('gxstore.index') }}">{!! Html::image('img/gxstore-logo-full.png', 'gxstore-wolf',array('class' => 'img-responsive')) !!}</a>
            </div>
            <!--Creando Menú-->
            <div class="collapse navbar-collapse" id="navegacion-sate">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                    PRODUCTS <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ URL::route('gxstore.products.cases.index') }}">CASES</a></li>
                    <li><a href="{{ URL::route('gxstore.products.cpu.index') }}">CPU</a></li>
                    <li><a href="{{ URL::route('gxstore.products.memories.index') }}">MEMORY</a></li>
                    <li><a href="{{ URL::route('gxstore.products.storage.index') }}">STORAGE</a></li>
                    <li><a href="{{ URL::route('gxstore.products.graphics-cards.index') }}">GRAPHICS CARDS</a></li>
                    <li><a href="{{ URL::route('gxstore.products.cooling.index') }}">COOLING</a></li>
                    <li><a href="{{ URL::route('gxstore.products.motherboards.index') }}">MOTHERBOARD</a></li>
                    <li><a href="{{ URL::route('gxstore.products.psu.index') }}">PSU</a></li>
                    <li><a href="{{ URL::route('gxstore.products.monitors.index') }}">MONITOR</a></li>
                    <li><a href="{{ URL::route('gxstore.products.laptops.index') }}">LAPTOPS</a></li>
                    <li><a href="{{ URL::route('gxstore.products.software.index') }}">SOFTWARE</a></li>
                    <li><a href="{{ URL::route('gxstore.products.parts-accessories.index') }}">PARTS AND ACCESSORIES</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Ups! We are developing this module" class="dropdown-toggle" data-toggle="dropdown" role="button">
                    SHOP <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">DESKTOPS</a></li>
                    <li><a href="#">LAPTOPS</a></li>
                    <li><a href="#">PARTS AND ACCESSORIES</a></li>
                  </ul>
                </li>
                <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Ups! We are developing this module">SALE</a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Ups! We are developing this module">SUPPORT</a></li>
              </ul>

              @if(Auth::check())


              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="{{ URL::route('gxstore.my-shopping-cart.details.index') }}">
                    CART&nbsp;
                    <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i>&nbsp;
                    <span class="badge"></span>
                  </a>
                </li>
                <li class="navbar-right dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                    <b>
                      Welcome back, <b>{!!Auth::user()->name. ' ' .Auth::user()->last_name!!}</b>
                    </b> <span class="caret"></span>
                  </a>
                  <ul  class="dropdown-menu" role="menu">
                     <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Developing module"><span class="fa fa-user"></span>&nbsp;&nbsp;&nbsp;My account</a></li>
                     <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Developing module"><span class="fa fa-shopping-bag"></span>&nbsp;&nbsp;&nbsp;My Orders</a></li>
                     <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Developing module"><span class="fa fa-heart"></span>&nbsp;&nbsp;&nbsp;Favorite Items</a></li>
                     <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Developing module"><span class="fa fa-cogs"></span>&nbsp;&nbsp;&nbsp;Settings</a></li>
                     <li><a href="{{ URL::route('logout') }}"><span class="fa fa-sign-out"></span>&nbsp;&nbsp;&nbsp;Log Out</a></li>
                  </ul>
                </li>
              </ul><!-- Cart and Welcome message -->
            @else
            <ul class="nav navbar-nav navbar-right">
              <li class="navbar-right dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                  <b>
                    Your Account
                  </b><span class="caret"></span>
                </a>
                <ul  class="dropdown-menu" role="menu">
                   <li><a href="{{ URL::route('v_signin') }}"><span class="fa fa-sign-in"></span>&nbsp;&nbsp;&nbsp;Sing In</a></li>
                </ul>
              </li>
            </ul><!-- Cart and Welcome message -->
              @endif
            </div>
          </div>
          </nav>
    </header>

    <!-- Imprimiendo layout de contenido -->
    <div class="">

      @yield('content')

    </div>

    <footer>
      GXSTORE® 2016 ATW Project --- Powered by Ernesto Arturo Martínez Portillo
    </footer>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {!! HTML::script('js/tooltip.js') !!}
  </body>
</html>
