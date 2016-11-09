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
               <h3 class="box-title">Verzoeken</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
               <table class="table table-hover">
                  <tbody id="services">
                  <tr>
                     <th>Voorwerp</th>
                     <th>Aanbieder</th>
                     <th>Vooraad</th>
                     <th>Adres</th>
                     <th width="100px">Reageer</th>

                  </tr>
                  <tr id="jos">
                     <td></td>
                      <td id="name-jos">Jos van As</td>
                     <td></td>
                     <td></td>
                     <td><button type="button" class="btn btn-info react" data-id="jos">Aanvraag</button></td>
                  </tr>
                  <tr id="samantha">
                     <td></td>
                      <td id="name-samantha">Samantha van Gerwen</td>
                     <td></td>
                     <td></td>
                     <td><button type="button" class="btn btn-info react" data-id="samantha">Aanvraag</button></td>
                  </tr>
                  <tr id="sjonnie">
                     <td></td>
                      <td id="name-sjonnie">Sjonnie de Boer</td>
                     <td></td>
                     <td></td>
                     <td><button type="button" class="btn btn-info react" data-id="sjonnie">Aanvraag</button></td>
                  </tr>
                  <tr id="anita">
                     <td></td>
                      <td id="name-anita">Anita de Boer</td>
                     <td></td>
                     <td></td>
                     <td><button type="button" class="btn btn-info react" data-id="anita">Aanvraag</button></td>
                  </tr>
                  <tr id="truusje">
                     <td></td>
                      <td id="name-truusje">Truusje de Wit</td>
                     <td></td>
                     <td></td>
                     <td><button type="button" class="btn btn-info react" data-id="truusje">Aanvraag</button></td>
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
         <button type="button" id="request" class="btn btn-block btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Aanvraag Toevoegen</button>
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
            title: 'Reageer op ' + name,
            html: '<div class="row"><div class="col-sm-12"><textarea id="omschrijving" class="form-control"></textarea></div></div>',
            showCloseButton: true,
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText: 'Verstuur reactie',
        }).then(function () {
            swal({
                type: 'success',
                title: 'Reactie verstuurd!',
            })
        })
    })
    $( "#request" ).click(function() {
        swal({
            title: 'Voorwerp aan magazijn toevoegen',
            html:
            '<div class="row" style="margin-bottom: 10px"><div class="col-sm-12"><input type="text" id="item" class="form-control" placeholder="Voorwerp"></div></div>' +
            '<div class="row"><div class="col-sm-12"><input type="number" id="amount" class="form-control" placeholder="Aantal"></div></div>',
            showCloseButton: true,
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText:
                'Voorwerp toevoegen',
        }).then(function() {
            swal({
                type: 'success',
                title: 'Voorwerp toegevoegd!',
            })
            var item = $('#item').val()
            var amount = $('#amount').val()
            var adres = 'Brandvoortsedijk 98a'

            $('#services').append('<tr><td>'+ item +'</td><td id="name-mazeyar">Mazeyar Rezaei</td><td>'+ amount +'</td><td>'+ adres +'</td><td><button type="button" class="btn btn-info react" data-id="mazeyar">Aanvraag</button></td></tr>')
        })
    });
</script>

