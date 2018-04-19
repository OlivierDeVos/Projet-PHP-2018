<?php 
class MembreController {
	
	private $_db;

	public function __construct() {
		
	}
			
	public function run(){	
		$notification='';
		$user = Db::getinstance()->login($_SESSION['name']);
		
		if(isset($_POST['submit'])){


			if($_FILES['picture']['name']!=''){

				if($_SESSION['picture']!="views/pictures/default.png"){
					unlink ($_SESSION['picture']);
				}



				$picture = 'views/pictures/'.basename($_FILES['picture']['tmp_name']).time().'.png';
				move_uploaded_file($_FILES['picture']['tmp_name'], $picture);
				$_SESSION['picture']=$picture;
			}


			Db::getinstance()->updateMember($_SESSION['name'],$_POST['firstName'],$_POST['lastName'],$_POST['date'],$_POST['Adress'],$_POST['phone'],$_SESSION['picture'],$_POST['email']);
				header("Location: index.php?action=membre");
		}


		require_once(CHEMIN_VUES . 'member.php');
	}
} 
?>