<?PHP
include "/config.php";

class articleC {


function afficherArticle ($article){
		echo "titre: ".$article->getTitre()."<br>";
		echo "date: ".$article->getDate()."<br>";
		echo "contenue: ".$article->getContenue()."<br>";
	}


    function ajouterArticle($article){
		

		$sql="insert into article (image,titre,date,contenue,archive) values (:image,:titre,:date,:contenue,:archive)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	    $image=$article->getImage();
        $titre=$article->getTitre();
        $contenue=$article->getContenue();
        $date=date('y-m-d');
        $archive=0;
        $req->bindValue(':image',$image);
		$req->bindValue(':titre',$titre);
		$req->bindValue(':contenue',$contenue);
		$req->bindValue(':date',$date);
		$req->bindValue(':archive',$archive);
		
         $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

    function ajouterArticleimg($titre,$filename){
		$sql="UPDATE article SET image=:image WHERE titre=:titre";
		$db = config::getConnexion();
		try{
		
        $req=$db->prepare($sql);
	
		$req->bindValue(':titre',$titre);
		$req->bindValue(':image',$filename);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function afficherArticles()
	{

		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From article where archive=0 ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherArticlesAdmin()
	{

		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From article";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function archiverArticle($id){
		$sql="UPDATE article SET archive=1 where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}	
}

?>