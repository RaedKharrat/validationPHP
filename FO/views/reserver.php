<?php

require_once '../entities/Reservation.php';
require_once '../core/ReservationC.php';

$lName=trim($_POST['lName']);
$fName=trim($_POST['fName']);
$date=trim($_POST['date']);
$time=trim($_POST['time']);
$tel=trim($_POST['tel']);
$seats=trim($_POST['seats']);
$msg=trim($_POST['msg']);

//controle
if($lName && $fName && $date && $time && $tel && $seats && $msg){
  $res=new Reservation(null,$lName,$fName,$date,$time,$tel,$msg,$seats);
  if(ajouterReservation​($res))
  {
    echo "Done";
    header('refresh:5;url=./');
  }
  else {
    echo "Chose another<br><a href='../'>Home</a>";
  }
}

?>
