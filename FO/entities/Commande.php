<?php

class Commande{
  private $_numc;
  private $_receveur;
  private $_transit;
  private $_modalite;
  private $_prix;

  public function __construct($numc,$receveur,$transit,$modalite,$prix)
  {

    $this->_numc=$numc;
    $this->_receveur=$receveur;
    $this->_transit=$transit;
    $this->_modalite=$modalite;
    $this->_prix=$prix;

  }

  public function getnumc()
  {
    return $this->_numc;
  }
  public function getreceveur()
  {
    return $this->_receveur;
  }
  public function gettransit()
  {
    return $this->_transit;
  }
  public function getmodalite()
  {
    return $this->_modalite;
  }
  public function getprix()
  {
    return $this->_prix;
  }

}
?>
