<?PHP
class livraison{
	private $cin;
	private $nom;
	private $prenom;
	private $mail;
	private $ville;
	private $postal;
	private $etat;
	function __construct($cin,$nom,$prenom,$ville,$mail,$postal,$etat){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->mail=$mail;
		$this->ville=$ville;
		$this->postal=$postal;
		$this->etat=$etat;


	}

	function getcin(){
		return $this->cin;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getville(){
		return $this->ville;
	}
	function getmail(){
		return $this->mail;
	}
	function getpostal(){
		return $this->postal;
	}
	function getetat(){
		return $this->etat;
	}
	function setetat($etat){
		$this->etat=$etat;
	}
	function setnom($nom){
		$this->nom=$nom;
	}
	function setpostal($postal){
		$this->postal=$postal;
	}
	function setprenom($prenom){
		$this->prenom;
	}
	function setville($ville){
		$this->ville=$ville;
	}
	function setmail($mail){
		$this->mail=$mail;
	}

}

?>
