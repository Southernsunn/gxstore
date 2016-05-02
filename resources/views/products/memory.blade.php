<!-- Sección de herencia plantilla -->
@extends('layouts.HFfront')

<!-- Sección de título dinámico de la página -->
@section('title')
    GXSTORE® - Memories

@stop

<!-- Sección contenido de la página -->
@section('content')

<style media="screen">
  div.center {
  width: 90%;
  margin: 0 auto;
  margin-top: 20px;
  }
</style>

<?php $path = public_path(); ?>
<div id="bodyContainer" class="">
<div class="center">

  @foreach($query_products as $data)

  <div class="col-lg-4">
    {!! Html::image($data->attachment, 'Memories',array('class' => 'img-rounded', 'alt' => '', 'width' => '140','height' => '140')) !!}
    <h2>{{$data->product_name}}</h2>
    <h4 style="color: #5cb85c;">{{'$'.$data->price}}</h4>
    <p>
      <a href="" data-toggle="tooltip" data-placement="bottom" title="Developing module" class="btn btn-md btn-social btn-reddit">
      <span class="fa fa-bars"></span> View details &raquo;
      </a>
      <a href="{{ URL::route('gxstore.shopping-cart.show', $parameters = $data->product_id) }}" class="btn btn-md btn-social btn-openid">
      <span class="fa fa-shopping-cart"></span> Add to Cart
      </a>
    </p>
  </div>{{-- DIV element conteiner --}}

  @endforeach{{-- foreach para imprimir el array --}}
</div>
</div>{{-- DIV FULL conteiner --}}

@stop
