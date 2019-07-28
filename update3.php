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
    "1/4sem1"=>"sem1",
    "1/4sem2"=>"sem2",
    "2/4sem1"=>"sem3",
    "2/4sem1"=>"sem4",
    "3/4sem1"=>"sem5",
    "3/4sem2"=>"sem6",
);
	$sub=array("1/4sem1","BEE","EC","EM1","ENGLISH","ETHICS","CLAB","ECLAB","NA","1/4sem2","EM2","PHYSICS","ED","EEE","PHYSICSLAB","ENGLISHLAB","CPLUSLAB","WORKSHOP","NA","2/4sem1","DS","DLD","DMS","CO","DC","DSLAB","DELAB","PYTHONLAB","NA","2/4sem2",
"CN","ISD","OS","PSQT","CGM","CNLAB","CGMLAB","OSLAB","NA","3/4sem1","FLAT","JAVA","UNP","DBMS","PE1","UNPLAB","DBMSLAB","JAVALAB","QAVA","NA","3/4sem2","CD",
"OOAD","DAA","PE2","MC","CASETOOLSLAB","MCLAB","WTLAB","QAVA2","NA"
);
	foreach($_POST['year'] as $year1);
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
				$csvsub=array($s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9);
				$k=0;
				$i=0;
				while($k!=6)
				{
				    if(strcmp($year1,$sub[$i])==0)
					{
						$p=0;
						$l=$i;
						while(1){
							
							$i++;
							if(strcmp($sub[$i],"NA")==0)
								break;
							
							if(strcmp($csvsub[$p],"NA")!=0){
								$query = "
								UPDATE `$sub[$l]`
								    SET $sub[$i]='$csvsub[$p]'
								    WHERE Rollno=$rollno
								    ";
								    mysqli_query($connect, $query);
								
							}
							$p++;
						}
							
						break;
					}
					if(strcmp($sub[$i],"NA")==0)
						$k++;
					$i++;
				}
				$query="select * from `1/4sem1` where Rollno='$rollno'";
						$result = mysqli_query($connect, $query);
						$sum=0;
						$count=0;
						while ($value = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    							foreach ($value as $row) {
								if(strcmp($row,"O")==0||strcmp($row,"A+")==0||strcmp($row,"A")==0||strcmp($row,"B+")==0||strcmp($row,"B")==0||strcmp($row,"C+")==0||strcmp($row,"C")==0||strcmp($row,"F")==0||strcmp($row,"P")==0)
								{
									$count++;
									$sum+=$arr[$row];
									if($arr[$row]==0)
									{
										$sum=0;
										break;
									}
									
								}
    							}
							$query="update `$year1` set sgpa=round($sum/$count,2) where Rollno='$rollno'";
							$result = mysqli_query($connect, $query);
							$query="update `cgpatable` set $arr[$year1]=round($sum/$count,2) where Rollno='$rollno'";
							$result = mysqli_query($connect, $query);
							$si=0;
							$sum=0;
							$query="select * from `cgpatable` where Rollno='$rollno'";
							$result = mysqli_query($connect, $query);
							
						while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
								$con=0;
						    		foreach ($row as $value) {
									$con++;
									if($value>1&&$value<10)
									{
										$si++;
										$sum+=$value;	
									}
									else if($value==0&&$con!=8)
									{
										$sum=0;
										break;	
									}
						    		}
							}
							$sum/=$si;
							$query1="update `$year1` set cgpa=$sum WHERE Rollno=$rollno";
							mysqli_query($connect, $query1);
							$query2="update cgpatable set cgpa=$sum WHERE Rollno=$rollno";
							mysqli_query($connect, $query2);
								}	
										
							}
							fclose($handle);
			header("location: update3.php?updation=1");
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
$query = "SELECT * FROM `cgpatable`";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Student Results</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Student marks system</a></h2>
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
   </div>
  </div>
 </body>
</html>
