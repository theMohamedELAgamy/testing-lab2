<?php
 class user{

	private $name;
	private $email;
	
	public function __construct($name,$email){
		$this->name=$name;
		$this->email=$email;
	}

	public function name ($name=""){
			if($name=="")  return $this->name;
			else $this->name=$name;
			return $this->name;
			
			
		
	}
	public function email($email=""){
		   if($email=="")  return $this->email; 
                        else $this->email=$email;
                        return $this->email;

			
		}
	
}
