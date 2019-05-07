<?PHP

require_once '../../config.php';
require_once "../entities/utilisateur.php";
require_once "../core/utilisateurC.php";

if (isset($_POST['email']) and isset($_POST['mdp'])) {
    $email = ($_POST['email']);
    $mdp = ($_POST['mdp']);
    $mdp = crypt($mdp, "$6$rounds=5000$macleapersonnaliseretagardersecret$");

    if (login($email, $mdp)) {
        header('Location:  index.php');
    }
    if (!login($email, $mdp)) {
        header('Location:  login.php');
    }
} else {
    echo "vérifier les champs";
}
//*/

?>