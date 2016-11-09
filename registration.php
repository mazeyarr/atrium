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

  <link rel="stylesheet" href="css/sweetalert2.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<style>
</style>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index2.html"><strong>'t</strong> Atrium</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Gebruiker registreren</p>

    <form action="#" method="post">

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="first_name" placeholder="Voornaam" id="name">
        <span class="fa fa-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="last_name" placeholder="Achternaam" id="surname">
        <span class="fa fa-users form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="E-mail" id="email">
        <span class="fa fa-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <select class="form-control" name="gender" id="gender">
         <option value="man">Man</option>
         <option value="vrouw">Vrouw</option>
       </select>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="input_geboortedatum" name="birthday" placeholder="dd/mm/jjjj" id="date">
        <span class="fa fa-calendar form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="skills" placeholder="Vaardigheden" id="skills">
        <span class="fa fa-wrench form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <div class="row">
          <div class="col-sm-8">
            <input type="text" class="form-control" name="street" placeholder="Straatnaam" id="street">
          </div>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="house_number" placeholder="#" id="streetnumber">
          </div>
          <span class="fa fa-home form-control-feedback"></span>
        </div>
      </div>

      <div class="form-group has-feedback">

      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat" id="signup">Registreren</button>
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

<script src="js/sweetalert2.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#input_geboortedatum').mask('00/00/0000');

    $('#signup').click(function (e) {
        e.preventDefault();
        var name            = $('#name').val()
        var surname         = $('#surname').val()
        var email           = $('#email').val()
        var gender          = $('#gender').val()
        var date            = $('#date').val()
        var skills          = $('#skills').val()
        var street          = $('#street').val()
        var streetnumber    = $('#streetnumber').val()

        swal({
            title: 'Submit email to run ajax request',
            html: '<div class="row">' +
                    '<div class="col-xs-6" style="text-align: left; padding-left:50px;">' +
                        '<p>Naam:</p>' +
                        '<p>Achternaam:</p>' +
                        '<p>Email:</p>' +
                        '<p>Geschlacht:</p>' +
                        '<p>Geboortedatum:</p>' +
                        '<p>Vaardigheden:</p>' +
                        '<p>Adres:</p>' +
                    '</div>' +
                    '<div class="col-xs-6" style="text-align: left; padding-left:50px;">' +
                        '<p>'+ name +'</p>' +
                        '<p>'+ surname +'</p>' +
                        '<p>'+ email +'</p>' +
                        '<p>'+ gender +'</p>' +
                        '<p>'+ date +'</p>' +
                        '<p>'+ skills +'</p>' +
                        '<p>'+ street + streetnumber +'</p>' +
                    '</div>' +
                    '</div>',
            showCancelButton: true,
            confirmButtonText: 'Registreren',
            showLoaderOnConfirm: true,
            allowOutsideClick: false
        }).then(function(email) {
            swal({
                type: 'success',
                title: 'Registratie voltooid!',
            }).then(function () {
                window.location.replace("/index.php");
            })
        })

        /*swal({
            title: 'Registratie',
            type: 'success',
            html:
            '<div class="row">' +
                '<div class="col-xs-6" style="text-align: left; padding-left:50px;">' +
                    '<p>Naam:</p>' +
                    '<p>Achternaam:</p>' +
                    '<p>Email:</p>' +
                    '<p>Geschlacht:</p>' +
                    '<p>Geboortedatum:</p>' +
                    '<p>Vaardigheden:</p>' +
                    '<p>Adres:</p>' +
                '</div>' +
                '<div class="col-xs-6" style="text-align: left; padding-left:50px;">' +
                    '<p>'+ name +'</p>' +
                    '<p>'+ surname +'</p>' +
                    '<p>'+ email +'</p>' +
                    '<p>'+ gender +'</p>' +
                    '<p>'+ date +'</p>' +
                    '<p>'+ skills +'</p>' +
                    '<p>'+ street + streetnumber +'</p>' +
                '</div>' +
            '</div>',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText:
                '<i class="fa fa-thumbs-up"></i> Great!',
            cancelButtonText:
                '<i class="fa fa-thumbs-down"></i>'
        })*/
    })
  });
</script>
</body>
</html>
