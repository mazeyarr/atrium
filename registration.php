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
<div class="register-box">
  <div class="register-logo">
    <a href="index2.html"><strong>'t</strong> Atrium</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Gebruiker registreren</p>

    <form action="index.html" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="first_name" placeholder="Voornaam">
        <span class="fa fa-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="last_name" placeholder="Achternaam">
        <span class="fa fa-users form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="E-mail">
        <span class="fa fa-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <select class="form-control" name="gender" id="sel1">
         <option value="male">Man</option>
         <option value="female">Vrouw</option>
       </select>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="input_geboortedatum" name="birthday" placeholder="dd/mm/jjjj">
        <span class="fa fa-calendar form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="skills" placeholder="Vaardigheden">
        <span class="fa fa-wrench form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <div class="row">
          <div class="col-sm-8">
            <input type="text" class="form-control" name="street" placeholder="Straatnaam">
          </div>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="house_number" placeholder="#">
          </div>
          <span class="fa fa-home form-control-feedback"></span>
        </div>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registreren</button>
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
<!-- Masked Input Plugin -->
<script src="tools/jquerymask.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#input_geboortedatum').mask('00/00/0000');
  });
</script>
</body>
</html>
