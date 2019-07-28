<?php
include("csv.php");
$csv=new csv();
if(isset($_POST['sub'])){
	$csv->import($_FILES['file']['tmp_name']);
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" enctype="multipart/form-data" > 
    <input type="file" name="file" >
    <input type="submit" name="sub" value="Import" >
</form>
</body>