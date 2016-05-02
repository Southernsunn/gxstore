<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <!-- Recursos Locales -->
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/bootstrap-social.css') !!}

    <title>@yield('title')</title>
  </head>

  <body>

    <div class="container">
      @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {!! Html::script('js/inputsCharacterValidation.js'); !!}
  </body>
</html>
