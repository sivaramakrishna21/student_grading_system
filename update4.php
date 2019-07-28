<?php
$connect = mysqli_connect("localhost", "root", "", "miniproject");
$message = '';

if(isset($_POST["upload"]))
{
	$arr = array(
    "O"=>10,
    "A+"=>9,
    "A"=>8,
    "B+"=>7,
    "B"=>6,
    "C+"=>5,
    "C"=>4,
    "P"=>3,
    "F"=>0,
);
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
   
if(strcmp($year1,"1/4sem1")==0){
	$s=$arr[$s1]+$arr[$s2]+$arr[$s3]+$arr[$s4]+$arr[$s5]+$arr[$s6]+$arr[$s7];
	$s=round($s/7,2);
	
	if($arr[$s1]==0||$arr[$s2]==0||$arr[$s3]==0||$arr[$s4]==0||$arr[$s5]==0||$arr[$s6]==0||$arr[$s7]==0)
	$s=0;
	
    $query = "
     insert into `1/4sem1`(id,Rollno,Name,BEE,EC,EM,English,Ethics,Clab,EClab,sgpa) values('$id','$rollno','$name','$s1','$s2','$s3','$s4','$s5','$s6','$s7',$s)
    ";
$s1="sem1";
        mysqli_query($connect, $query);
	$query1="update cgpatable set $s1='$s' WHERE Rollno=$rollno";
	mysqli_query($connect, $query1);
	funcgpa($s1,$rollno,"1/4sem1");
}
else if(strcmp($year1,"1/4sem2")==0){
 $s8 = mysqli_real_escape_string($connect, $data[10]);
    $s9 = mysqli_real_escape_string($connect, $data[11]);
	$s=$arr[$s1]+$arr[$s2]+$arr[$s3]+$arr[$s4]+$arr[$s5]+$arr[$s6]+$arr[$s7]+$arr[$s8]+$arr[$s9];
	$s=round($s/9,2);
	if($arr[$s1]==0||$arr[$s2]==0||$arr[$s3]==0||$arr[$s4]==0||$arr[$s5]==0||$arr[$s6]==0||$arr[$s7]==0||$arr[$s8]==0||$arr[$s9]==0)
	$s=0;
    $query = "
     insert into `1/4sem2`(id,Rollno,Name,EM2,PHYSICS,ES,ED,EEE,PHYSICSLAB,ENGLISHLAB,CplusLAB,WORKSHOP,SGPA) values('$id','$rollno','$name','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s')
    ";
    mysqli_query($connect, $query);
$s1="sem2";
	$query1="update cgpatable set $s1='$s' WHERE Rollno=$rollno";
	mysqli_query($connect, $query1);
	funcgpa($s1,$rollno,"1/4sem2");
}
else if(strcmp($year1,"2/4sem1")==0){
 $s8 = mysqli_real_escape_string($connect, $data[10]);
    
	$s=$arr[$s1]+$arr[$s2]+$arr[$s3]+$arr[$s4]+$arr[$s5]+$arr[$s6]+$arr[$s7]+$arr[$s8];
	$s=round($s/8,2);
	if($arr[$s1]==0||$arr[$s2]==0||$arr[$s3]==0||$arr[$s4]==0||$arr[$s5]==0||$arr[$s6]==0||$arr[$s7]==0||$arr[$s8]==0)
	$s=0;
    $query = "
     insert into `2/4sem1`(id,Rollno,Name,DS,DLD,DMS,CO,DC,DSLAB,DELAB,PYTHONLAB,SGPA) values('$id','$rollno','$name','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s')
    ";
    mysqli_query($connect, $query);
$s1="sem3";
	$query1="update cgpatable set $s1='$s' WHERE Rollno=$rollno";
	mysqli_query($connect, $query1);
	funcgpa($s1,$rollno,"2/4sem1");
}
else if(strcmp($year1,"2/4sem2")==0){
 $s8 = mysqli_real_escape_string($connect, $data[10]);
	$s=$arr[$s1]+$arr[$s2]+$arr[$s3]+$arr[$s4]+$arr[$s5]+$arr[$s6]+$arr[$s7]+$arr[$s8];
	$s=round($s/8,2);
	if($arr[$s1]==0||$arr[$s2]==0||$arr[$s3]==0||$arr[$s4]==0||$arr[$s5]==0||$arr[$s6]==0||$arr[$s7]==0||$arr[$s8]==0)
	$s=0;
    $query = "
     insert into `2/4sem2`(id,Rollno,Name,CN,ISD,OS,PSQT,CGM,CNLAB,CGMLAB,OSLAB,SGPA) values('$id','$rollno','$name','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s')
    ";
    mysqli_query($connect, $query);
$s1="sem4";
	$query1="update cgpatable set $s1='$s' WHERE Rollno=$rollno";
	mysqli_query($connect, $query1);
	funcgpa($s1,$rollno,"2/4sem2");
}
else if(strcmp($year1,"3/4sem1")==0){
 $s8 = mysqli_real_escape_string($connect, $data[10]);
    $s9 = mysqli_real_escape_string($connect, $data[11]);
	$s=$arr[$s1]+$arr[$s2]+$arr[$s3]+$arr[$s4]+$arr[$s5]+$arr[$s6]+$arr[$s7]+$arr[$s8]+$arr[$s9];
	$s=round($s/9,2);
	if($arr[$s1]==0||$arr[$s2]==0||$arr[$s3]==0||$arr[$s4]==0||$arr[$s5]==0||$arr[$s6]==0||$arr[$s7]==0||$arr[$s8]==0||$arr[$s9]==0)
	$s=0;
    $query = "
     insert into `3/4sem1`(id,Rollno,Name,FLAT,JAVA,UNP,DBMS,PE1,UNPLAB,DBMSLAB,JAVALAB,QAVA,SGPA) values('$id','$rollno','$name','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s')
    ";
    mysqli_query($connect, $query);
$s1="sem5";
	$query1="update cgpatable set $s1='$s' WHERE Rollno=$rollno";
	mysqli_query($connect, $query1);
	funcgpa($s1,$rollno,"3/4sem1");
}
else if(strcmp($year1,"3/4sem2")==0){
 $s8 = mysqli_real_escape_string($connect, $data[10]);
    $s9 = mysqli_real_escape_string($connect, $data[11]);
	$s=$arr[$s1]+$arr[$s2]+$arr[$s3]+$arr[$s4]+$arr[$s5]+$arr[$s6]+$arr[$s7]+$arr[$s8]+$arr[s9];
	$s=round($s/9,2);
	if($arr[$s1]==0||$arr[$s2]==0||$arr[$s3]==0||$arr[$s4]==0||$arr[$s5]==0||$arr[$s6]==0||$arr[$s7]==0||$arr[$s8]==0||$arr[$s9]==0)
	$s=0;
    $query = "
     insert into `3/4sem2`(id,Rollno,Name,CD,OOAD,DAA,PE2,MC,CASETOOLSLAB,MCLAB,WTLAB,QAVA2,SGPA) values('$id','$rollno','$name','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s')
    ";
    mysqli_query($connect, $query);
$s1="sem6";
	$query1="update cgpatable set $s1='$s' WHERE Rollno=$rollno";
	mysqli_query($connect, $query1);
	funcgpa($s1,$rollno,"3/4sem2");
}
   }
   fclose($handle);
   header("location:update4.php?updation=1");
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
function funcgpa($p,$no,$p2)
{
	$i=0;
	$sum=0;
	$connect = mysqli_connect("localhost", "root", "", "miniproject");
	$query="select * from `cgpatable` where Rollno='$no'";
	$result = mysqli_query($connect, $query);
	if($result->num_rows==0)
	{
		return;
	}
	while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    		foreach ($row as $value) {
			if($value>0&&$value<=10)
			{
				$i++;
				$sum+=$value;	
			}
			else if($value==0)
			{
				$sum=0;
				break;	
			}
    		}
	}
if($i!=0)
	$sum=round($sum/$i,2);
	$query1="update `$p2` set cgpa=$sum WHERE Rollno=$no";
	mysqli_query($connect, $query1);
	$query1="update cgpatable set cgpa=$sum Where Rollno=$no";
	$result = mysqli_query($connect, $query1);
	
}
if(isset($_GET["updation"]))
{
 $message = '<label class="text-success">Product Updation Done</label>';
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
   <h2 align="center">Student results</a></h2>
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
 </body>

  </div>
</html>
