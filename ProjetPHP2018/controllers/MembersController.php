<?php 
class MembersController {
	
	private $_db;

	public function __construct($db) {
		$this->_db = $db;
	}
			
	public function run(){	
		$notification='';
		if (!empty($_POST['form'])) {	
				if ($this->_db->update_members($_POST['login'],$_POST['password'],$_POST['name'],$_POST['lastname'],
				$_POST['birthdate'],$_POST['adress'],$_POST['phone'],$_POST['mail'],$_POST['picture']))
				{
					$notification='modification effectuée';
				} else {
					$notification='Erreur de modification';
				}	
			}
		}
		require_once(CHEMIN_VUES . 'member.php');
	}
} 
?>