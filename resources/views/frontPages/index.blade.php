<!-- Sección de herencia plantilla -->
@extends('layouts.HFfront')

<!-- Sección de título dinámico de la página -->
@section('title')
    GXSTORE® - Home

@stop
<style media="screen">
  div.center {
    width: 90%;
    margin: 0 auto;
    margin-top: 20px;
  }
</style>
<!-- Sección contenido de la página -->
@section('content')

<div id="bodyContainer" class="">



<div class="center row">

  <div class="alert alert-warning">
    <h3><b>Bienvenidos a GXSTORE.</b></h3>
  </div>
  <br>

  <div class="alert alert-info">
    <h4><strong>Proyecto final de ATW 2016.</strong></h4>
    <br>
    La aplicación está en etapa de desarrollo por lo cual los siguientes módulos se encuentran en dicha fase:

    <br><br>

    <span class="fa fa-hand-o-right">&nbsp;&nbsp;&nbsp;<strong>SHOP.</strong></span><br><br>
    <span class="fa fa-hand-o-right">&nbsp;&nbsp;&nbsp;<strong>SALE.</strong></span><br><br>
    <span class="fa fa-hand-o-right">&nbsp;&nbsp;&nbsp;<strong>SUPPORT.</strong></span><br><br>
    <span class="fa fa-hand-o-right">&nbsp;&nbsp;&nbsp;Ver el detalle de los productos.</span><br><br>
    <span class="fa fa-hand-o-right">&nbsp;&nbsp;&nbsp;<strong>Realizar una compra <span class="fa fa-frown-o"></span></strong></span><br><br>
    <span class="fa fa-hand-o-right">&nbsp;&nbsp;&nbsp;Opciones de tu cuenta (a excepción “Log Out”, obvio).</span>
  </div>

  <br>
  <div class="alert alert-success">
    <h4><strong>Hey! Pero no todo está perdido&nbsp;<span class="fa fa-smile-o"></span>, aun puedes hacer uno de:</strong></h4>
    <br>
    <br>
    <span class="fa fa-hand-o-right">&nbsp;&nbsp;&nbsp;<strong>PRODUCTS.</strong> Ver todos nuestros productos disponibles</span><br><br>
    <span class="fa fa-hand-o-right">&nbsp;&nbsp;&nbsp;<strong>CART.</strong> Poner tus productos favoritos en el carrito de compras.</span><br><br>
    <span class="fa fa-hand-o-right">&nbsp;&nbsp;&nbsp;<strong>LOGIN or SIGN UP. OH!, Pero antes de hacer eso ↑↑↑, tienes que iniciar sesión o crear una cuenta.</strong></span><br><br>
    <span class="fa fa-hand-o-right">&nbsp;&nbsp;&nbsp;<strong>MMMM!</strong> Si... yo se aún queda mucho trabajo que hacer.  <strong>:O</strong></span><br><br>
    <span class="fa fa-hand-o-right">&nbsp;&nbsp;&nbsp;<strong>AH!</strong> ¿Por qué en inglés?, cuestión personal.  <strong>o.O</strong></span><br><br>
    <span class="fa fa-hand-o-right">&nbsp;&nbsp;&nbsp;<strong>Bye!</strong> Esta página está siendo desarrollada con mucho amor de parte del estudiante a cargo y escuchando bachata mientras escribo líneas de código.<strong>;)</strong></span><br><br>

  </div>

</div>

</div>{{-- DIV FULL conteiner --}}

@stop
