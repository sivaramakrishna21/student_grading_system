<?php
	if(isset($_POST['Submit'])){
		$email=$_POST['username'];
		$password=$_POST['password'];
		$con=new mysqli("localhost","root","","sivaram");
		$sql="SELECT * from registrationform where email='$email' and password='$password'";
		$result=mysqli_query($con,$sql);
		if($result->num_rows>0)
		{
			header('Location:update4.php');
			exit();
		}
		else
		{
			$message = "enter correct mail and password";
			echo "<script type='text/javascript'>alert('$message');</script>";
			return false;
		}
		$con->close();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
}
.header {
  padding: 60px;
  text-align: center;
  background:#ee82ee;
  color:white;
  font-size: 30px;
}
body {
  background-color: #fefbd8;
  
}
.icon-input-btn{
        display: inline-block;
        position: relative;
	font-size:44px;
    }
    .icon-input-btn input[type="submit"]{
        padding-left: 2em;
    }
   .button1 {font-size: 30px;}

/* Page Content */
.content {padding:20px;}
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
    <li class=""><a href="studentresultsearch.html">Results</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
     <li><a href="http://localhost/test/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<br><br><center>
<div class="container">
 <a href="http://localhost/test/update4.php" class="btn btn-info button1" role="button">regular</a><br><br><br>
<a href="http://localhost/test/update3.php" class="btn btn-info button1" role="button">supply</a>
</div></center>