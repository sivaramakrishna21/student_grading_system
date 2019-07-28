<?php
	session_start();
	if(isset($_SESSION['roll']))
	{
	$year1=$_SESSION['year1'];
	$roll=$_SESSION['roll'];
	$con=new mysqli("localhost","root","","miniproject");
$sql="SELECT * from `$year1` where Rollno='$roll'";
$result = mysqli_query($con, $sql); 
echo "<br>";
echo "<center>";
echo "<table border='1'>";

if($result->num_rows==0)
{
	echo "failed";
}
echo "<center>";
echo "<h1> RESULTS</h1>";
echo "</center>";
while ($row = mysqli_fetch_assoc($result)) {
    
    foreach ($row as $field => $value) {   

	echo "<tr>";
	echo "<td>" . $field.  "</td>";
	echo "<td>" . $value . "</td>";
	echo "</tr>";

    }
    echo "</center>";
}
echo "</table>";
}
?>