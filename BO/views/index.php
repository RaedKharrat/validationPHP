<?php

require_once '../core/ProduitC.php';
require_once '../core/ReservationC.php';
require_once '../core/EspaceC.php';
require_once '../core/ProduitNoteC.php';
require_once '../core/statistiqueC.php';

include_once 'includes/header.inc.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo nbProductsShop(); ?></h3>

                        <p>Products</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pizza"></i>
                    </div>
                    <a href="shopAdmin.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo numberReservations(); ?></h3>

                        <p>Reservation</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-calendar-check-o"></i>
                    </div>
                    <a href="reservationAdmin.php" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo numberEspaces() ?></h3>

                        <p>Tables</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-glass"></i>
                    </div>
                    <a href="tableAdmin.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?php echo numberComments() ?></h3>

                        <p>Comments</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-comments"></i>
                    </div>
                    <a href="commentsAdmin.php" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-right">
                        <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
                        <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
                        <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
                    </ul>
                    <div class="tab-content no-padding">
                        <!-- Morris chart - Sales -->
                        <div class="chart tab-pane active" id="revenue-chart"
                             style="position: relative; height: 300px;"></div>
                        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                    </div>
                </div>
                <!-- /.nav-tabs-custom -->


            </section>

            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

                <!-- solid sales graph -->
                <div class="box box-solid bg-teal-gradient">
                    <div class="box-header">
                        <i class="fa fa-th"></i>

                        <h3 class="box-title">Sales Graph</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i
                                        class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body border-radius-none">
                        <div class="chart" id="line-chart" style="height: 250px;"></div>
                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->

            </section>

            <section class="col-lg-7 connectedSortable">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <i class="fa fa-bar-chart-o"></i>

                        <h3 class="box-title">Nombre des Utilisateurs : <?php echo(numberClients()); ?></h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div id="donut-chart" style="height: 300px;"></div>
                    </div>
                    <!-- /.box-body-->
                </div>
            </section>


            <!-- right col -->
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once 'includes/footer.inc.php';
?>

<script>
    var donutData = [
        {label: 'actifs', data: <?php echo(numberClientsActif())?>, color: '#3c8dbc'},
        {label: 'inactifs', data: <?php echo(numberClientsDesactive())?>, color: '#0073b7'},

    ]
    $.plot('#donut-chart', donutData, {
        series: {
            pie: {
                show: true,
                radius: 1,
                innerRadius: 0.5,
                label: {
                    show: true,
                    radius: 2 / 3,
                    formatter: labelFormatter,
                    threshold: 0.1
                }

            }
        },
        legend: {
            show: false
        }
    })

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
            + label
            + '<br>'
            + Math.round(series.percent) + '%</div>'
    }
</script>