
<?php
include "Operation.php";
include "Database.php";



 class lawyers extends Database implements Operation{
	var $Foto;
	var $LawyerOfficeNAME;
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
	
	
	 public function getFoto(){
	return $this->Foto;
	}
 public function setFoto($f){
	return $this->Foto = $f;
	}
	
 public function getLawyerOfficeNAME(){
	return $this->LawyerOfficeNAME;
	}
 public function setLawyerOfficeNAME($lon){
	return $this->LawyerOfficeNAME = $lon;
	}
	
	public function getStartWorkingDate(){
	return $this->StartWorkingDate;
	}
 public function setStartWorkingDate($swd){
	return $this->StartWorkingDate = $swd;
	}
	
	public function getOfficeUsername(){
	return $this->OfficeUsername;
	}
 public function setOfficeUsername($ousr){
	return $this->OfficeUsername = $ousr;
	}
	
	public function getLawyerPassword(){
	return $this->LawyerPassword;
	}
 public function setLawyerPassword($lp){
	return $this->LawyerPassword = $lp;
	}
	
	public function getCity(){
	return $this->City;
	}
 public function setCity($c){
	return $this->City = $c;
	}
	
		public function getStreet(){
	return $this->Street;
	}
 public function setStreet($s){
	return $this->Street = $s;
	}
	
		public function getNumberOfHouse(){
	return $this->NumberOfHouse;
	}
 public function setNumberOfHouse($nh){
	return $this->NumberOfHouse = $nh;
	}
	
			public function getIDNumber(){
	return $this->IDNumber;
	}
 public function setIDNumber($in){
	return $this->IDNumber = $in;
	}
	
			public function getSyndicateNumber(){
	return $this->SyndicateNumber;
	}
 public function setSyndicateNumber($sn){
	return $this->SyndicateNumber = $sn;
	}
	
			public function getPhoneNumber(){
	return $this->PhoneNumber;
	}
 public function setPhoneNumber($pn){
	return $this->PhoneNumber = $pn;
	}
	
			public function getLawyerEmail(){
	return $this->LawyerEmail;
	}
 public function setLawyerEmail($le){
	return $this->LawyerEmail = $le;
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
  public function UpdatePassword(){
	  return parent::RUNDML("update customers set CustomerPassword ='".$this->getCustomerPassword()."' where CustomerEmail='".$this->getCustomerEmail()."'","Password Updated");
	  }
 public function Delete(){}
   public function Deletelaw($dw){
    return parent::RUNDML("DELETE from customers WHERE CustomerUsername='".$dw."' ","account deleted");
  
  }
 
 public function Search(){}
 
 public function LoginLOW(){
	 $vvv = parent::RUNSearch("select * from lawyers where OfficeUsername = '".$this->getOfficeUsername()."' and
	  LawyerPassword ='".$this->getLawyerPassword()."'");

	 if($rows = mysqli_fetch_assoc($vvv) )
	 {
		 
		 return $rows; 
	 }
	
	 }	
	 
	  public function CheckUser()
  {
      $log=parent::RunSearch("Select * From customers where OfficeUsername='".$this->getOfficeUsername()."'");
    return $log;

  }
}

?>