<?php
require 'php/bootstrap.php';
$a = new MainClass();
$a->header();
?>
<head>
<body>
  <!-- =============================================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Supplies
        <small>small text test</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- box with table -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>
        </div>
        <div class="box-body">
          Start creating your amazing application!
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Product naam</th>
                <th>Voorraad</th>
                <th>Aanbieder</th>
                <th>Datum beschikbaar</th>
                <th>Datum terug</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Product naam result</td>
                <td>Voorraad result</td>
                <td>aanbieder result</td>
                <td>01-01-2016</td>
                <td>02-01-2016</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
</body>
</head>

<?php $a->footer(); ?>
