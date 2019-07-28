<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: LightBlue;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Received Applications')">Received Applications</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
</div>

<div id="Received Applications" class="tabcontent">
  <h3>Received Applications</h3>
  <p>The following are the pending applications</p>
  <?php

$conn=new mysqli("localhost","root","","sivaram");
$sql="SELECT * from  where status<>1";
echo "<br>";
$sub="submit";
$cars = array(); 
$i=0;
$log="accept";
$log1="decline";
$fun1="fun";
if($result = mysqli_query($conn, $sql)){
    if($result->num_rows > 0)
{
while($row = mysqli_fetch_array($result)){
               	echo "<table border=1 align=center>";
               	echo "<caption>received details</caption>";
            	echo "<tr>";
		echo "<th>applid</th>";
                echo "<th>name</th>";
                echo "<th>seldate</th>";
		echo "<th>selslot</th>";
                echo "</tr>";
		$s=$row['registerid'];
        	array_push($cars,$s);
            		echo "<tr>";
			echo "<td>" . $s . "</td>";
                	echo "<td>" . $row['Name'] . "</td>";
                	echo "<td>" . $row['seldate'] . "</td>";
			echo "<td>" . $row['selslot'] . "</td>";
                  	echo "</tr>";
 echo "</table>";
		echo "<center>";
$i+=1;

echo "<form name='myform' method='post';>";
echo "<input type='submit' name=$s value=$log>";

echo "</center>";
        // Free result set
}
        mysqli_free_result($result);
    } 
}
array_push($cars,"NA");
for($i=0;strcmp($cars[$i],"NA")!=0;$i++)
{
if( isset( $_REQUEST[$cars[$i]] )){
	$message = "enter correct mail and password";
	echo "<script type='text/javascript'>alert('$cars[0]');</script>";
	$conn1=new mysqli("localhost","root","","sivaram");
	$sql1="update ppslotbooking set status=1 where registerid='$cars[$i]'";
	mysqli_query($conn1, $sql1);
}
}
?>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 