<?PHP
session_start();
include "../entities/utilisateur.php";
include "../core/utilisateurC.php";



if (isset($_POST['email']) and isset($_POST['mdp'])){
	
$email=($_POST['email']);
$mdp=($_POST['mdp']);
$uC=new utilisateurC();
if($uC->login($email,$mdp))
{
	header('Location:  index.php');
}
if(!$uC->login($email,$mdp))
{
	header('Location:  index.php');
}
}else{
	echo "vérifier les champs";
}
//*/

?>