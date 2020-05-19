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
$dealerid=$_POST['dealerid'];
$sname=$_POST['sname'];
$lnum=$_POST['lno'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$sql = "INSERT INTO `showroom`(`dealerid`, `showroomname`, `lno`, `address`, `city`, `state`, `pincode`) VALUES('$dealerid','$sname','$lnum','$address','$city','$state','$pincode')";

if ($conn->query($sql) === TRUE) {
 echo '<script type="text/javascript">alert("succesfully added")</script>';
    //include 'showroom.php';
}
else {
    echo '<script type="text/javascript">alert("error in inserting")</script>';
    //include 'showroom.php';
}

$conn->close();
?>