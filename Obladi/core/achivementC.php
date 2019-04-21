<?PHP


class achivementC {

 private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }

function ajouterNv($id){
		

		$sql="insert into achivement (idClient,ptfid,type) values (:idClient,:ptfid,:type)";
		$db = getConnexion();
		try{
        $req=$db->prepare($sql);
	
        $req->bindValue(':idClient',$id);
		$req->bindValue(':ptfid',5);
		$req->bindValue(':type',"debutant");
         $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}








}
?>
