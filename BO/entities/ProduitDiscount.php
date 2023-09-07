<?php

class ProduitDiscount
{
    private $idProdDiscount;
    private $discount;


    public function __construct($idProdDiscount, $discount)
    {
        $this->idProdDiscount = $idProdDiscount;
        $this->discount = $discount;

    }


    public function getIdProdDiscount()
    {
        return $this->idProdDiscount;
    }


    public function setIdProdDiscount($idProdDiscount)
    {
        $this->idProdDiscount = $idProdDiscount;

        return $this;
    }


    public function getDiscount()
    {
        return $this->discount;
    }


    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

}

?>
