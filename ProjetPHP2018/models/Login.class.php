<?php
class Login{
	private $_nick;
	private $_pw;
	private $_firstName;
	private $_lastName;
	private $_birthDate;
	private $_adress;
	private $_phone;
	private $_mail;
	private $_picture;
	private $_admin;
	
	public function  __construct($nick,$pw,$firstName,$lastName,$birthDate,$adress,$phone,$mail,$picture,$admin){
		$this->_pw = $pw;
		$this->_nick = $nick;
		$this->_firstName = $firstName;
		$this->_lastName = $lastName;
		$this->_birthDate = $birthDate;
		$this->_adress = $adress;
		$this->_phone = $phone;
		$this->_mail = $mail;
		$this->_picture = $picture;
		$this->_admin = $admin;
	}
	
	public function pw(){
		return $this->_pw;
	}
	public function nick(){
		return $this->_nick;
	}
	public function firstName(){
		return $this->_firstName;
	}
	public function lastName(){
		return $this->_lastName;
	}
	public function birthDate(){
		return $this->_birthDate;
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
	public function admin(){
		return $this->_admin;
	}
}