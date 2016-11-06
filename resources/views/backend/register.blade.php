@extends("layout.master")

@section("content")

<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>WPA</b>#24</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="{{ url('backend/register') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input name="name" type="text" class="form-control" placeholder="Full name" value="{{ old('name') }}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        @if($errors->has("name"))
          <span class="text-danger">{{ $errors->first("name")}}</span>  
        @endif
      </div>
      <div class="form-group has-feedback">
        <input name="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if($errors->has("email"))
          <span class="text-danger">{{ $errors->first("email")}}</span>  
        @endif
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Password" value="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if($errors->has("password"))
          <span class="text-danger">{{ $errors->first("password")}}</span>  
        @endif
      </div>
      <div class="form-group has-feedback">
        <input name="password_confirmation" type="password" class="form-control" placeholder="Retype password" value="">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        @if($errors->has("password_confirmation"))
          <span class="text-danger">{{ $errors->first("password_confirmation")}}</span>  
        @endif
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input name="terms_and_condition" type="checkbox"> I agree to the <a href="#">terms</a>
              @if($errors->has("terms_and_condition"))
                <br>
                <span class="text-danger">{{ $errors->first("terms_and_condition")}}</span>  
              @endif
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="login.html" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
@endsection
