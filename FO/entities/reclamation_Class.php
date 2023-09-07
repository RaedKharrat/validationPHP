<?PHP

class Reclamation
{
    private $id;
    private $client;
    private $motif;
    private $sm;
    private $date;
    private $etat;

    function __construct($client, $motif, $sm, $date, $etat)
    {
        $this->client = $client;
        $this->motif = $motif;
        $this->sm = $sm;
        $this->date = $date;
        $this->etat = $etat;
    }

    function getid()
    {
        return $this->id;
    }

    function getclient()
    {
        return $this->client;
    }

    function getmotif()
    {
        return $this->motif;
    }

    function getsm()
    {
        return $this->sm;
    }

    function getdate()
    {
        return $this->date;
    }

    function getetat()
    {
        return $this->etat;
    }

    function setclient($client)
    {
        $this->prenom;
    }

    function setmotif($motif)
    {
        $this->motif = $motif;
    }

    function setsm($sm)
    {
        $this->sm = $sm;
    }

    function setdate($date)
    {
        $this->date = $date;
    }

    function setetat($etat)
    {
        $this->etat = $etat;
    }

}

?>