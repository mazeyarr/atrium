<?php

require 'php/bootstrap.php';
$page = new MainClass();

$page->header();
?>
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="img/portrait-1.jpg" alt="User profile picture">

                    <h3 class="profile-username text-center">Mazeyar Rezaei</h3>

                    <p class="text-muted text-center">Applicatie Ontwikkelaar</p>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Info</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <strong><i class="fa fa-book margin-r-5"></i> Adres</strong>

                    <p class="text-muted">
                        Brandvoortsedijk 98a
                    </p>

                    <hr>

                    <strong><i class="fa fa-map-marker margin-r-5"></i> Email</strong>

                    <p class="text-muted">mazeyar@gmail.com</p>

                    <hr>

                    <strong><i class="fa fa-pencil margin-r-5"></i> Vaardigheden</strong>

                    <p>
                        <span class="label label-info">Webdeveloper</span>
                        <span class="label label-success">Website consultant</span>
                    </p>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->

<?php $page->footer(); ?>
