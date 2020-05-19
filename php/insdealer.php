<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "showroom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
} 
$adminid=$_POST['adminid'];
$cmpname=$_POST['cmp_name'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$pass=$_POST['password'];
$cno=$_POST['cnum'];
$address=$_POST['address'];
$sql = "INSERT INTO `dealer`(`adminid`, `companyname`, `fname`, `lname`, `username`, `password`, `contactno`, `address`) VALUES('$adminid','$cmpname','$fname','$lname','$uname','$pass','$cno','$address')";

if ($conn->query($sql) === TRUE) {
   echo '<script type="text/javascript">alert("succesfully inserted")</script>';
    include 'customerform.php';
} else {
   echo '<script type="text/javascript">alert("error!!!!!!!")</script>';
    include 'customerform.php';
}

$conn->close();
?>