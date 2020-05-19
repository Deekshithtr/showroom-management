<html>
<head>
<title>information</title>    
 <link rel="stylesheet" href="customerform.css"> 
    <link rel="stylesheet" href="imp.css">
</head>
    <body>
         <div class="sidenav">
    <a href="vehicle.php">add vehicles</a>
    <a class="active" href="showroom.php">add showroom</a>
     <a href="sales.php">sales</a>
            <a  href="tax.php">tax</a>
       <a href="logout.php">log out</a>
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
$result = mysqli_query($conn,"SELECT * FROM showroom");

echo "<table border='1'>
<tr>
<th>SHOWROOM ID</th>
<th>DEALER ID</th>
<th>SHOWROOM NAME</th>
<th>LICENCE NO</th>
<th>ADDRESS</th>
<th>CITY</th>
<th>STATE</th>
<th>PINCODE</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['showroomid'] . "</td>";
echo "<td>" . $row['dealerid'] . "</td>";
    echo "<td>" . $row['showroomname'] . "</td>";
    echo "<td>" . $row['lno'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "<td>" . $row['state'] . "</td>";
    echo "<td>" . $row['pincode'] . "</td>";
echo "</tr>";
}
echo "</table>";

$conn->close();
?>
