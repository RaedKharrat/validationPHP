<?php
class Produit
{
	private $id;
	private $titre;
	private $description;
	private $photo;
	private $categorie;
  private $soustype;
  private $date;
	private $prix;


		public function __construct($id,$titre,$description,$photo,$categorie,$soustype,$date,$prix)
		{
			$this->id=$id;
			$this->titre=$titre;
			$this->description=$description;
			$this->photo=$photo;
			$this->categorie=$categorie;
      $this->soustype=$soustype;
      $this->date=$date;
			$this->prix=$prix;
		}

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getTitre()
    {
        return $this->titre;
    }


    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }


    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }


    public function getPhoto()
    {
        return $this->photo;
    }


    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }


    public function getCategorie()
    {
        return $this->categorie;
    }


    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }


    public function getSoustype()
    {
        return $this->soustype;
    }


    public function setSoustype($soustype)
    {
        $this->soustype = $soustype;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }


    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

}
?>
