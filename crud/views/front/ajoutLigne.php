<?PHP
include "../../entities/Ligne.php";
include "../../core/LigneC.php";

if (isset($_POST['quantite']) ){
$ligne1=new ligne($_POST['id_ligne'],$_POST['quantite'],$_POST['price'],$_POST['prix_tot']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$ligne1C=new LigneC();
$ligne1C->ajouterLigne($ligne1);
header('Location: image3.php');
	
}else{
	echo "vérifier les champs";
}
//fonction calculer prix total



?>