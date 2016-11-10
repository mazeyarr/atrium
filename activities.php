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
                            <th>Adres</th>
                            <th>Datum</th>
                            <th>Begin</th>
                            <th>Eind</th>
                            <th>Reageer</th>

                        </tr>
                        <tr id="jos">
                            <td>Belastingaangifte</td>
                            <td>Ik heb het de komende periode erg druk, dus zoek ik iemand om voor mij de belastingaangifte te doen.</td>
                            <td id="name-jos">Jos van As</td>
                            <td>Adres</td>
                            <td><?php echo date('d-m-Y');?></td>
                            <td>10:30</td>
                            <td>17:00</td>
                            <td><button type="button" class="btn btn-info react" data-id="jos">Aanmelden</button></td>
                        </tr>
                        <tr id="samantha">
                            <td>Gaatje boren</td>
                            <td>Het zou fijn zijn als iemand bij mij een gaatje in de muur kan komen boren, omdat ik het gereedschap daarvoor niet heb</td>
                            <td id="name-samantha">Samantha van Gerwen</td>
                            <td>Adres</td>
                            <td><?php echo date('d-m-Y');?></td>
                            <td>13:45</td>
                            <td>18:00</td>
                            <td><button type="button" class="btn btn-info react" data-id="samantha">Aanmelden</button></td>
                        </tr>
                        <tr id="sjonnie">
                            <td>Koelkast kapot</td>
                            <td>Mijn koelkast wordt niet meer koud, kan iemand die hier verstand van heeft even langs komen?</td>
                            <td id="name-sjonnie">Sjonnie de Boer</td>
                            <td>Adres</td>
                            <td><?php echo date('d-m-Y');?></td>
                            <td>13:00</td>
                            <td>17:00</td>
                            <td><button type="button" class="btn btn-info react" data-id="sjonnie">Aanmelden</button></td>
                        </tr>
                        <tr id="anita">
                            <td>Autoreparatie</td>
                            <td>Mijn auto start niet meer, kan iemand mij hierbij helpen?</td>
                            <td id="name-anita">Anita de Boer</td>
                            <td>Adres</td>
                            <td><?php echo date('d-m-Y');?></td>
                            <td>20:00</td>
                            <td>23:00</td>
                            <td><button type="button" class="btn btn-info react" data-id="anita">Aanmelden</button></td>
                        </tr>
                        <tr id="truusje">
                            <td>Computerproblemen</td>
                            <td>Mijn computer crasht elke keer nadat Windows is geladen</td>
                            <td id="name-truusje">Truusje de Wit</td>
                            <td>Adres</td>
                            <td><?php echo date('d-m-Y');?></td>
                            <td>14:00</td>
                            <td>19:00</td>
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
            <button type="button" id="request" class="btn btn-block btn-success">Activiteit aanmaken</button>
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
            title: 'Aanmelden bij de activiteit van ' + name,
            showCloseButton: true,
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText: 'Meld aan',
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
                'Annuleer',
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
            $('#services').append('<tr><td>'+ titel +'</td><td>'+ description +'</td><td id="name-mazeyar">Mazeyar Rezaei</td><td>Brandvoortsedijk 98a</td><td>'+ currentDate +'</td><td>'+ begin +'</td><td>'+ end +'</td><td><button type="button" class="btn btn-info react" data-id="mazeyar">Aanmelden</button></td></tr>')
        })
    });
</script>