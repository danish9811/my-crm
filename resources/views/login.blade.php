<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CRM | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- v4.0.0-alpha.6 -->
  <link rel="stylesheet" href="{{ url('') }}/bootstrap/css/bootstrap.min.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('') }}/css/style.css">
  <link rel="stylesheet" href="{{ url('') }}/css/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ url('') }}/css/et-line-font/et-line-font.css">
  <link rel="stylesheet" href="{{ url('') }}/css/themify-icons/themify-icons.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body">
    <h3 class="login-box-msg">Sign In</h3>

    <!-- if any error in session, spit it here in danger -->
    @if(session()->has('error'))
      <div class="alert alert-danger">{{ session()->get('error') }}</div>
    @endif

    <!-- action made blank, to redirect to the same page | hahaha | good thing -->
    <!-- we are not doing validations here with javascript, because this tutorial series is purely on laravel -->
    <!-- we are learning laravel here, not the other things here | Understood  -->
    <!-- we'll see javascript later | filhaal, we will learn laravel in deep now by building a CRM -->
    <!-- we have only login and one user in the users table only, so we'll focus on login only -->
    <form method="post" autocomplete="off">
      @csrf
      <div class="form-group has-feedback">
        <input type="email" class="form-control sty1" name="email" placeholder="Email">
        @error('email')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control sty1" name="password" placeholder="Password">
        @error('password')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div>
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label><input type="checkbox">Remember Me </label>
            <!-- todo : create forgot password tiny module -->
            <a href="{{ url('forgot-password') }}" class="pull-right"><i class="fa fa-lock"></i> Forgot password?</a>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4 m-t-1">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit" value="submit">Sign In</button>
        </div>
        <!-- /.col -->
      </div>

    </form>
    <!-- form ends here -->

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a></div>
    <!-- /.social-auth-links -->

    <div class="m-t-2">Don't have an account? <a href="{{ url('/register') }}" class="text-center">Sign Up</a></div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

{{-- we wont work with javascript right now, for now only html is enough --}}
{{-- <script src="{{ url('') }}/js/jquery.min.js"></script> --}}

{{-- v4.0.0-alpha.6 --}}
{{-- <script src="{{ url('') }}/bootstrap/js/bootstrap.min.js"></script> --}}

{{-- template --}}
{{-- <script src="{{ url('') }}/js/niche.html"></script>  --}}


</body>

</html>
