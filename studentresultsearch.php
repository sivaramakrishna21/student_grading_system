<?php
	session_start();
	if(isset($_POST['Submit'])){
		$_SESSION['roll']=$_POST['rollno'];
		foreach($_POST['year'] as $_SESSION['year1']);
		foreach($_POST['year'] as $year1);
		$rollno=$_POST['rollno'];
		$con=new mysqli("localhost","root","","miniproject");
		$sql="SELECT * from `1/4sem1` where Rollno='$rollno'";
		$result=mysqli_query($con,$sql);
		if($result->num_rows>0)
		{
			header('Location:http://localhost/test/result.php');
			exit();
		}
		else
		{
			$message = "enter valid rollno";
			echo "<script type='text/javascript'>alert('$message');</script>";
			return false;
		}

		mysqli_close($con);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
 .dropbtn {
  background-color:DodgerBlue;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #f1f1f1}
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown:hover .dropbtn {
  background-color: DodgerBlue;
}

.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}
.container img {
  width: 50%;
  height: auto;
}
.icon-input-btn{
        display: inline-block;
        position: relative;
    }
    .icon-input-btn input[type="submit"]{
        padding-left: 2em;
    }
    .icon-input-btn .glyphicon{
        display: inline-block;
        position: absolute;
        left: 0.65em;
        top: 30%;
    }


div.siva{
  font-family:Lucida Handwriting;
  margin: 0;
}
  </style>
</head>
<body>

<div class=siva>
<h1>&nbsp;&nbsp&nbsp;<img src="anits2.jpeg" class="rounded" width="100" height="100"> &nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;<font color="#00A1F1" class=abhi> Student Grading System</font>
&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;
<img src="hilios.png"  width="100" height="100">   
</h1>
  </div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="abhi.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li class=""><a class="dropdown-toggle" data-toggle="dropdown" href="#">About<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="aboutuspage.html">Vision & Mission</a></li>
          <li><a href="aboutuspage2.html">Anits at a glance</a>
          </ul>
      </li>
      <li class=""><a href="contactuspage.html">Contact us</a></li>
    <li class=""><a href="http://localhost/test/studentresultsearch.php">Results</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
     <li><a href="http://localhost/test/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav><br><br>

<div class="container">
 <center>
 <br><br>
  <form class="form-inline" role="form" method="post">
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
</select><br><br>
    <label for="Registered No" class="mb-2 mr-sm-2">Registered No:</label>
    <input type="text" name="rollno" class="form-control mb-2 mr-sm-2" id="Registered No" ><br>
    <br>
	<div class="container">
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="icon-input-btn"><span class="glyphicon glyphicon-search"></span>
 <input type="submit" name="Submit" class="btn btn-info" value="Search"></form>
</div><br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<a href="top3.php" class="btn btn-info">TOP 3 students</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<div class="dropdown">
  <button class="dropbtn">Range of marks</button>
  <div class="dropdown-content">
    <a href="http://localhost/test/greaterthen90.php">Above 90</a>
    <a href="http://localhost/test/greaterthen8.php">81-90</a>
    <a href="http://localhost/test/greaterthen7.php">71-80</a>
    <a href="http://localhost/test/greaterthen6.php">61-70</a>
    <a href="http://localhost/test/greaterthen5.php">51-60</a>
    <a href="http://localhost/test/greaterthen4.php">41-50</a>
    <a href="http://localhost/test/lessthen4.php">Below 40</a>
    
  </div>

</div>
