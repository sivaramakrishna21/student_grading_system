<html>
<head>
<title>Update Mysql Database through Upload CSV File using PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php
	$connect = mysqli_connect("localhost", "root", "", "miniproject");
	$query="select * from `cgpatable` where cgpa>8 and cgpa<9";
	$result = mysqli_query($connect, $query);
	  ?>
   <h3 align="center">Range of marks</h3>
   <br />
	<center>
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <tr>
      <th>Rollno</th>
      <th>s1</th>
      
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))
     {
	    echo '
	    <tr>
	    <td>'.$row["Rollno"].'</td>
	    <td>'.$row["cgpa"].'</td>
	    
	    </tr>
	    ';
    }
    ?>
    </table>
   </div>
  </div>
</body>