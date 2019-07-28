<?php
if(isset($_POST["upload"])){
foreach($_POST['year'] as $year1);
echo '<script type="text/javascript">alert("'.$year1.'");</script>';
}
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Update Mysql Database through Upload CSV File using PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Update Mysql Database through Upload CSV File using PHP</a></h2>
   <br />
   <form method="post" enctype='multipart/form-data'>
choose:&nbsp;&nbsp;<select name="year[]" id="mySelect1">
<option value="1st year sem1">1/4sem1</option>
<option value="1st year sem2">1/4sem2</option>
<option value="2nd year sem1">2/4sem1</option>
<option value="2nd year sem2">2/4sem2</option>
<option value="3rd year sem1">3/4sem1</option>
<option value="3rd year sem2">3/4sem2</option>
<option value="4th year sem1">4/4sem1</option>
<option value="4th year sem2">4/4sem2</option>
</select><br><br><br>
<input type="submit" name="upload" class="btn btn-info" value="Upload" />
  </div>
 </body>
</html>
