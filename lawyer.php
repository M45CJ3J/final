
<?php
include "Operation.php";
include "Database.php";



 class lawyer extends Database implements Operation{
	
	var $LawyerOfficeNAME;
	var $Department;
	var $StartWorkingDate;
	var $OfficeUsername;
	var $LawyerPassword;
	var $City;
	var $Street;
	var $NumberOfHouse;
	var $IDNumber;
	var $SyndicateNumber;
	var $PhoneNumber;
	var $LawyerEmail;
	
	
	
	
 public function getLawyerOfficeNAME(){
	return $this->LawyerOfficeNAME;
	}
 public function setLawyerOfficeNAME($lon){
	return $this->LawyerOfficeNAME = $lon;
	}
	
	 public function getDepartment(){
	return $this->Department;
	}
 public function setDepartment($d){
	return $this->Department = $d;
	}
	
	public function getStartWorkingDate(){
	return $this->StartWorkingDate;
	}
 public function setStartWorkingDate($sw){
	return $this->StartWorkingDate = $sw;
	}
	
	public function getOfficeUsername(){
	return $this->OfficeUsername;
	}
 public function setOfficeUsername($ou){
	return $this->OfficeUsername = $ou;
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
	
		public function getCity(){
	return $this->City;
	}
 public function setCity($ct){
	return $this->City = $ct;
	}
	
 public function getSyndicateNumber(){
	return $this->SyndicateNumber;
	}
 public function setSyndicateNumber($sn){
	return $this->SyndicateNumber = $sn;
	}
	
	
	public function getLawyerEmail(){
	return $this->LawyerEmail;
	}
 public function setLawyerEmail($lm){
	return $this->LawyerEmail = $lm;
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
	
 public function Update(){}

 public function Delete(){}
   public function Deletelaw($dw){
    return parent::RUNDML("DELETE from customers WHERE CustomerUsername='".$dw."' ","account deleted");
  
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
      $log=parent::RunSearch("Select * From lawyers where LawyerEmail='".$this->getLawyerEmail()."'");
    return $log;

  }
  
 public function Citys(){
	 $log = parent::RUNSearch("select City from lawyers");

	 if($rows = mysqli_fetch_assoc($log) )
	 {
		 
		 return $rows; 
	 }
}
 public function Department(){
	 $log = parent::RUNSearch("select Department from lawyers");

	 if($rows = mysqli_fetch_assoc($log) )
	 {
		 
		 return $rows; 
	 }
}
 public function LawyerOfficeNAME(){
	 $log = parent::RUNSearch("select LawyerOfficeNAME from lawyers");

	 if($rows = mysqli_fetch_assoc($log) )
	 {
		 
		 return $rows; 
	 }
}

 public function LawData(){
	$log = parent::RUNSearch("select * from lawyers where LawyerOfficeNAME = '".$this->getLawyerOfficeNAME()."',
	 StartWorkingDate = '".$this->getStartWorkingDate()."', City = '".$this->getCity()."', SyndicateNumber = '".$this->getSyndicateNumber()."', LawyerEmail = '".$this->getLawyerEmail()."' ");

	 if($rows = mysqli_fetch_assoc($log) )
	 {
		 
		 return $rows; 
	 }
	 
	 }
	/*
	public function xx(){
	$log = parent::RUNSearch("Select * From lawyers  where OfficeUsername = '".$this->getOfficeUsername()."' ");

	 if($rows = mysqli_fetch_assoc($log) )
	 {
		 
		 return $rows; 
	 }
	 
	 }
*/
 public function xx()
{	

	return $this->RUNSearch("Select * From lawyers  WHERE OfficeUsername = '".$this->getOfficeUsername()."'");
	
	 }
	 




 public function gets($searchtext)
{	
	$g = parent::RUNSearch("Select * From lawyers  WHERE OfficeUsername like '%".$searchtext."%' OR City like '%".$searchtext."%'
OR	SyndicateNumber like '%".$searchtext."%' ");
	return $g;
	
	
		 }


}  
?>