<?php
include "Operation.php";
include "Database.php";
 class customers extends Database implements Operation{
	var $CustomerFirst;
	var $CustomerUsername;
	var $CustomerPassword;
	var $CustomerPhoneNumber;
	var $CustomerEmail;
 public function getCustomerFirst(){
	return $this->CustomerFirst;
	}
 public function setCustomerFirst($f){
	return $this->CustomerFirst = $f;
	}
	
	public function getCustomerUsername(){
	return $this->CustomerUsername;
	}
 public function setCustomerUsername($u){
	return $this->CustomerUsername = $u;
	}
	
	public function getCustomerPassword(){
	return $this->CustomerPassword;
	}
 public function setCustomerPassword($ps){
	return $this->CustomerPassword = $ps;
	}
	
	public function getCustomerPhoneNumber(){
	return $this->CustomerPhoneNumber;
	}
 public function setCustomerPhoneNumber($ph){
	return $this->CustomerPhoneNumber = $ph;
	}
	
	public function getCustomerEmail(){
	return $this->CustomerEmail;
	}
 public function setCustomerEmail($m){
	return $this->CustomerEmail = $m;
	}
	
 public function Add(){
	return parent::RUNDML("INSERT INTO customers(CustomerFirst,CustomerUsername,CustomerPassword,CustomerPhoneNumber,CustomerEmail) VALUES('".$this->getCustomerFirst()."','".$this->getCustomerUsername()."','".$this->getCustomerPassword()."','".$this->getCustomerPhoneNumber()."','".$this->getCustomerEmail()."')","CREATED SUCESSFULLY"); 	
	
	$check_duplicated_CustomerUsername = "SELECT FROM customers WHERE CustomerUsername = '".$CustomerUsername."'";
	$result = mysqli_query($conn,$check_duplicated_CustomerUsername);
	$count = mysqli_num_rows($result);	
	
	if($count>0){
		echo "<h3> User Taken </h3>";
		return false;
		}
	
	
	
	}

public function Update(){

	
	
	}
	
 public function Updateprofile(){
	
	return parent::RUNDML("update customers set CustomerFirst = '".$this->getCustomerFirst()."',CustomerUsername='".$this->getCustomerUsername()."', CustomerPassword='".$this->getCustomerPassword()."',
	CustomerPhoneNumber='".$this->getCustomerPhoneNumber()."'","CREATED SUCESSFULLY"); 	
	
/*	$check_duplicated_CustomerUsername = "SELECT FROM customers WHERE CustomerUsername = '".$CustomerUsername."'";
	$result = mysqli_query($conn,$check_duplicated_CustomerUsername);
	$count = mysqli_num_rows($result);	
	
	if($count>0){
		echo "<h3> User Taken </h3>";
		return false;
		}*/
	
	
	
	}
	 
	 

  public function UpdatePassword(){
	  return parent::RUNDML("update customers set CustomerPassword ='".$this->getCustomerPassword()."' where CustomerEmail='".$this->getCustomerEmail()."'","Password Updated");
	  }
 public function Delete(){}
   public function Deletecust($dl){
    return parent::RUNDML("DELETE from customers WHERE CustomerUsername='".$dl."' ","account deleted");
  
  }
 
 public function Search(){}
 
 public function Login(){
	 $log = parent::RUNSearch("select * from customers where CustomerUsername = '".$this->getCustomerUsername()."' and CustomerPassword ='".$this->getCustomerPassword()."'");

	 if($rows = mysqli_fetch_assoc($log) )
	 {
		 
		 return $rows; 
	 }
	
	 }	
	 
	public function CheckUser()
	  {
		
		  $log=parent::RunSearch("Select * From customers where CustomerEmail='".$this->getCustomerEmail()."'");
		  
		  return $log;
	  }
	  	public function CheckUsers()
	  {
		
		  $log=parent::RunSearch("Select * From customers where CustomerUsername='".$this->getCustomerUsername()."'");
		  
		  return $log;
	  }
  
}

?>
