<?php

require 'php/bootstrap.php';
$page = new MainClass();

$page->header();

?>

<div class="row">
  <div class="menu-container">
    <div class="col-md-4 col-sm-12 dash-menu-box" style="display: none;" id="dash-menu-item-1">
      <div class="box box-primary">
        <div class="box-header with-header">
          <h3 class="box-title">Activiteiten</h3>
        </div>
        <div class="box-body">
          Klik op de knop hieronder om naar Activiteiten te gaan<br><br>
          Hier kunt u uzelf opgeven voor aangeboden activiteiten, of uw eigen activiteit organiseren<br>
          <i class="ion ion-calendar dash-menu-icon"></i>
          <a href="activities.php" class="btn btn-primary btn-block btn-dash-menu"><b>Ga naar Activiteiten</b></a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12 dash-menu-box dash-diensten" style="display: none;" id="dash-menu-item-2">
      <div class="box box-primary">
        <div class="box-header with-header">
          <h3 class="box-title">Diensten</h3>
        </div>
        <div class="box-body">
          Klik op de knop hieronder om naar Diensten te gaan<br><br>
          Hier kunt u gebruik maken van de door buurt aangeboden diensten, of uw eigen dienst aanbieden<br>
          <i class="ion ion-android-people dash-menu-icon"></i>
          <a href="services.php" class="btn btn-primary btn-block btn-dash-menu"><b>Ga naar Diensten</b></a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12 dash-menu-box" style="display: none;" id="dash-menu-item-3">
      <div class="box box-primary">
        <div class="box-header with-header">
          <h3 class="box-title">Deelhoek</h3>
        </div>
        <div class="box-body">
          Klik op de knop hieronder om naar Deelhoek te gaan<br><br>
          Hier kunt u de door buurt aangeboden spullen lenen, of uw eigen spullen uitlenen aan de buurt<br>
          <i class="ion ion-hammer dash-menu-icon"></i>
          <a href="supplies.php" class="btn btn-primary btn-block btn-dash-menu"><b>Ga naar de Deelhoek</b></a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $page->footer(); ?>
<script>
  $( document ).ready(function () {
    $('#dash-menu-item-1').fadeIn(1000)
    $('#dash-menu-item-2').fadeIn(2300)
    $('#dash-menu-item-3').fadeIn(1000)
  })
</script>
