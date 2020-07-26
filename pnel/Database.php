<?php
class Database
{
	var $conn;
	 
function __construct(){
	
	$this->conn = mysqli_connect("localhost","root","","myproject");
	
	
	}
function RUNDML($statment){
	if(!mysqli_query($this->conn,$statment))
	{
		
		
		return mysqli_error($this->conn);
		}
	else{
	
		return "action done";
		}
		

	}	 	
	
function RUNSearch($statment){
	
	 $result=mysqli_query($this->conn,$statment);
	 return $result;
	 
	
	}	 		
}
?>
