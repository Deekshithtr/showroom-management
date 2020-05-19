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
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$cnum=$_POST['cnum'];
$email=$_POST['email'];
$password=$_POST['pass'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$pincode=$_POST['pincode'];
$gender=$_POST['gender'];
$sql = "INSERT INTO `customer`(`fname`, `lname`, `contactno`, `emailid`, `password`, `address`, `city`, `state`, `country`, `pincode`, `gender`) VALUES('$fname','$lname','$cnum','$email','$password','$address','$city','$state','$country','$pincode','$gender')";

if ($conn->query($sql) === TRUE) {
 echo '<script type="text/javascript">alert("succesfully signed up")</script>';
    include 'login.php';
}
else {
    echo '<script type="text/javascript">alert("invalid username/password")</script>';
    include 'signup.php';
}

$conn->close();
?>