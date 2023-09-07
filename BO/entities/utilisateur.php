<?PHP

class utilisateur
{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $dateNaissance;
    private $mdp;
    private $numTel;
    private $region;
    private $prof;
    private $active;
    private $nbrCnx;


    function __construct($nom, $prenom, $email, $dateNaissance, $mdp, $numTel, $region, $prof, $active, $nbrCnx)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->dateNaissance = $dateNaissance;
        $this->mdp = $mdp;
        $this->numTel = $numTel;
        $this->region = $region;
        $this->prof = $prof;
        $this->active = $active;
        $this->nbrCnx = $nbrCnx;
    }


    function getId()
    {
        return $this->id;
    }

    function getNom()
    {
        return $this->nom;
    }

    function getPrenom()
    {
        return $this->prenom;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    function getMdp()
    {
        return $this->mdp;
    }

    function getNumTel()
    {
        return $this->numTel;
    }

    function getRegion()
    {
        return $this->region;
    }

    function getProf()
    {
        return $this->prof;
    }

    function getNbrCnx()
    {
        return $this->nbrCnx;
    }

    function getActive()
    {
        return $this->active;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setNom($nom)
    {
        $this->nom = $nom;
    }

    function setPrenom($prenom)
    {
        $this->prenom;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    }

    function setRegion($region)
    {
        $this->region = $region;
    }

    function setProf($prof)
    {
        $this->prof = $prof;
    }

    function setNbrCnx($pointsFidelites)
    {
        $this->nbrCnx = $nbrCnx;
    }

    function setActive($active)
    {
        $this->active = $active;
    }

}


?>