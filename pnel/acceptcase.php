<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
include_once "my tables.php";
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

   <?php 
   if(isset($_GET['id'])) {
	//   include "casestemp.php";
	   $case = new casestemp();
	   
	   $case->setID($_GET['id']);
	   $c = $case->getCase();
	   
	   $case = mysqli_fetch_assoc($c);
	   //var_dump($case);
   }
   ?>
 <form method="post">
 <label>Customer Name</label>
 <input disabled type="text" value="<?php echo($rows['ID'])?>" style="width:auto;" name="nm" />
<label>Customer Email</label>
 <input disabled type="text" value="<?php echo($rows['Name'])?>" style="width:auto;" name="ml" />
<label>Customer Phone</label>
 <input disabled type="text" value="<?php echo($rows['Phone'])?>" style="width:auto;" name="fn"   />  
 <br/>
<label>Case Details</label>
   <textarea disabled type="text"   style="width:600PX; height:auto; "  name="ksd" >  <?php echo($rows['Details']); "<br/>" ?>   </textarea>
 <br/>
   <input type="submit" value="accept case" name="acpt"> 
   </form>   
</body>
</html>