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
    <!-- DataTables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <!-- Store style -->
     <link rel="stylesheet" href="css/store.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="css/_all-skins.min.css">
    <!-- Sweetalert CSS-->
    <link rel="stylesheet" href="css/sweetalert2.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="container">
  	<div class="row">
  		<div class="col-sm-12">
  			<div class="row row_package">
  				<div class="register-logo">
  					<a href="index2.html"><strong>'t</strong> Atrium</a>
  					<p style="text-align: center; font-size: 27px;"><i>BrandCoins kopen</i></p>
  				</div>
  				<div class="col-sm-3">
  					<div class="panel panel-default">
  						<div class="panel-heading">Pakket 1</div>
  						<div class="panel-body">
  							<img src="img/coin1.png" class="image_coin"/>
  							<hr/>
  							<button type="button" class="btn btn-success btn_purchase">Koop <span class="coin_amount">10</span></button>
  						</div>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="panel panel-default">
  						<div class="panel-heading">Pakket 2</div>
  						<div class="panel-body">
  							<img src="img/coin2.png" class="image_coin"/>
  							<hr/>
  							<button type="button" class="btn btn-success btn_purchase">Koop <span class="coin_amount">50</span></button>
  						</div>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="panel panel-default">
  						<div class="panel-heading">Pakket 3</div>
  						<div class="panel-body">
  							<img src="img/coin3.png" class="image_coin"/>
  							<hr/>
  							<button type="button" class="btn btn-success btn_purchase">Koop <span class="coin_amount">250</span></button>
  						</div>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="panel panel-default">
  						<div class="panel-heading">Pakket 4</div>
  						<div class="panel-body">
  							<img src="img/coin4.png" class="image_coin"/>
  							<hr/>
  							<button type="button" class="btn btn-success btn_purchase">Koop <span class="coin_amount">1000</span></button>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>


<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
<!-- Sweetalert js-->
<script src="js/sweetalert2.min.js"></script>
<!-- page script -->
<script>
    $( ".btn_purchase" ).click(function() {
        var coin_amount = $(this).find('.coin_amount').html()
      swal("BrandCoins gekocht!").then(function () {
          window.location.replace("profile.php?coinadd=1&coins="+coin_amount)
	  })
    });
</script>
</body>
</html>
