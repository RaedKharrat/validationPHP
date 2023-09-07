<?php

require_once '../core/ReservationC.php';
include_once 'includes/header.inc.php';

if(isset($_POST['idSup'])){
  supprimerReservation($_POST['idSup']);
}

?>

<!--content-->
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Reservation
      <small>Menu</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="Khammeri"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#" class="active">Reservation</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header form-inline">
            <h3 class="box-title">List Reservation</h3>
            <style media="screen">
              @media (max-width: 751px){
                #searshForm{
                  margin-bottom:20px;
                  margin-left:0;
                }
              }
            </style>
            <div id="searshForm" class="input-group col-md-3" style="margin-left:20px;">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                    <button type="button" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </div>
          <div class="box-body">
            <table id="" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Date, Temps</th>
                  <th>Tel</th>
                  <th>Message</th>
                  <th>Nombre personnes</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $res=afficherReservation();

                foreach ($res as $re) {
                  ?>
                  <tr>
                    <td><?php echo $re['firstname'] ?></td>
                    <td><?php echo $re['lastname'] ?></td>
                    <td><?php echo "{$re['date']}, {$re['time']}" ?></td>
                    <td><?php echo $re['phone'] ?></td>
                    <td><?php echo $re['message'] ?></td>
                    <td><?php echo $re['nbpers'] ?></td>
                    <td>
                      <form class="" action="" method="post">
                        <input type="hidden" name="idSup" value="<?php echo $re['idreservation'] ?>">
                        <button type="submit" name="" type="button" class="btn btn-danger">
                          <i class="fa fa-trash"></i>
                          Supprimer
                        </button>
                      </form>

                    </td>
                  </tr>

                  <?php
                }
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>


<?php
include_once 'includes/footer.inc.php';
?>
