<html>
<head>
<title>information</title>    
 <link rel="stylesheet" href="customerform.css"> 
    <link rel="stylesheet" href="imp.css">
</head>
    <body>
         <div class="sidenav">
    <a href="vehicle.php">add vehicles</a>
    <a href="showroom.php">add showroom</a>
     <a class="active" href="sales.php">sales</a>
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
$result = mysqli_query($conn,"SELECT * FROM sales");

echo "<table border='1'>
<tr>
<th>SALES ID</th>
<th>VEHICLE ID</th>
<th>CUSTOMER ID</th>
<th>SHOWROOM ID</th>
<th>TAX ID</th>
<th>ORDER DATE</th>
<th>DELIVERY DATE</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['salesid'] . "</td>";
echo "<td>" . $row['vehid'] . "</td>";
    echo "<td>" . $row['custid'] . "</td>";
    echo "<td>" . $row['showroomid'] . "</td>";
    echo "<td>" . $row['taxid'] . "</td>";
    echo "<td>" . $row['orddate'] . "</td>";
    echo "<td>" . $row['deliverydate'] . "</td>";
echo "</tr>";
}
echo "</table>";

$conn->close();
?>