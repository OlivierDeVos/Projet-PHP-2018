<?php
class Event
{
	private $_name;
	private $_date;
	private $_description;
	private $_url;
	private $_location;
	
	public function __construct($name,$date,$description,$url,$location){
        $this->_name = $name;
		$this->_date = $date;
		$this->_description = $description;
		$this->_url = $url;
		$this->_location = $location;
	}
	
	public function date(){
        return $this->_date;		
	}	
		
	public function name(){
		return $this->_name;
	}
	public function description(){
		return $this->_description;
	}
	public function url(){
		return $this->_url;
	}
	public function location(){
		return $this->_location;
	}
	
}
?>