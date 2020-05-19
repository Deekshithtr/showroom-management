<html>
<head>
<title>information</title>    
 <link rel="stylesheet" href="customerform.css"> 
    <link rel="stylesheet" href="imp.css">
</head>
    <body>
         <div class="sidenav">
    <a class="active" href="vehicle.php">add vehicles</a>
    <a href="showroom.php">add showroom</a>
     <a href="sales.php">sales</a>
            <a href="tax.php">tax</a>
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
$result = mysqli_query($conn,"SELECT * FROM vehicle");

echo "<table border='1'>
<tr>
<th>VEHICLE ID</th>
<th>DEALER ID</th>
<th>VEHICLE NAME</th>
<th>VEHICLE MODEL</th>
<th>VEHICLE TYPE</th>
<th>VEHICLE DESCRIPTION</th>
<th>VEHICLE COST</th>
<th>CREATE DATE</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['vehid'] . "</td>";
echo "<td>" . $row['dealerid'] . "</td>";
    echo "<td>" . $row['vehname'] . "</td>";
    echo "<td>" . $row['vehmodel'] . "</td>";
    echo "<td>" . $row['vehtype'] . "</td>";
    echo "<td>" . $row['vehdescription'] . "</td>";
    echo "<td>" . $row['vehcost'] . "</td>";
    echo "<td>" . $row['createdate'] . "</td>";
echo "</tr>";
}
echo "</table>";

$conn->close();
?>