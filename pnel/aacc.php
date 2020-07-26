
<!DOCTYPE HTML>
<html>
<?php

include_once "my tables.php";


?>
<head>
</head>
<body>
<!--<div id="wrapper"></div>-->
     <!-- Navigation -->
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>Details of cases</h3>
     <div class="bs-example4" data-example-id="contextual-table">

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
   <label>Customer id</label>
 <input disabled type="text" value="<?php  echo($case['Name']); ?>"style="width:auto;" name="nm" />
 <label>Customer Name</label>
 <input disabled type="text" value="<?php  echo($case['Email']); ?>" style="width:auto;" name="nm" />
<label>Customer Email</label>
 <input disabled type="text" value="<?php echo($case['Details']); ?>" style="width:auto;" name="ml" />
<label>Customer Phone</label>
 <input disabled type="text" value="<?php  echo($case['Status']); ?>" style="width:auto;" name="fn"   />  


 <br/>
<label>Case Details</label>

 <textarea disabled type="text"   style="width:600PX; height:auto; "  name="ksd" ><?php echo($case['Details']); ?> </textarea>
 <input type="submit" value="reject case" name="rjct">
 </form> 

 <br/> 
</div>
   
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
