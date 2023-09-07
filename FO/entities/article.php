<?PHP

class article
{
    private $id;
    private $image;
    private $titre;
    private $date;
    private $contenue;
    private $archive;

    function __construct($image, $titre, $date, $contenue, $archive)
    {
        $this->image = $image;
        $this->titre = $titre;
        $this->date = $date;
        $this->contenue = $contenue;
        $this->archive = $archive;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getContenue()
    {
        return $this->contenue;
    }

    public function setContenue($contenue)
    {
        $this->contenue = $contenue;
    }

    public function getArchive()
    {
        return $this->archive;
    }

    public function setArchive($archive)
    {
        $this->archive = $archive;
    }


}

?>