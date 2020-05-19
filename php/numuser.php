<html>
<head>
<title>information</title>    
 <link rel="stylesheet" href="customerform.css"> 
    <link rel="stylesheet" href="imp.css">
</head>
    <body>
        <div class="sidenav">
  <a href="customerform.php">add new dealer</a>
    <a href="dealerdetail.php">dealer details</a>
    <a href="trigger.php">showroom  details</a>
    <a href="delete.php">delete</a>
     <a class="active" href="numuser.php">number of users</a>
    <a href="feedback.php">feedback</a>
    <a href="logout.php">logout</a>
  </div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="showroom";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql=  'call num_users()';
$result = mysqli_query($conn,$sql) or die("Query fail: " . mysqli_error());
  //loop the result set
  while ($row = mysqli_fetch_array($result)){   
     echo "<p style='text-align:center;text-transform: capitalize;font-size: 25px;font-family: cursive;'> ";
      echo 'number of users '.$row[0]."</p>"; 
  }



?>