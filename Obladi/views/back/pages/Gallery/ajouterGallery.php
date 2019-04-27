<?PHP
include "../../../../entities/gallery.php";
include "../../../../core/galleryC.php";

error_reporting(0) ;


if (isset($_POST['ss']) ){


$gallery=new gallery($_FILES['image'],$_POST['nom']);

$filename = $_FILES["image"]["name"];
	$tempname = $_FILES["image"]["tmp_name"];
	$folder = "uploads/".$filename ;
	move_uploaded_file($tempname, $folder);
//Partie3

$aC=new galleryC();
$aC->ajouterGallery($gallery);
$aC->ajouterGalleryimg($filename,$_POST['nom']);



header('Location: ajouterGallery.html');
	}

//*/

?>