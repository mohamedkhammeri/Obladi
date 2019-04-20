<?PHP
include "../../../../entities/utilisateur.php";
include "../../../../core/utlisateurC.php";

if (isset($_POST['nom']) and (isset($_POST['prenom']) and isset($_POST['dateNaissance']) and isset($_POST['email']) and isset($_POST['mdp']) and (isset($_POST['numTel']) and isset($_POST['region']) and isset($_POST['role']))

     {
	
     $u=new utilisateur($_POST['nom'],$_POST['prenom'],$_POST['dateNaissance'],$_POST['email'],$_POST['mdp'],$_POST['numTel'],$_POST['region'],5,true,$_POST['role']);

      $uC=new utilisateurC();
      $uC->creerCompte($u);
       header('Location: listeClients.php');
}

    else {
	echo "vérifier les champs";
   }



?>