<?PHP
class livreur{
	private $login;
	private $mdp;
	private $cinL;
	private $salaire;

	function __construct($login,$mdp,$cinl,$salaire){
		$this->login=$login;
		$this->mdp=$mdp;
		$this->cinL=$cinl;
		$this->salaire=$salaire;


	}

	function getlogin(){
		return $this->login;
	}
	function getmdp(){
		return $this->mdp;
	}
	function getsalaire(){
		return $this->salaire;
	}
	function getcinL(){
		return $this->cinL;
	}

	function setlogin($login){
		$this->login=$login;
	}
	function setmdp($mdp){
		$this->mdp=$mdp;
	}
	function setcinL($cinL){
		$this->cinL=$cinL;
	}
	function setsalaire($salaire){
		$this->salaire=$salaire;
	}


}

?>
