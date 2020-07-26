<?php
include_once "Database.php";
include_once "Operation.php"; 
class casestemp extends Database implements Operation{
	var $Name;
	var $Email;
	var $Phone;
	var $Details;
	var $Status;
	var $OfficesUserName;
	
	 public function getName(){
	return $this->Name;
	}
 public function setName($n){
	return $this->Name = $n;
	}
	
		 public function getEmail(){
	return $this->Email;
	}
 public function setEmail($e){
	return $this->Email = $e;
	}
	
		 public function getPhone(){
	return $this->Phone;
	}
 public function setPhone($p){
	return $this->Phone = $p;
	}
	
		 public function getDetails(){
	return $this->Details;
	}
 public function setDetails($d){
	return $this->Details = $d;
	}
	
		 public function getStatus(){
	return $this->Status;
	}
 public function setStatus($s){
	return $this->Status = $s;
	}
	
			 public function getOfficesUserName(){
	return $this->OfficesUserName;
	}
 public function setOfficesUserName($ofu){
	return $this->OfficesUserName = $ofu;
	}
	
	 public function Addcase(){
	return parent::RUNDML("INSERT INTO casestemp(Name,Email,Phone,Details,Status,OfficesUserName)
 VALUES('".$this->getName()."','".$this->getEmail()."','".$this->getPhone()."','".$this->getDetails()."','".$this->getStatus()."','".$this->getOfficesUserName()."')"); 	}
public function Add(){}	
 public function Update(){}
 public function Delete(){}
 public function Search(){}
 

 
	
	
	
	
	}
?>