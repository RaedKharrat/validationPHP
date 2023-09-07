<?php
class Espace
{
	private $idPlace;
	private $nbPlace;



		public function __construct($idPlace,$nbPlace)
		{
			$this->idPlace=$idPlace;
			$this->nbPlace=$nbPlace;

		}


    public function getIdPlace()
    {
        return $this->idPlace;
    }

    public function setIdPlace($idPlace)
    {
        $this->idPlace = $idPlace;

        return $this;
    }


    public function getNbPlace()
    {
        return $this->nbPlace;
    }


    public function setNbPlace($nbPlace)
    {
        $this->nbPlace = $nbPlace;

        return $this;
    }

}
?>
