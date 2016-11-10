<?php
   require 'php/bootstrap.php';
   $page = new MainClass();
   $page->header();
?>

<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Deelhoek
   </h1>
</section>

<!-- Main content -->
<section class="content">
   <div class="row">
      <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
               <h3 class="box-title">Beschikbare voorwerpen</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
               <table class="table table-hover">
                  <tbody id="services">
                  <tr>
                     <th>Voorwerp</th>
                     <th>Eigenaar</th>
                     <th>Voorraad</th>
                     <th>Adres</th>
                     <th width="100px">Reageer</th>

                  </tr>
                  <tr id="jos">
                     <td>Klopboormachine</td>
                      <td id="name-jos">Jos van As</td>
                     <td>1</td>
                     <td>Sint Antoniusweg 2</td>
                     <td><button type="button" class="btn btn-block btn-info react" data-id="jos">Reserveer</button></td>
                  </tr>
                  <tr id="samantha">
                     <td>Boormachine</td>
                      <td id="name-samantha">Samantha van Gerwen</td>
                     <td>0</td>
                     <td>Lorreman 5</td>
                     <td><button type="button" class="btn btn-block btn-warning disabled" data-id="samantha">13-Nov</button></td>
                  </tr>
                  <tr id="sjonnie">
                     <td>Steekwagen</td>
                      <td id="name-sjonnie">'t Atrium</td>
                     <td>2</td>
                     <td>Paltrokmolen 8</td>
                     <td><button type="button" class="btn btn-block btn-info react" data-id="sjonnie">Reserveer</button></td>
                  </tr>
                  <tr id="anita">
                     <td>Dopsleutelset</td>
                      <td id="name-anita">Anita de Boer</td>
                     <td>0</td>
                     <td>Roefvoort 27</td>
                     <td><button type="button" class="btn btn-block btn-warning disabled" data-id="anita">21-Nov</button></td>
                  </tr>
                  <tr id="truusje">
                     <td>Waterpas</td>
                      <td id="name-truusje">'t Atrium</td>
                     <td>5</td>
                     <td>Paltrokmolen 8</td>
                     <td><button type="button" class="btn btn-block btn-info react" data-id="truusje">Reserveer</button></td>
                  </tr>
                  </tbody>
               </table>
            </div>
            <!-- /.box-body -->
         </div>
         <!-- /.box -->
      </div>
      <!-- /.col -->
   </div>
   <!-- /.row -->
   <div class="row">
      <div class="col-md-10"></div>
      <div class="col-md-2">
         <button type="button" id="request" class="btn btn-block btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Voorwerp toegoeven</button>
      </div>
   </div>
</section>
<!-- /.content -->

<?php $page->footer(); ?>

<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
    $('body').on('click', '.react', function () {
        var id = $(this).attr('data-id')
        var name = $('#name-' + id).html()
        swal({
            title: 'Voorwerp reserveren?',
            showCloseButton: true,
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText: 'Bevestig',
            cancelButtonText: 'Annuleren',
        }).then(function () {
            swal({
                type: 'success',
                title: 'Voorwerp gereserveerd!',
            })
        })
    })
    $( "#request" ).click(function() {
        swal({
            title: 'Voorwerp uitlenen',
            html:
            '<div class="row" style="margin-bottom: 10px"><div class="col-sm-12"><input type="text" id="item" class="form-control" placeholder="Voorwerp"></div></div>' +
            '<div class="row"><div class="col-sm-12"><input type="number" id="amount" class="form-control" placeholder="Aantal"></div></div>',
            showCloseButton: true,
            showCancelButton: true,
            cancelButtonColor: '#d33',
            cancelButtonText:
                'Annuleren',
            confirmButtonText:
                'Bevestig',
        }).then(function() {
            swal({
                type: 'success',
                title: 'Voorwerp toegevoegd!',
            })
            var item = $('#item').val()
            var amount = $('#amount').val()
            var adres = 'Brandvoortsedijk 98a'

            $('#services').append('<tr><td>'+ item +'</td><td id="name-mazeyar">Mazeyar Rezaei</td><td>'+ amount +'</td><td>'+ adres +'</td><td><button type="button" class="btn btn-block btn-info react" data-id="mazeyar">Reserveer</button></td></tr>')
        })
    });
</script>
