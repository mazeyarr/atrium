<?php

require 'php/bootstrap.php';
$a = new MainClass();

$a->header();

?>

<div class="row">
  <div class="menu-container">
    <div class="col-md-4 col-sm-12 dash-menu-box">
      <div class="box box-primary">
        <div class="box-header with-header">
          <h3 class="box-title">Activiteiten</h3>
        </div>
        <div class="box-body">
          Klik op de knop hieronder om naar de activiteiten te gaan.<br><br>
          Op het volgende scherm kunt u uzelf opgeven voor activiteiten of uw eigen activiteit organiseren.<br>
          <i class="ion ion-calendar dash-menu-icon"></i>
          <a href="#" class="btn btn-primary btn-block btn-dash-menu"><b>Ga naar Activiteiten</b></a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12 dash-menu-box">
      <div class="box box-primary">
        <div class="box-header with-header">
          <h3 class="box-title">Diensten</h3>
        </div>
        <div class="box-body">
          Klik op de knop hieronder om naar de diensten te gaan.<br><br>
          Hier kunt u gebruik maken van diensten welke zijn aangeboden door andere wijkbewoners of uw eigen dienst aanbieden.<br>
          <i class="ion ion-android-people dash-menu-icon"></i>
          <a href="#" class="btn btn-primary btn-block btn-dash-menu"><b>Ga naar Diensten</b></a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12 dash-menu-box">
      <div class="box box-primary">
        <div class="box-header with-header">
          <h3 class="box-title">Deelhoek</h3>
        </div>
        <div class="box-body">
          Klik op de knop hieronder om naar de deelhoek te gaan.<br><br>
          In de Deelhoek kunt u spullen lenen en/of uitlenen van zowel wijkbewoners als 't Atrium<br>
          <i class="ion ion-hammer dash-menu-icon"></i>
          <a href="#" class="btn btn-primary btn-block btn-dash-menu"><b>Ga naar de Deelhoek</b></a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $a->footer(); ?>
