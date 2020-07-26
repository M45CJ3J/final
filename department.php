<?php
include "Operation.php";
include "Database.php";



 class lawyer extends Database implements Operation{
	 
	 
	 public function Add(){}
	  public function Update(){}
		public function Delete(){}
        public function Search(){}
		 public function GetData()
		 
		 {
		return parent::RunSearch("select * from department");
			 	 
		 }
		 }
 
 ?>