<?php 
class CalendarController{
	
	public function __construct() {
	
	}
			
	public function run(){	

			$tabevent = Db::getInstance()->calendar();






		# Un contrôleur se termine en écrivant une vue
		require_once(CHEMIN_VUES . 'Calendar.php');
	}
	
}
?>