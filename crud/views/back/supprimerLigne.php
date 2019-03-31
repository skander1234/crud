<?PHP
include "../../core/LigneC.php";
$ligneC=new LigneC();
if (isset($_POST["id_ligne"])){
	$ligneC->supprimerLigne($_POST["id_ligne"]);
	header('Location: afficherLigne.php');
}

?>