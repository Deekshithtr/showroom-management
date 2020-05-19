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
$vid=$_POST['vid'];
$cid=$_POST['cid'];
$sid=$_POST['sid'];
$odate=$_POST['odate'];
$sql = "INSERT INTO `sales`(`vehid`, `custid`, `showroomid`, `taxid`, `orddate`, `deliverydate`) VALUES('$vid','$cid','$sid','$tid','$odate','$ddate')";

if ($conn->query($sql) === TRUE) {
 echo '<script type="text/javascript">alert("succesfully added")</script>';
    include 'booking.php';
}
else {
    echo '<script type="text/javascript">alert("error in inserting")</script>';
}

$conn->close();
?>