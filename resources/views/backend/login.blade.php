@extends("layout.master")

@section("content")
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>WPA</b>24V</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{ url('backend/login') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group has-feedback">

        <input name="email" type="email" class="form-control" placeholder="Email" value={{ old('email') }}>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if($errors->has("email"))
          <span class="text-danger">{{ $errors->first("email")}}</span>  

        @endif
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Password" value="{{ old('password') }}">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

         @if($errors->has("password"))
          <span class="text-danger">{{ $errors->first("password")}}</span>  

        @endif
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>

              <input type="checkbox" name='remember_me'> Remember Me
               @if($errors->has("remember_me"))
                <br>
                <span class="text-danger">{{ $errors->first("remember_me")}}</span>  
              @endif

            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection