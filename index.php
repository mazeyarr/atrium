<?php

require 'php/bootstrap.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>'t Atrium</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box" id="signin-box" style="display: none;">
  <div class="register-logo">
    <a href="index2.html"><strong>'t</strong> Atrium</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Inloggen</p>

    <form action="index.html" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Gebruikersnaam" id="username">
        <span class="fa fa-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Wachtwoord" id="password">
        <span class="fa fa-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <a href="registration.php" class="">Geen account ?</a>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat" id="login">Inloggen</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="js/bootstrap.min.js"></script>
<script>
  $( document ).ready(function () {
    $('#signin-box').fadeIn(1000)
    $('#login').click(function (e) {
      e.preventDefault()
      if ($('#username').val() == 'mazeyar' && $('#password').val() == 'test123') window.location.replace("dashboard.php")
      if ($('#username') != 'mazeyar') error('username')
      if ($('#password') != 'test123') error('password')
    })
    function error(type) {
      var username = $('#username')
      var password = $('#password')
      switch (type) {
        case 'username':
          username.css('border', '1px solid red')
          break
        case 'password':
          password.css('border', '1px solid red')
          break
      }
    }
  })
</script>
</body>
</html>
