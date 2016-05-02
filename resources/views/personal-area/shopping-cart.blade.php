<!-- Sección de herencia plantilla -->
@extends('layouts.HFfront')

<!-- Sección de título dinámico de la página -->
@section('title')
    GXSTORE® - Shopping Cart

@stop

<style media="screen">
th {
    background-color: #f7ca18;
    color: #23252b;
}
</style>

<!-- Sección contenido de la página -->
@section('content')
@include('alerts.addCart')

<div class="row">

@if($cart!=null)

  <div class="" style="">
    <table class="table">

      <thead>
        <tr class="bg-warning">
          <th></th>
          <th></th>
          <th>Quantity</th>
          <th>Price</th>
        </tr>
      </thead>

      @foreach($cart as $data)
        <tr>
          <td style="text-align: center;">{!! Html::image($data->attachment, 'products',array('class' => 'img-rounded', 'alt' => '', 'width' => '100','height' => '100')) !!}</td>
          <td>{{$data->product_name}}</td>
          <td>{{$data->quantity}}</td>
          <td style="color: #d9534f;"><b>{{'$'.$data->price}}</b></td>
        </tr>
      @endforeach

      <?php

        foreach ($SubTotal_A as $data) {
          # code...
          $SubTotal_B = $data->SubTotal_Cash;
          $Quantity   = $data->SubTotal_Quantity;
        }

       ?>

      <tfoot>
        <tr class="bg-warning">
          <th></th>
          <th></th>
          <th>Items<h4><b>

            @if($Quantity!=null)
              <?php echo $Quantity ?>
              @else
                <?php echo '0' ?>
            @endif

          </b></h4></th>

          <th>SubTotal

            <h4><b>
            @if($SubTotal_B!=null)
              <?php echo'$'.$SubTotal_B ?>
              @else
                <?php echo'$'.'0.00' ?>
            @endif
          </b></h4>

        </th>
        </tr>
      </tfoot>
    </table>
    <button type="button" class="btn btn-success btn-block"><span class="fa fa-credit-card-alt"></span><b>&nbsp;&nbsp;&nbsp;Proceed to checkout</b></button>
  </div>
  @else
    <div class="alert alert-info alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Hey!</strong> You haven't selected any items
    </div>
@endif
</div>
@stop
