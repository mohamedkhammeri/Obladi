<?PHP

include "config.php";
class utilisateurC {
 
	function creerCompte($utilisateur){
		$sql="insert into utilisateur (nom,prenom,email,dateNaissance,mdp,numTel,region,prof,pointsFidelites,active,role) values (:nom,:prenom,:email,:dateNaissance,:mdp,:numTel,:region,:prof,:pointsFidelites,:active,:role)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$utilisateur->getNom();
        $prenom=$utilisateur->getPrenom();
        $email=$utilisateur->getEmail();
        $dateNaissance=$utilisateur->getDateNaissance();
        $mdp=$utilisateur->getMdp();
        $numTel=$utilisateur->getNumTel();
        $region=$utilisateur->getRegion();
        $prof=$utilisateur->getProf();
        $pointsFidelites=5;
        $active=true;
         $role='utilisateur';

        		$mdp = crypt($mdp, "$6$rounds=5000$macleapersonnaliseretagardersecret$");

		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':dateNaissance',$dateNaissance);
		$req->bindValue(':mdp',$mdp);
		$req->bindValue(':numTel',$numTel);
		$req->bindValue(':region',$region);
		$req->bindValue(':prof',$prof);
		$req->bindValue(':pointsFidelites',$pointsFidelites);
		$req->bindValue(':active',$active);
		$req->bindValue(':role',$role);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}



    function recupererUtilisateur($nom){
        $sql="SELECT * from utilisateur where nom=$nom";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
     function modifierUtilisateur($utilisateur,$nom){
        $sql="UPDATE utilisateur SET  nom=:nom,prenom=:prenom,email=:email,dateNaissance=:dateNaissance,mdp=:mdp,numTel=:numTel,region=:region,prof=:prof WHERE nom='".$nom."'";
        
        $db = config::getConnexion();
try{        
        $nom=$utilisateur->getNom();
        $prenom=$utilisateur->getPrenom();
        $email=$utilisateur->getEmail();
        $dateNaissance=$utilisateur->getDateNaissance();
        $mdp=$utilisateur->getMdp();
        $numTel=$utilisateur->getNumTel();
        $region=$utilisateur->getRegion();
        $prof=$utilisateur->getProf();
       

      
               

 $req=$db->prepare($sql);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':email',$email);
        $req->bindValue(':dateNaissance',$dateNaissance);
        $req->bindValue(':mdp',$mdp);
        $req->bindValue(':numTel',$numTel);
        $req->bindValue(':region',$region);
        $req->bindValue(':prof',$prof);
        
        
        
            $s=$req->execute();
            
           
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
 
        }}
		function login($email,$mdp){
		$DB = config::getConnexion();
		$valid = true;
		try{
		

          $req = $DB->query("SELECT * from utilisateur where email='$email' and mdp='$mdp' and active=1");

            $req = $req->fetch(); //parcour taa resultat

            // Si on a pas de résultat alors c'est qu'il n'y a pas d'utilisateur correspondant au couple mail / mot de passe
            if ($req['id'] == ""){
                $valid = false;
                $er_mail = "Le mail ou le mot de passe est incorrecte";
            }

            // S'il y a un résultat alors on va charger la SESSION de l'utilisateur en utilisateur les variables $_SESSION
            if ($valid){

                $_SESSION['id'] = $req['id']; // id de l'utilisateur unique pour les requêtes futures
                $_SESSION['nom'] = $req['nom'];
                $_SESSION['prenom'] = $req['prenom'];
                $_SESSION['email'] = $req['email'];
                $_SESSION['dateNaissance'] = $req['dateNaissance'];
                $_SESSION['mdp'] = $req['mdp'];
                $_SESSION['numTel'] = $req['numTel'];
                $_SESSION['region'] = $req['region'];
                $_SESSION['prof'] = $req['prof'];
                $_SESSION['pointsFidelites'] = $req['pointsFidelites'];
                
                $goto="";
                   if($req['role']=="admin")
                {$goto='Location:  ../back/index.php';}
	            else
	            {$goto='Location:  index.php';}
                header($goto);
                exit;
            }   


		return $valid;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}






		function afficherUtilisateurs(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From utilisateur where role='utilisateur'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	    }


function rechercher($s)
    {
         $sql = "select * from utilisateur where nom ='$s'";
         $db = config::getConnexion();
         $req=$db->prepare($sql);
        
         try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
     function AfficherClientsT()
    {
        $sql="SELECT * From utilisateur order by nom ";
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