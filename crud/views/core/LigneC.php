<?PHP
include "../../config.php";
class LigneC {
function afficherLigne ($ligne){
                echo "Id_ligne: ".$ligne->getId_ligne()."<br>";
                echo "prix: ".$ligne->getPrice()."<br>";
                echo "Quantite: ".$ligne->getQuantite()."<br>";
                echo "prix_tot: ".$ligne->getPrix_tot()."<br>";
        }
         function calculerSalaire($ligne){
                echo $ligne->getQuantite() * $ligne->getPrice();
        }
       
        function ajouterLigne($ligne){
                $sql="insert into ligne (quantite,price) values (:quantite,:price)";
                $db = config::getConnexion();
                try{
        $req=$db->prepare($sql);
                
       // $id_ligne=$ligne->getId_ligne();
        $quantite=$ligne->getQuantite();
        $price=$ligne->getPrice();
        
               // $req->bindValue(':id_ligne',$id_ligne);
                $req->bindValue(':quantite',$quantite);
                $req->bindValue(':price',$price);
               
                
            $req->execute();
           
        } 
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
                
        }
        
        function afficherLignes(){
                //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
                $sql="SElECT * From ligne";
                $db = config::getConnexion();
                try{
                $liste=$db->query($sql);
                return $liste;
                }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }}


        function supprimerLigne($id_ligne){
                $sql="DELETE FROM ligne where id_ligne= :id_ligne";
                $db = config::getConnexion();
        $req=$db->prepare($sql);
                $req->bindValue(':id_ligne',$id_ligne);
                try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }
         function modifierLigne($ligne,$id_ligne){
                $sql="UPDATE ligne SET id_ligne=:cinn, quantite=:quantite WHERE id_ligne=:id_ligne";
                
                $db = config::getConnexion();
                //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{            
        $req=$db->prepare($sql);
                $cinn=$ligne->getId_ligne();
                 $quantite=$ligne->getQuantite();
        
                $datas = array(':cinn'=>$cinn, ':id_ligne'=>$id_ligne,':quantite'=>$quantite);
                $req->bindValue(':cinn',$cinn);
                $req->bindValue(':id_ligne',$id_ligne);
                $req->bindValue(':quantite',$quantite);
                
                
                
            $s=$req->execute();
                        
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
                
        }
        function recupererLigne($id_ligne){
                $sql="SELECT * from ligne where id_ligne=$id_ligne";
                $db = config::getConnexion();
                try{
                $liste=$db->query($sql);
                return $liste;
                }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }
        
        function rechercherListeCommande($tarif){
                $sql="SELECT * from ligne where id_ligne=$cinn";
                $db = config::getConnexion();
                try{
                $liste=$db->query($sql);
                return $liste;
                }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }
}

?>