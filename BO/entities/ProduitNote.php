<?php

class ProduitNote
{
    private $idProdNote;
    private $comment;
    private $rating;
    private $id;

    public function __construct($idProdNote, $comment, $rating)
    {
        $this->idProdNote = $idProdNote;
        $this->comment = $comment;
        $this->rating = $rating;
    }


    public function getIdProdNote()
    {
        return $this->idProdNote;
    }


    public function setIdProdNote($idProdNote)
    {
        $this->idProdNote = $idProdNote;

        return $this;
    }


    public function getComment()
    {
        return $this->comment;
    }


    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }


    public function getRating()
    {
        return $this->rating;
    }


    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
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

}

?>
