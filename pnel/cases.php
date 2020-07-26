<?PHP
include_once "Operation.php";
include_once "Database.php";

class cases extends Database implements Operation{
	
	var $CasesID;
	var $CasesNumber;
	var $Casesdate;
	var $CasesDetails;
	var $CasesResult;
	var $CasesStatus;
	var $LawyerName;
	var $OfficeUserName;
	var $CustomerEmail;
	
 public function getCasesID(){
	return $this->CasesID;
	}
 public function setCasesID($ci){
	return $this->CasesID = $ci;
	}
 
 public function getCasesNumber(){
	return $this->CasesNumber;
	}
 public function setCasesNumber($cn){
	return $this->CasesNumber = $cn;
	}
	
	public function getCasesdate(){
	return $this->Casesdate;
	}
 public function setCasesdate($cds){
	return $this->Casesdate = $cds;
	}

	public function getCasesDetails(){
	return $this->CasesDetails;
	}
 public function setCasesDetails($cd){
	return $this->CasesDetails = $cd;
	}
	
	public function getCasesResult(){
	return $this->CasesResult;
	}
 public function setCasesResult($cr){
	return $this->CasesResult = $cr;
	}
	
	public function getCasesStatus(){
	return $this->CasesStatus;
	}
 public function setCasesStatus($cs){
	return $this->CasesStatus = $cs;
	}
	
	public function getLawyerName(){
	return $this->LawyerName;
	}
 public function setLawyerName($ln){
	return $this->LawyerName = $ln;
	}
	
	public function getOfficeUserName(){
	return $this->OfficeUserName;
	}
 public function setOfficeUserName($ou){
	return $this->OfficeUserName = $ou;
	}
	
	public function getCustomerEmail(){
	return $this->CustomerEmail;
	}
 public function setCustomerEmail($ce){
	return $this->CustomerEmail = $ce;
	}

	
	
	
	
		 public function Add(){
	return parent::RUNDML("INSERT INTO cases
	(CasesID,CasesNumber,Casesdate,CasesDetails,LawyerName,OfficeUserName,CustomerEmail)
	 VALUES('".$this->getCasesID()."','".$this->getCasesNumber()."','".$this->getCasesdate()."','".$this->getCasesDetails()."','".$this->getLawyerName()."','".$this->getOfficeUserName()."','".$this->getCustomerEmail()."')","case added"); }
	

	 
	 public function Update(){}
	 public function Delete(){}
	  public function Search(){}
	  
	   public function upd()
{	
//return "aaa";
	return $this->RUNSearch("Select * From cases where CasesNumber = ".$this->getCasesNumber()." ");
	
	 }
	 
 public function Updatecase(){
	
return parent::RUNDML("update cases set CasesDetails = '".$this->getCasesDetails()."',CasesResult='".$this->getCasesResult()."', CasesStatus='".$this->getCasesStatus()."',
	LawyerName='".$this->getLawyerName()."',CustomerEmail='".$this->getCustomerEmail()."' where CasesNumber = '".$this->getCasesNumber()."' ","CREATED SUCESSFULLY");
	}



}
?>