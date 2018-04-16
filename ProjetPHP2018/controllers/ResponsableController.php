<?php 
class ResponsableController{
	
	public function __construct() {
	
	}
			
	public function run(){	
		
		if($_SESSION['admin']<2){
			header('Location: index.php?action=accueil');
		}

		$tablogin=Db::getInstance()->validationList();
		

		if(isset($_POST['choix'])){
			for ($i=0;$i<count($_POST['choix']);$i++){
				Db::getInstance()->setPrivileges(1,$tablogin[$_POST['choix'][$i]]->nick());
				header("Location: index.php?action=responsable");
			}
		}




		# Un contrôleur se termine en écrivant une vue
		require_once(CHEMIN_VUES . 'responsable.php');
	}
	
}
?>