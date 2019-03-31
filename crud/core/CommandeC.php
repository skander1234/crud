<?PHP
include "../../config.php";
class CommandeC {
function afficherCommande ($commande){
                echo "Id_com: ".$commande->getId_com()."<br>";
                echo "Id_lig: ".$commande->getId_lig()."<br>";
                echo "Date: ".$commande->getDate()."<br>";
               
        }
       
        function ajouterCommande($commande){
                $sql="insert into commande (id_com,id_lig,Date) values (:id_com,:id_lig,:Date)";
                $db = config::getConnexion();
                try{
        $req=$db->prepare($sql);
                
        $id_com=$commande->getId_com();
        $id_lig=$commande->getId_lig();
        $Date=$commande->getDate();
        
                $req->bindValue(':id_com',$id_com);
                $req->bindValue(':id_lig',$id_lig);
                $req->bindValue(':Date',$Date);
               
                
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
                
        }
        
        function afficherCommandes(){
                //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
                $sql="SElECT * From commande";
                $db = config::getConnexion();
                try{
                $liste=$db->query($sql);
                return $liste;
                }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }       
        }
        function supprimerCommande($id_com){
                $sql="DELETE FROM commande where id_com= :id_com";
                $db = config::getConnexion();
        $req=$db->prepare($sql);
                $req->bindValue(':id_com',$id_com);
                try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }
        function modifierCommande($commande,$id_com){
                $sql="UPDATE commande SET id_com=:cinn, id_lig=:id_lig, Date=:Date WHERE id_com=:id_com";
                
                $db = config::getConnexion();
                //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{            
        $req=$db->prepare($sql);
                $cinn=$commande->getId_com();
        $id_lig=$commande->getId_lig();
        $Date=$commande->getDate();
        
                $datas = array(':cinn'=>$cinn, ':id_com'=>$id_com, ':id_lig'=>$id_lig,':Date'=>$Date);
                $req->bindValue(':cinn',$cinn);
                $req->bindValue(':id_com',$id_com);
                $req->bindValue(':id_lig',$id_lig);
                $req->bindValue(':Date',$Date);
                
                
                
            $s=$req->execute();
                        
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
                
        }
        function recupererCommande($id_com){
                $sql="SELECT * from commande where id_com=$id_com";
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
                $sql="SELECT * from commande where id_com=$cinn";
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