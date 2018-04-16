<?php
class Event
{
	private $_date;
	private $_name;
	
	public function __construct($date,$name){
        $this->_date = $date;
		$this->_name = $name;
	}
	
	public function date(){
        return $this->_date;		
	}	
		
	public function name(){
		return $this->_name;
	}
	
	public function html_date(){
		return htmlspecialchars($this->_date);
	}
	
	public function html_titre(){
		return htmlspecialchars($this->_name);
	}
}
?>