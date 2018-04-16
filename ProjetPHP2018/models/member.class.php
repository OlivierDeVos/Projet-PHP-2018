<?php
class Member

{
    private $_login;
    private $_password;
    private $_name;
    private $_lastname;
    private $_birthdate;
    private $_adress;
    private $_phone;
    private $_mail;
    private $_picture;

    
	
	public function __construct($login,$password,$name,$lastname,$birthdate,$adress,$phone,$mail,$picture){
		$this->_login = $login;
        $this->_password = $password;        
		$this->_name = $name;
		$this->_lastname = $lastname;
		$this->_birthdate = $birthdate;
		$this->_adress = $adress;
		$this->_phone = $phone;
		$this->_mail = $mail;
		$this->_picture = $picture;
	}
	
	public function login(){
		return $this->_login;		
    }

    public function password(){
		return $this->_password;		
    }

    public function name(){
		return $this->_name;		
    }

    public function lastname(){
		return $this->_lastname;		
    }
    
    public function birthdate(){
		return $this->_birthdate;		
    }
    
    public function adress(){
		return $this->_adress;		
    }
    
    public function phone(){
		return $this->_phone;		
    }
    
    public function mail(){
		return $this->_mail;		
    }
    
    public function picture(){
		return $this->_picture;		
    }
        
	public function html_login(){
		return htmlspecialchars($this->_login);
	}
    
    public function html_password(){
		return htmlspecialchars($this->_password);
    }
    
    public function html_name(){
		return htmlspecialchars($this->_name);
    }

    public function html_lastname(){
		return htmlspecialchars($this->_lastname);
    }
    
    public function html_birthdate(){
		return htmlspecialchars($this->_birthdate);
    }
    
    public function html_adress(){
		return htmlspecialchars($this->_adress);
    }
    
    public function html_phone(){
		return htmlspecialchars($this->_phone);
    }
    
    public function html_mail(){
		return htmlspecialchars($this->_mail);
    }
    
    public function html_picture(){
		return htmlspecialchars($this->_picture);
	}
}
?>