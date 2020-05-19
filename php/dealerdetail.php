<html>
<head>
<title>information</title>    
 <link rel="stylesheet" href="customerform.css"> 
    <link rel="stylesheet" href="imp.css">
</head>
    <body>
        <div class="sidenav">
  <a href="customerform.php">add new dealer</a>
    <a class="active" href="dealerdetail.php">dealer details</a>
                <a href="trigger.php">showroom  details</a>
    <a href="delete.php">delete</a>
              <a href="numuser.php">number of users</a>
    <a href="feedback.php">feedback</a>
    <a href="logout.php">logout</a>
  </div>

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
$result = mysqli_query($conn,"SELECT * FROM dealer");

echo "<table border='1'>
<tr>
<th>DEALER ID</th>
<th>COMPANY NAME</th>
<th>FIRSTNAME</th>
<th>LASTNAME</th>
<th>CONTACT NO</th>
<th>ADDRESS</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['dealerid'] . "</td>";
echo "<td>" . $row['companyname'] . "</td>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['contactno'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
echo "</tr>";
}
echo "</table>";

$conn->close();
?>
    </body>
</html>