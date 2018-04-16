<?php
class LoginController{
	
	public function __construct(){
		
	}
	public function run(){
		
		$notification = ' ';
		
		
		
		if (empty($_POST['pw'])||empty($_POST['name'])){
		}		
		else{	
			if(Db::getInstance()->login($_POST['name'])===null){
				$notification = 'Ce compte n\'existe pas';
			}else{
				if(password_verify($_POST['pw'],Db::getInstance()->login($_POST['name'])->pw())){
					var_dump(Db::getInstance()->login($_POST['name']));
					if(Db::getInstance()->login($_POST['name'])->admin()>0){
						$_SESSION['name']=$_POST['name'];
						$_SESSION['admin']=Db::getInstance()->login($_POST['name'])->admin();

						header("Location: index.php?action=membre");

						
					}
					else{
						$notification='Votre compte est en cours de validation';
					}
				}
				else {
					$notification='mot de passe invalide';
				}
			}
		}	
		require_once(CHEMIN_VUES . 'login.php');
	}
}
?>