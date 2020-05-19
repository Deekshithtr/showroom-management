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
$vname=$_POST['vname'];
$vmodel=$_POST['vmodel'];
$vtype=$_POST['vtype'];
$vdesc=$_POST['vdesc'];
$vcost=$_POST['vcost'];
$cdate=$_POST['cdate'];
$sql = "INSERT INTO `vehicle`(`dealerid`, `vehname`, `vehmodel`, `vehtype`, `vehdescription`, `vehcost`, `createdate`) VALUES ('$dealerid','$vname','$vmodel','$vtype','$vdesc','$vcost','$cdate')";

if ($conn->query($sql) === TRUE) {
 echo '<script type="text/javascript">alert("succesfully added")</script>';
    include 'vehicle.php';
}
else {
    echo '<script type="text/javascript">alert("error in inserting")</script>';
}

$conn->close();
?>