<!-- Sección de herencia plantilla -->
@extends('layouts.HFlogin')

<!-- Sección de título dinámico de la página -->
@section('title')
    GXSTORE® - Sign In

@stop

<?php $message = Session::get('message') ?>
@if($message=='store')

  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Success!</strong> You can now log in with your new user.
  </div>
@elseif($message=='signOrsignUP')
  <div class="alert alert-info alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong><span class="fa fa-info-circle"></span></strong> First login or create your account.
  </div>
@endif

<!-- Sección contenido de la página -->
@include('alerts.error_login')
@section('content')

<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
  <div class="panel panel-warning" >
    <div class="panel-heading">
      <div class="panel-title">Sign In</div>
      <div style="float:right; font-size: 80%; position: relative; top:-10px">{{--<a href="#">Forgot password?</a>--}}</div>
    </div>

    <div style="padding-top:30px" class="panel-body" >
      <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

      {!! Form::open([  'route'     => 'gxstore.authenticate.get-access.store', 'method' => 'POST',
                        'id'        => 'loginform', 'role'  => 'form',
                        'class'     => 'form-horizontal'
                        ]) !!}


          <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="login-username" type="email" class="form-control" name="email" value="" placeholder="email" required="required">
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="login-password" type="password" class="form-control" name="passwd" placeholder="password" required="required">
          </div>

          <div class="input-group">
            <div class="checkbox">
              <label>
                <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
              </label>
            </div>
          </div>

          {{-- Buttons --}}
          <div style="margin-top:10px" class="form-group">
            <div class="col-sm-12 controls">
              <input type="submit" class="btn btn-md btn-warning" value="Login" />
              {{-- <a href="#" class="btn btn-md btn-social btn-facebook" type="submit" name="login"><span class="fa fa-facebook"></span>Login with Facebook</a> --}}
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-12 control">
              <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                Don't have an account!
                <a href="{{ URL::route('v_signup') }}" >
                Sign Up Here
                </a>
              </div>
            </div>
          </div>

        {!! Form::close() !!}

      </div>
    </div>
  </div>

@stop
