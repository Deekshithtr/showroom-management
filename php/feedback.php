<html>
<head>
<title>information</title>    
 <link rel="stylesheet" href="customerform.css"> 
    <link rel="stylesheet" href="imp.css">
</head>
    <body>
        <div class="sidenav">
  <a href="customerform.php" >add new dealer</a>
    <a href="dealerdetail.php">dealer details</a>
                <a href="trigger.php">showroom  details</a>
    <a href="delete.php">delete</a>
              <a href="numuser.php">number of users</a>
    <a class="active" href="feedback.php">feedback</a>
            
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
$result = mysqli_query($conn,"SELECT * FROM contact");

echo "<table border='1'>
<tr>
<th>first name</th>
<th>last name</th>
<th>email</th>
<th>phone number</th>
<th>message</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phonenum'] . "</td>";
    echo "<td>" . $row['message'] . "</td>";
echo "</tr>";
}
echo "</table>";

$conn->close();
?>
    </body>
</html>