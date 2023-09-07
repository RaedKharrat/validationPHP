<?php

require_once '../../config.php';

function ajouterReservation​(Reservation $reserv)
{
  $nbFree=getNbTableFree($reserv->getNbPers());

  if($nbFree>0){
    $db=config::getConnexion();
    $sql="insert into reservation(lastname,firstname,date,time,phone,message,nbpers) values(?,?,?,?,?,?,?)";
    $req=$db->prepare($sql);
    $req->bindvalue(1,$reserv->getLastName());
    $req->bindvalue(2,$reserv->getFirstName());
    $req->bindvalue(3,$reserv->getDate());
    $req->bindvalue(4,$reserv->getTime());
    $req->bindvalue(5,$reserv->getPhone());
    $req->bindvalue(6,$reserv->getMessage());
    $req->bindvalue(7,$reserv->getNbPers());

    $req->execute();

    return true;
  }
  return false;

}

function afficherReservation()
{
  $db=config::getConnexion();
  $sql="select * from reservation";
  $res=$db->query($sql);
  return $res->fetchAll();
}

function numberReservations()
{
  $db=config::getConnexion();
  $sql="select count(*) from reservation";
  $res=$db->query($sql);
  return $res->fetchColumn();
}

function supprimerReservation(int $idResevation)
{
  $db=config::getConnexion();
  $sql="delete from reservation where idReservation=:idResevation";
  $req=$db->prepare($sql);
  $req->bindvalue(':idResevation',$idResevation);

  $req->execute();
}

function modifierReservation(Reservation $newReserv)
{
  $db=config::getConnexion();
  $sql="update reservation set LastName=:LastName, FirstName=:FirstName, date=:date, time=:time,phone=:phone,message=:message,nbPers=:nbPers where idResevation=:idResevation";
  $req=$db->prepare($sql);
  $req->bindvalue(':idResevation',$newReserv->getIdResevation());
  $req->bindvalue(':LastName',$newReserv->getLastName());
  $req->bindvalue(':FirstName',$newReserv->getFirstName());
  $req->bindvalue(':date',$newReserv->getDate());
  $req->bindvalue(':time',$newReserv->getTime());
  $req->bindvalue(':phone',$newReserv->getPhone());
  $req->bindvalue(':message',$newReserv->getMessage());
  $req->bindvalue(':nbPers',$newReserv->getNbPers());

  $req->execute();
}

function getNbTableFree(int $nbSeats){
  $db=config::getConnexion();

  $res=$db->query("select value from extra where param='nbEspaceVide'");
  $nbFree=$res->fetchColumn();

  if($nbFree>0){
    $sql="select count(*) from espace where nbplace=:nbplace";
    $req=$db->prepare($sql);
    $req->bindvalue(':nbplace',$nbSeats);

    $res=$req->execute();

    $nbFree--;
    $sql="update extra set value={$nbFree}";
    $db->query($sql);

    return $req->fetchColumn();
  }
  return 0;
}

function getReservationById(int $id)
{

}

?>
