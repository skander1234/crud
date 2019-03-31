<?PHP
include "../../entities/Commande.php";
include "../../core/CommandeC.php";

if (isset($_POST['id_lig']) and isset($_POST['Date']) and isset($_POST['id_com']) ){
$commande1=new Commande($_POST['id_com'],$_POST['id_lig'],$_POST['Date']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$Commande1C=new CommandeC();
$Commande1C->ajouterCommande($commande1);
header('Location: image5.php');
	
}else{
	echo "vérifier les champs";
}
//fonction calculer prix total



?>