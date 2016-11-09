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
               <table class="table table-hover">
                  <tr>
                     <th>Product</th>
                     <th>Voorraad</th>
                     <th>Aanbieder</th>
                     <th>Datum beschikbaar</th>
                     <th>Datum terug</th>
                  </tr>
                  <tr>
                     <td>Bladblazer</td>
                     <td>1</td>
                     <td>Ans Achtertuin</td>
                     <td>9-11-2016</td>
                     <td>11-11-2016</td>
                  </tr>
                  <tr>
                     <td>Heggenschaar</td>
                     <td>1</td>
                     <td>Ans Achtertuin</td>
                     <td>9-11-2016</td>
                     <td>11-11-2016</td>
                  </tr>
                  <tr>
                     <td>Grasmaaier</td>
                     <td>1</td>
                     <td>Ans Achtertuin</td>
                     <td>9-11-2016</td>
                     <td>11-11-2016</td>
                  </tr>
                  <tr>
                     <td>Hogedrukspuit</td>
                     <td>1</td>
                     <td>Ans Achtertuin</td>
                     <td>9-11-2016</td>
                     <td>11-11-2016</td>
                  </tr>
                  <tr>
                     <td>Speaker</td>
                     <td>1</td>
                     <td>Ans Achtertuin</td>
                     <td>9-11-2016</td>
                     <td>11-11-2016</td>
                  </tr>
                  <tr>
                     <td>Bladblazer</td>
                     <td>1</td>
                     <td>Ans Achtertuin</td>
                     <td>9-11-2016</td>
                     <td>11-11-2016</td>
                  </tr>
                  <tr>
                     <td>Skelter</td>
                     <td>1</td>
                     <td>Ans Achtertuin</td>
                     <td>9-11-2016</td>
                     <td>11-11-2016</td>
                  </tr>
                  <tr>
                     <td>Klopboormachine</td>
                     <td>1</td>
                     <td>Ans Achtertuin</td>
                     <td>9-11-2016</td>
                     <td>11-11-2016</td>
                  </tr>
                  <tr>
                     <td>Freesmachines</td>
                     <td>1</td>
                     <td>Ans Achtertuin</td>
                     <td>9-11-2016</td>
                     <td>11-11-2016</td>
                  </tr>
                  <tr>
                     <td>Heteluchtpistool</td>
                     <td>1</td>
                     <td>Ans Achtertuin</td>
                     <td>9-11-2016</td>
                     <td>11-11-2016</td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
   </div>
</body>
</head>

<?php $a->footer(); ?>
