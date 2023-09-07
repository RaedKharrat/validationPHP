<?PHP

class commentaire
{
    private $id;
    private $idUser;
    private $idArticle;
    private $contenue;
    private $date;
    private $visible;


    function __construct($id, $idUser, $idArticle, $contenue, $date, $visible)
    {
        $this->id = $id;
        $this->idUser = $idUser;
        $this->idArticle = $idArticle;
        $this->contenue = $contenue;
        $this->date = $date;
        $this->visible = $visible;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdUser()
    {
        return $this->idUser;
    }

    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    public function getIdArticle()
    {
        return $this->idArticle;
    }

    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;
    }

    public function getContenue()
    {
        return $this->contenue;
    }

    public function setContenue($contenue)
    {
        $this->contenue = $contenue;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getVisible()
    {
        return $this->visible;
    }

    public function setVisible($visible)
    {
        $this->visible = $visible;
    }

}


?>