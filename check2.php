<?php
$connect = mysqli_connect("localhost", "root", "", "miniproject");
$message = '';
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
if(isset($_POST["upload"]))
{
	
foreach($_POST['year'] as $year1);
echo "<h2>" . $year1 . "</h2>";
 if($_FILES['product_file']['name'])
 {
  $filename = explode(".", $_FILES['product_file']['name']);
  if(end($filename) == "csv")
  {
   $handle = fopen($_FILES['product_file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    $id = mysqli_real_escape_string($connect, $data[0]);
    $rollno= mysqli_real_escape_string($connect, $data[1]);  
    $name = mysqli_real_escape_string($connect, $data[2]);
    $s1 = mysqli_real_escape_string($connect, $data[3]);
    $s2 = mysqli_real_escape_string($connect, $data[4]);
    $s3 = mysqli_real_escape_string($connect, $data[5]);
    $s4 = mysqli_real_escape_string($connect, $data[6]);
    $s5 = mysqli_real_escape_string($connect, $data[7]);
    $s6 = mysqli_real_escape_string($connect, $data[8]);
    $s7 = mysqli_real_escape_string($connect, $data[9]);
    $s8 = mysqli_real_escape_string($connect, $data[10]);
    $s9 = mysqli_real_escape_string($connect, $data[11]);
if(strcmp($year1,"1/4sem1")==0){
	
    $query = "
     insert into `1/4sem1`(id,Rollno,Name,BEE,EC,EM,English,Ethics,Clab,EClab) values('$id','$rollno','$name','$s1','$s2','$s3','$s4','$s5','$s6','$s7')
    ";
    mysqli_query($connect, $query);
}
else if(strcmp($year1,"1/4sem2")==0){
    $query = "
     insert into `1/4sem2`(id,Rollno,Name,EM2,PHYSICS,ES,ED,EEE,PHYSICSLAB,ENGLISHLAB,CplusLAB,WORKSHOP) values('$id','$rollno','$name','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9')
    ";
    mysqli_query($connect, $query);
}
else if(strcmp($year1,"2/4sem1")==0){
    $query = "
     insert into `2/4sem1`(id,Rollno,Name,DS,DLD,DMS,CO,DC,DSLAB,DELAB,PYTHONLAB) values('$id','$rollno','$name','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8')
    ";
    mysqli_query($connect, $query);
}
else if(strcmp($year1,"2/4sem2")==0){
    $query = "
     insert into `2/4sem2`(id,Rollno,Name,CN,ISD,OS,PSQT,CGM,CNLAB,CGMLAB,OSLAB) values('$id','$rollno','$name','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8')
    ";
    mysqli_query($connect, $query);
}
else if(strcmp($year1,"3/4sem1")==0){
    $query = "
     insert into `3/4sem1`(id,Rollno,Name,FLAT,JAVA,UNP,DBMS,PE1,UNPLAB,DBMSLAB,JAVALAB,QAVA) values('$id','$rollno','$name','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9')
    ";
    mysqli_query($connect, $query);
}
else if(strcmp($year1,"3/4sem2")==0){
    $query = "
     insert into `3/4sem2`(id,Rollno,Name,CD,OOAD,DAA,PE2,MC,CASETOOLSLAB,MCLAB,WTLAB,QAVA2) values('$id','$rollno','$name','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9')
    ";
    mysqli_query($connect, $query);
}
   }
   fclose($handle);
   header("location:check.php?updation=1");
  }
  else
  {
   $message = '<label class="text-danger">Please Select CSV File only</label>';
  }
 }
 else
 {
  $message = '<label class="text-danger">Please Select File</label>';
 }
}

if(isset($_GET["updation"]))
{
 $message = '<label class="text-success">Product Updation Done</label>';
}

$query = "SELECT * FROM `1/4sem2`";
$result = mysqli_query($connect, $query);
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
<option value="1/4sem1">1/4sem1</option>
<option value="1/4sem2">1/4sem2</option>
<option value="2/4sem1">2/4sem1</option>
<option value="2/4sem2">2/4sem2</option>
<option value="3/4sem1">3/4sem1</option>
<option value="3/4sem2">3/4sem2</option>
<option value="4/4sem1">4/4sem1</option>
<option value="4/4sem2">4/4sem2</option>
</select><br><br><br>
    <p><label>Please Select File(Only CSV Formate)</label>
    <input type="file" name="product_file" /></p>
    <br />
    <input type="submit" name="upload" class="btn btn-info" value="Upload" />
   </form>
   <br />
   <?php echo $message; ?>
   <h3 align="center">Deals of the Day</h3>
   <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <tr>
      <th>Rollno</th>
      <th>s1</th>
      <th>s2</th>
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["Rollno"].'</td>
       <td>'.$row["ES"].'</td>
       <td>'.$row["ED"].'</td>
      </tr>
      ';
     }
     ?>
    </table>
   </div>
  </div>
 </body>
</html>
