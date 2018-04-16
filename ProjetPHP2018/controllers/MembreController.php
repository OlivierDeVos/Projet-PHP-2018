<?php 
class MembreController{
	
	public function __construct() {
	
	}
			
	public function run(){	
		
		if($_SESSION['admin']<1){
			header('Location: index.php?action=accueil');
		}
		# Un contrôleur se termine en écrivant une vue
		require_once(CHEMIN_VUES . 'membre.php');
	}
	
}
?>