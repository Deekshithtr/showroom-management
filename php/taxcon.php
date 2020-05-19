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
$taxdesc=$_POST['tdesc'];
$tax=$_POST['tax'];
$sql = "INSERT INTO `tax`(`description`, `tax`) VALUES ('$taxdesc','$tax')";

if ($conn->query($sql) === TRUE) {
 echo '<script type="text/javascript">alert("succesfully inserted")</script>';
    include 'tax.php';
}
else {
    echo '<script type="text/javascript">alert("something went wrong")</script>';
    include 'tax.php';
}

$conn->close();
?>