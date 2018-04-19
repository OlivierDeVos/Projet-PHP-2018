<?php
class Db{
	private static $instance = null;
	private $_db;
	
	private function __construct(){
		try{
			$this->_db=new PDO('mysql:host=localhost;dbname=projetphp;charset=utf8','root','');
			$this->_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$this->_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
		}
		catch(PDOException $e){
			die('Erreur de conexion à la base de données:'.$e->getMessage());
		}
	}
	public static function getInstance(){
		if(is_null(self::$instance)){
			self::$instance = new Db();
		}
		return self::$instance;
	}



	public function register($login,$password,$first_name,$last_name,$birth_date,$adress,$phone,$mail){
			$query ='INSERT INTO members (login,password,first_name,last_name,birth_date,adress,phone,mail,privileges) VALUE('.$this->_db->quote($login).','.$this->_db->quote($password).','.$this->_db->quote($first_name).','.$this->_db->quote($last_name).','.$this->_db->quote($birth_date).','.$this->_db->quote($adress).','.$this->_db->quote($phone).','.$this->_db->quote($mail).',0)';
			$this->_db->prepare($query)->execute();
	}

	public function login($login){
			$query = "SELECT * FROM members WHERE login=" . $this->_db->quote($login);
			$result = $this->_db->query($query);
			
			if($result->rowCount()==0)
				return null;
			else{
				$row=$result->fetch();
				return new login($row->login,$row->password,$row->first_name,$row->last_name,$row->birth_date,$row->adress,$row->phone,$row->mail,$row->Picture,$row->privileges);
			}
				
	}
	public function validationList(){
		$query = "SELECT * FROM members WHERE privileges=0";
		$result = $this->_db->query($query);
			
		$tableau=array();
		if($result->rowcount()==0){
			return $tableau;
		}
		else{
			while($row=$result->fetch()){
				if($row->privileges<1){
					$tableau[] = new login($row->login,$row->password,$row->first_name,$row->last_name,$row->birth_date,$row->adress,$row->phone,$row->mail,$row->privileges);
				}
			}
			return $tableau;
		}
	}
	public function setPrivileges($bit,$nick) {
		$query = 'UPDATE `members` SET `privileges`='.$this->_db->quote($bit).' WHERE login='.$this->_db->quote($nick);
		$this->_db->prepare($query)->execute();
	}


	public function calendar(){
		$query = "SELECT * FROM events ";
		$result = $this->_db->query($query);
			
		$tableau=array();
		if($result->rowcount()==0){
			return $tableau;
		}
		else{
			while($row=$result->fetch()){
					$tableau[] = new event($row->name,$row->date,$row->description,$row->URL,$row->location);
			}
			return $tableau;
		}
	}
	public function updateMember($login,$firstName,$lastName,$birth,$adress,$phone,$picture,$mail) {
		$query = 'UPDATE `members` SET `first_name`='.$this->_db->quote($firstName).',`last_name`='.$this->_db->quote($lastName).',`birth_date`='.$this->_db->quote($birth).',`adress`='.$this->_db->quote($adress).',`phone`='.$this->_db->quote($phone).',`picture`='.$this->_db->quote($picture).',`mail`='.$this->_db->quote($mail).' WHERE `login` = '.$this->_db->quote($login);
		$this->_db->prepare($query)->execute();

	}
}