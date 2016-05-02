<!-- Sección de herencia plantilla -->
@extends('layouts.HFlogin')

<!-- Sección de título dinámico de la página -->
@section('title')
    GXSTORE® - Sign Up

@stop

<!-- Sección contenido de la página -->
@section('content')

<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

  <div class="panel panel-warning">

    <div class="panel-heading">
      <div class="panel-title">Sign Up</div>
      <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="{{ URL::route('v_signin') }}">Sign In</a></div>
    </div>

    <div class="panel-body" >

      {!! Form::open([  'route'     => 'gxstore.account.signup.store', 'method' => 'POST',
                        'id'        => 'signupform', 'role'  => 'form',
                        'class'     => 'form-horizontal'
                        ]) !!}


        <div id="signupalert" style="display:none" class="alert alert-danger">
          <p>Error:</p>
          <span></span>
        </div>

        <div class="form-group">
          <label for="email" class="col-md-3 control-label">Email</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="email" placeholder="Email Address" required="required">
          </div>
        </div>

        <div class="form-group">
          <label for="firstname" class="col-md-3 control-label">First Name</label>
          <div class="col-md-9">
            <input type="text" onkeypress="return lettersOnly(event);" class="form-control" name="firstname" placeholder="First Name" required="required">
          </div>
        </div>

        <div class="form-group">
          <label for="lastname" class="col-md-3 control-label">Last Name</label>
          <div class="col-md-9">
            <input type="text" onkeypress="return lettersOnly(event);" class="form-control" name="lastname" placeholder="Last Name" required="required">
          </div>
        </div>

        <div class="form-group">
          <label for="password" class="col-md-3 control-label">Password</label>
          <div class="col-md-9">
            <input type="password" class="form-control" name="passwd" placeholder="Password" required="required">
          </div>
        </div>

        <div class="form-group">
          <label for="password" class="col-md-3 control-label">Retype Password</label required="required">
            <div class="col-md-9">
              <input type="password" class="form-control" name="repasswd" placeholder="Retype Password">
            </div>
        </div>

        <div class="form-group">
          <!-- Buttons -->
          <div class="col-md-offset-3 col-md-9">
            <input type="submit" class="btn btn-md btn-warning" value="Sign Up" />
          </div>
        </div>

      {!! Form::close() !!}

  </div>
 </div>
</div>

@stop
