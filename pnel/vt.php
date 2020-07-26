<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
session_start();
include_once 'lawyer.php';
include_once 'casestemp.php';

//require_once 'casestemp.php';
//require_once('lawyer.php');
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
  <?php
                 $ll =    $_SESSION['Law'];               
								
			$z = new casestemp;
			$r = $z-> RunSearch("Select * From casestemp where OfficesUserName = '".$ll."'   order by ID desc  ");
								   
								   while($rows = mysqli_fetch_assoc($r))
								   {
									 
																   
								   ?>
  <form method="post">
 <label>Customer id</label>
 <input disabled type="text" value="<?php echo($rows['ID']); "<br/>"?>" style="width:auto;" name="nm" />
 <label>Customer Name</label>
 <input disabled type="text" value="<?php echo($rows['Name']); "<br/>"?>" style="width:auto;" name="m" />
<label>Customer Email</label>
 <input disabled type="text" value="<?php echo($rows['Email']); "<br/>" ?>" style="width:auto;" name="ml" />
<label>Customer Phone</label>
 <input disabled type="text" value="<?php echo($rows['Phone']); "<br/>" ?>" style="width:auto;" name="fn"   />  
 <label>to lawyer</label>
 <input disabled type="text" value="<?php echo($rows['OfficesUserName']); "<br/>" ?>" style="width:auto;" name="fn"   />  
 <br/>
<label>Case Details</label>
   <textarea disabled type="text"   style="width:600PX; height:auto; "  name="ksd" >  <?php echo($rows['Details'])?>   </textarea>
 <br/>

   <input  type="submit" value="accept case" name= "vcxcc" >  
   
   <?php
   if(isset($_POST['vcxcc'])){
		 
		   
		   }
	   
	   
	   
   
   ?>
</form>
   <?php } ?>
</body>
</html>