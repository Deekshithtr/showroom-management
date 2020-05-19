<html>
<head>
<title>information</title>    
 <link rel="stylesheet" href="customerform.css"> 
    <link rel="stylesheet" href="imp.css">
</head>
    <body>
         <div class="sidenav">
    <a href="vehicle.php">add vehicles</a>
    <a  href="showroom.php">add showroom</a>
     <a href="sales.php">sales</a>
            <a class="active"  href="tax.php">tax</a>
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
$result = mysqli_query($conn,"SELECT * FROM tax");

echo "<table border='1'>
<tr>
<th>TAX ID</th>
<th>DESCRIPTION</th>
<th>TAX</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['taxid'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['tax'] . "</td>";
echo "</tr>";
}
echo "</table>";

$conn->close();
?>
