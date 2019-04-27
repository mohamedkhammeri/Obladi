<?PHP
class article{
	private $id;
	private $image;
	
	private $nom;

    function __construct($image,$nom){
		$this->image=$image;
		$this->nom=$nom;
		
	}

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getImage(){
		return $this->image;
	}

	public function setImage($image){
		$this->image = $image;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setNom($titre){
		$this->titre = $nom;
	}










}
?>