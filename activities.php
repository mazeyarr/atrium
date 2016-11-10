<?php

require 'php/bootstrap.php';

$page = new MainClass();
$page->header();
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Activiteiten
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Geplande activiteiten</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody id="services">
                        <tr>
                            <th>Titel</th>
                            <th>Omschrijving</th>
                            <th>Gebruiker</th>
                            <th>Locatie</th>
                            <th>Datum</th>
                            <th>Begin</th>
                            <th>Eind</th>
                            <th>Reageer</th>

                        </tr>
                        <tr id="jos">
                            <td>Kookcursus</td>
                            <td>We gaan met zijn allen lekkere spaghetti bolognese maken.</td>
                            <td id="name-anouk">Anouk van der Sar</td>
                            <td>Atrium</td>
                            <td><?php echo date('d-m-Y');?></td>
                            <td>15:30</td>
                            <td>20:00</td>
                            <td><button type="button" class="btn btn-info react" data-id="anouk">Aanmelden</button></td>
                        </tr>
                        <tr id="samantha">
                            <td>Workshop LinkedIn</td>
                            <td>Ik weet dat er in de wijk een aantal studenten wonen die de komende tijd af gaan studeren, en ik wil jullie graag helpen.</td>
                            <td id="name-sebas">Sebastiaan Liebrechts</td>
                            <td>Atrium</td>
                            <td><?php echo date('d-m-Y');?></td>
                            <td>13:45</td>
                            <td>15:45</td>
                            <td><button type="button" class="btn btn-info react" data-id="sebas">Aanmelden</button></td>
                        </tr>
                        <tr id="bas">
                            <td>Cursus programmeren</td>
                            <td>Ik organiseer binnenkort een cursus om mensen de basis van programmeren bij te brengen, omdat veel mensen niet weten hoe leuk het is</td>
                            <td id="name-bas">Bas de Vos</td>
                            <td>Atrium</td>
                            <td><?php echo date('d-m-Y');?></td>
                            <td>13:00</td>
                            <td>16:00</td>
                            <td><button type="button" class="btn btn-info react" data-id="sjonnie">Aanmelden</button></td>
                        </tr>
                        <tr id="anita">
                            <td>Make-up workshop</td>
                            <td>Hallo meiden! Ik ben een make-up artiest en ik wil jullie graag een aantal dingen bijbrengen over vanalles en nog wat dat met make-up te maken heeft</td>
                            <td id="name-anita">Anita de Boer</td>
                            <td>Atrium</td>
                            <td><?php echo date('d-m-Y');?></td>
                            <td>20:00</td>
                            <td>22:00</td>
                            <td><button type="button" class="btn btn-info react" data-id="anita">Aanmelden</button></td>
                        </tr>
                        <tr id="truusje">
                            <td>Breien</td>
                            <td>Mijn hobby is breien, ik doe het al tientallen jaren en ik zou mensen hier graag meer over vertellen</td>
                            <td id="name-truusje">Truusje de Wit</td>
                            <td>Atrium</td>
                            <td><?php echo date('d-m-Y');?></td>
                            <td>14:00</td>
                            <td>17:00</td>
                            <td><button type="button" class="btn btn-info react" data-id="truusje">Aanmelden</button></td>
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
            <button type="button" id="request" class="btn btn-block btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Activiteit aanmaken</button>
        </div>
    </div>
</section>
<!-- /.content -->


<?php
$page->footer();
?>

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
            title: 'Aanmelden bij de activiteit van ' + name + '?',
            showCloseButton: true,
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText: 'Bevestig',
            cancelButtonText: 'Annuleren',
        }).then(function () {
            swal({
                type: 'success',
                title: 'Aangemeld!',
            })
        })
    })
    $( "#request" ).click(function() {
        swal({
            title: 'Activiteit aanmaken',
            html:
            '<div class="row" style="margin-bottom: 10px"><div class="col-sm-12"><input id="titel" class="form-control" placeholder="Titel"></div></div>' +
            '<div class="row" style="margin-bottom: 30px"><div class="col-sm-12"><textarea id="omschrijving" class="form-control" placeholder="Omschrijving"></textarea></div></div>' +
            '<div class="row"><div class="col-sm-6"><input id="begintime" class="form-control" placeholder="Begintijd"></input></div><div class="col-sm-6"><input id="endtime" class="form-control" placeholder="Eindtijd"></input></div></div>' ,
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
                title: 'Activiteit aangemaakt!',
            })
            var titel = $('#titel').val()
            var description = $('#omschrijving').val()
            var begin = $('#begintime').val()
            var end = $('#endtime').val()

            var fullDate = new Date()
            var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : + (fullDate.getMonth()+1);
            var currentDate = fullDate.getDate() + "-" + twoDigitMonth + "-" + fullDate.getFullYear();
            $('#services').append('<tr><td>'+ titel +'</td><td>'+ description +'</td><td id="name-mazeyar">Mazeyar Rezaei</td><td>Atrium</td><td>'+ currentDate +'</td><td>'+ begin +'</td><td>'+ end +'</td><td><button type="button" class="btn btn-info react" data-id="mazeyar">Aanmelden</button></td></tr>')
        })
    });
</script>