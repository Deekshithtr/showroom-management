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
    <a class="active"  href="trigger.php">showroom  details</a>
    <a href="delete.php">delete</a>
              <a href="numuser.php">number of users</a>
    <a href="feedback.php">feedback</a>
    <a href="logout.php">logout</a>
  </div>
    </body>
</html>
 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "showroom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$result = mysqli_query($conn,"SELECT * FROM showroominfo");

echo "<table border='1'>
<tr>
<th>REGISTERED DATE</th>
<th>DEALER ID</th>
<th>SHOWROOM NAME</th>
<th>CITY</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['dealerid'] . "</td>";
    echo "<td>" . $row['showroomname'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
echo "</tr>";
}
echo "</table>";
$conn->close();
?>
