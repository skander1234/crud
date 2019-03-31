<?PHP
class Ligne{
	private $id_ligne;
	private $quantite;
	private $price;
	private $prix_tot;
	function __construct($id_ligne,$quantite,$price,$prix_tot){
		$this->id_ligne=$id_ligne;
		$this->quantite=$quantite;
		$this->price=$price;
		$this->prix_tot=$prix_tot;
		
	}
	
	function getId_ligne(){
		return $this->id_ligne;
	}
	
	function getQuantite(){
		return $this->quantite;
	}
	function getPrice(){
		return $this->price;
	}
	function getPrix_tot(){
		return $this->prix_tot;
	}
	

	
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	
}

?>