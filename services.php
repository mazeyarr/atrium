<?php

require 'php/bootstrap.php';

$page = new MainClass();
$page->header();
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Diensten
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
                            <th>Titel</th>
                            <th>Omschrijving</th>
                            <th>Gebruiker</th>
                            <th>Adres</th>
                            <th>Datum</th>
                            <th>Reageer</th>

                        </tr>
                        <tr id="jos">
                            <td>Belastingaangifte</td>
                            <td>Ik heb het de komende periode erg druk, dus zoek ik iemand om voor mij de belastingaangifte te doen.</td>
                            <td id="name-jos">Jos van As</td>
                            <td>Adres</td>
                            <td><?php echo date('d-m-Y');?></td>
                            <td><button type="button" class="btn btn-info react" data-id="jos">Reageer</button></td>
                        </tr>
                        <tr id="samantha">
                            <td>Gaatje boren</td>
                            <td>Het zou fijn zijn als iemand bij mij een gaatje in de muur kan komen boren, omdat ik het gereedschap daarvoor niet heb</td>
                            <td id="name-samantha">Samantha van Gerwen</td>
                            <td>Adres</td>
                            <td><?php echo date('d-m-Y');?></td>
                            <td><button type="button" class="btn btn-info react" data-id="samantha">Reageer</button></td>
                        </tr>
                        <tr id="sjonnie">
                            <td>Koelkast kapot</td>
                            <td>Mijn koelkast wordt niet meer koud, kan iemand die hier verstand van heeft even langs komen?</td>
                            <td id="name-sjonnie">Sjonnie de Boer</td>
                            <td>Adres</td>
                            <td><?php echo date('d-m-Y');?></td>
                            <td><button type="button" class="btn btn-info react" data-id="sjonnie">Reageer</button></td>
                        </tr>
                        <tr id="anita">
                            <td>Autoreparatie</td>
                            <td>Mijn auto start niet meer, kan iemand mij hierbij helpen?</td>
                            <td id="name-anita">Anita de Boer</td>
                            <td>Adres</td>
                            <td><?php echo date('d-m-Y');?></td>
                            <td><button type="button" class="btn btn-info react" data-id="anita">Reageer</button></td>
                        </tr>
                        <tr id="truusje">
                            <td>Computerproblemen</td>
                            <td>Mijn computer crasht elke keer nadat Windows is geladen</td>
                            <td id="name-truusje">Truusje de Wit</td>
                            <td>Adres</td>
                            <td><?php echo date('d-m-Y');?></td>
                            <td><button type="button" class="btn btn-info react" data-id="truusje">Reageer</button></td>
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
            <button type="button" id="request" class="btn btn-block btn-success">Verzoek maken</button>
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

    $(".react").click(function () {
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
            title: 'Verzoek maken',
            html:
            '<div class="row" style="margin-bottom: 10px"><div class="col-sm-12"><input id="titel" class="form-control"></div></div>' +
            '<div class="row"><div class="col-sm-12"><textarea id="omschrijving" class="form-control"></textarea></div></div>',
            showCloseButton: true,
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText:
                'Verzoek maken',
        }).then(function() {
            swal({
                type: 'success',
                title: 'Verzoek toegevoegd!',
            }).then(function() {
                var titel = $('#titel').val()
                var description = $('#omschrijving').val()
                var fullDate = new Date()
                var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : + (fullDate.getMonth()+1);
                var currentDate = fullDate.getDate() + "-" + twoDigitMonth + "-" + fullDate.getFullYear();

                $('#services').append('<tr><td>'+ titel +'</td><td>'+ description +'</td><td>Mazeyar Rezaei</td><td>'+ currentDate +'</td></tr>')
            })
        })
    });
</script>
