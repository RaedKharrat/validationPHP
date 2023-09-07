<?php

class Facture{

  private $_numf;
  private $_quantite;
  private $_unite;
  private $_description;
  private $_numeroc;

  public function __construct($numf,$quantite,$unite,$description,$numeroc)
  {
    $this->_numf=$numf;
    $this->_quantite=$quantite;
    $this->_unite=$unite;
    $this->_description=$description;
    $this->_numeroc=$numeroc;
  }

  public function getnumf()
  {
    return $this->_numf;
  }
  public function getquantite()
  {
    return $this->_quantite;
  }
  public function getunite()
  {
    return $this->_unite;
  }
  public function getdescription()
  {
    return $this->_description;
  }
  public function getnumeroc()
  {
    return $this->_numeroc;
  }

}
?>
