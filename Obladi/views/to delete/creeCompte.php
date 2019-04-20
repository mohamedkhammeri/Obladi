<?PHP
include "../entities/utilisateur.php";
include "../core/utilisateurC.php";

if (isset($_POST['nom']) and isset($_POST['dateNaissance']) and isset($_POST['email']) and isset($_POST['mdp'])){
	
$u=new utilisateur($_POST['nom'],"nawfel",$_POST['email'],$_POST['dateNaissance'],$_POST['mdp'],21548754,"lamya","olalala",5,true);

$uC=new utilisateurC();
$uC->creerCompte($u);
header('Location: login.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>