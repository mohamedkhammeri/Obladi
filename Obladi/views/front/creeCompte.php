<?PHP
include "../../entities/utilisateur.php";
include "../../core/utilisateurC.php";

if (isset($_POST['nom'])  and isset($_POST['prenom']) and   isset($_POST['email']) and isset($_POST['dateNaissance']) and isset($_POST['mdp'])  and isset($_POST['numTel'])  and isset($_POST['region'])  and isset($_POST['prof'])){
	
$u=new utilisateur($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['dateNaissance'],$_POST['mdp'],$_POST['numTel'],$_POST['region'],$_POST['prof'],5,true);

$uC=new utilisateurC();
$uC->creerCompte($u);
header('Location: login.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>