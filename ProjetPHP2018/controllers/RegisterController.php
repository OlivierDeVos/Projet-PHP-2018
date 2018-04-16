<?php
class RegisterController{
	
	public function __construct(){
		
	}
	public function run(){

		$notification = "";

		if($_POST!=null){
			if(Db::getInstance()->login($_POST['login'], "test")===null){
				Db::getInstance()->register($_POST['login'],password_hash($_POST['password'],PASSWORD_BCRYPT),$_POST['firstName'],$_POST['lastName'],$_POST['date'],$_POST['Adress'],$_POST['phone'],$_POST['email']);
				header("Location: index.php?action=login");
			}
			$notification = "Nom d'utilisateur indisponible";
		}

		require_once(CHEMIN_VUES . 'register.php');
	}
}
?>


