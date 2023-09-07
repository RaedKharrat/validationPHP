<?PHP

class team
{
    private $id;

    private $nom;
    private $role;

    private $image;


    function __construct($nom, $role, $image)
    {
        $this->nom = $nom;
        $this->role = $role;

        $this->image = $image;


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

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->titre = $nom;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }


}

?>