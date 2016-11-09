<?php
require 'php/bootstrap.php';
$a = new MainClass();
$a->header();

$db = new Database();

$sql = 'SELECT `name`, `amount`, `date_begin`, `date_end` FROM `supplies`';
$db->query($sql);
?>
<head>
<body>
  <!-- =============================================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="row">
    <div class="col-sm-12">
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
          <h3 class="box-title">TITEL</h3>
        </div>
        <div class="box-body">
          De huidige voorraad.
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
                <?php while($row = $db->Fetch())
                {
                  echo "  <tr>";
                  echo "  <td>".$row['name']."  </td> ";
                  echo "  <td>".$row['amount']."  </td> ";
                  echo "  <td> - </td> ";
                  echo "  <td>".$row['date_begin']."  </td> ";
                  echo "  <td>".$row['date_end']."  </td> ";
                  echo "  </tr>";
                }?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
</div>
</body>
</head>

<?php $a->footer(); ?>
