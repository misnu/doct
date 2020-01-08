<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VexDoc 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/iCheck/square/blue.css">



  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>VEX</b>Doc</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    @if ($message = Session::get('warning'))
      <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
    </div>
    @endif
    <form action="/login" method="post">
    @csrf
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username" style="background-color: #ffffffa1;">
        <span class="glyphicon glyphicon-envelope form-control-feedback" style="color: #00BCD4;"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" style="background-color: #ffffffa1;">
        <span class="glyphicon glyphicon-lock form-control-feedback" style="color: #00BCD4;"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
       
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" style="background-color: #00BCD4; border-color: #e6eaecd9;">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<!-- jQuery 3 -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/plugins/iCheck/icheck.min.js"></script>

</body>
</html>
