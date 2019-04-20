<?PHP
include "../../../../entities/article.php";
include "../../../../core/articleC.php";
$aC=new articleC();
if (isset($_POST["id"])){
	$aC->archiverArticle($_POST["id"]);
	header('Location: listeArticles.php');
}

?>