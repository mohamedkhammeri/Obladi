<?PHP
include "../../../../entities/article.php";
include "../../../../core/articleC.php";
error_reporting(0) ;



if (isset($_POST['ss']) ){

$a=new article($_FILES['image'],$_POST['titre'],date('y-m-d'),$_POST['contenue'],0);

$filename = $_FILES["image"]["name"];
	$tempname = $_FILES["image"]["tmp_name"];
	$folder = "uploads/".$filename ;
	move_uploaded_file($tempname, $folder);
//Partie3

$aC=new articleC();
$aC->ajouterArticle($a);
$aC->ajouterArticleimg($_POST['titre'],$filename);



header('Location: listeArticles.php');
	
}
else{
	echo "vérifier les champs";
}
//*/

?>