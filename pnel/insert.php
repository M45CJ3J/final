<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" enctype="multipart/form-data">
foto
<input type="text" name="foto" />
<br/>
<input type="file" name="file" />
<br/>
<input type="submit" name="fto" />
<?php
if(isset($_POST['fto'])){
$dir = "../final/images";
$image = $_FILES['file']['name'];
$temp_name = $_FILES['file']['tmp_name'];
$img  = $_POST['foto'];
if($image!=""){
	$fdir = $dir.$img.".jpg";
	move_uploaded_file($temp_name,$fdir);
	}	
	
	echo("done");
}

?>

</form>
</body>
</html>