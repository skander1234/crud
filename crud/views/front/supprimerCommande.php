<?PHP
include "../../core/CommandeC.php";
$commandeC=new CommandeC();
if (isset($_POST["id_com"])){
	$commandeC->supprimerCommande($_POST["id_com"]);
	header('Location: image5.php');
}

?>