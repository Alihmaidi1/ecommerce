<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{ asset("AdminLTE/plugins/fontawesome-free/css/all.min.css") }}>
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href={{ asset("AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset("AdminLTE/dist/css/adminlte.min.css") }}>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Reset your password</p>

      <form  method="post" action="{{ route("post_forgetpassword") }}">

        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Reset</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src={{ asset("AdminLTE/plugins/jquery/jquery.min.js") }}></script>
<!-- Bootstrap 4 -->
<script src={{ asset("AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js") }}></script>
<!-- AdminLTE App -->
<script src={{ asset("AdminLTE/dist/js/adminlte.min.js") }}></script>
</body>
</html>
