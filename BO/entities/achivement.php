<?PHP

class achivement
{
    private $id;
    private $idClient;
    private $ptfid;
    private $type;


    function __construct($idClient, $ptfid, $type)
    {
        $this->idClient = $idClient;
        $this->ptfid = $ptfid;
        $this->type = $type;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdClient()
    {
        return $this->idClient;
    }

    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    public function getPtfid()
    {
        return $this->ptfid;
    }

    public function setPtfid($ptfid)
    {
        $this->ptfid = $ptfid;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}

?>