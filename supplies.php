<?php
 require 'php/bootstrap.php';
 $a = new MainClass();
$a->header();
//
// $db = new Database();
//
// $sql = 'SELECT supplies.name, supplies.amount, profiles.first_name, supplies.date_begin, supplies.date_end FROM supplies, profiles, users WHERE supplies.user_id = profiles.user_id';
// $db->query($sql);
?>
<head>
<body>
   <div class="row">
      <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
               <h3 class="box-title">Responsive Hover Table</h3>
               <div class="box-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                     <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                     <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <div class="span2">
               <table class="table table-hover">
                  <tr>
                     <th>Product</th>
                     <th>Aanbieder</th>
                     <th>Voorraad</th>
                     <th width="100">Beschikbaar vanaf</th>
                  </tr>
                  <tr>
                     <td>Bladblazer</td>
                     <td>Ans Achtertuin</td>
                     <td>1</td>
                     <td><button type="button" class="btn btn-block btn-success">Reseveer</button></td>
                  </tr>
                  <tr>
                     <td>Heggenschaar</td>
                     <td>Bart van Boven</td>
                     <td>2</td>
                     <td><button type="button" class="btn btn-block btn-success">Reseveer</button></td>
                  </tr>
                  <tr>
                     <td>Grasmaaier</td>
                     <td>Charlie Cliff</td>
                     <td>0</td>
                     <td><button type="button" class="btn btn-block btn-warning disabled">Per 15-11-2016</button></td>
                  </tr>
                  <tr>
                     <td>Hogedrukspuit</td>
                     <td>Dirk van den Dongen</td>
                     <td>1</td>
                     <td><button type="button" class="btn  btn-block btn-success">Reseveer</button></td>
                  </tr>
                  <tr>
                     <td>Speaker</td>
                     <td>Ed van Eijk</td>
                     <td>4</td>
                     <td><button type="button" class="btn btn-block btn-success">Reseveer</button></td>
                  </tr>
                  <tr>
                     <td>Schroevendraaier</td>
                     <td>Fabiënne Faas</td>
                     <td>6</td>
                     <td><button type="button" class="btn btn-block btn-success">Reseveer</button></td>
                  </tr>
                  <tr>
                     <td>Veerklemmen</td>
                     <td>Gerard Gallileo</td>
                     <td>0</td>
                     <td><button type="button" class="btn btn-block btn-warning disabled">Per 01-12-2016</button></td>
                  </tr>
                  <tr>
                     <td>Klopboormachine</td>
                     <td>Helga de Hel</td>
                     <td>2</td>
                     <td><button type="button" class="btn btn-block btn-success">Reseveer</button></td>
                  </tr>
                  <tr>
                     <td>Freesmachines</td>
                     <td>Iris innek</td>
                     <td>0</td>
                     <td><button type="button" class="btn btn-block btn-warning disabled">Per 21-11-2016</button></td>
                  </tr>
                  <tr>
                     <td>Heteluchtpistool</td>
                     <td>Jan Janssen</td>
                     <td>3</td>
                     <td><button type="button" class="btn btn-block btn-success">Reseveer nu</button></td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
   </div>
</body>
</head>
<?php $a->footer(); ?>
