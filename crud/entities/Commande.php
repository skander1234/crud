<?PHP
class Commande{
	private $id_com;
	private $id_lig;
	private $Date;

	function __construct($id_com,$id_lig,$Date){
		$this->id_com=$id_com;
		$this->id_lig=$id_lig;
		$this->Date=$Date;
		
	}
	
	function getId_com(){
		return $this->id_com;
	}
	function getId_lig(){
		return $this->id_lig;
	}
	function getDate(){
		return $this->Date;
	}
	

	function setId_lig($id_lig){
		$this->id_lig=$id_lig;
	}
	function setDate($Date){
		$this->Date=$Date;
	}
	
}

?>