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
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$sql = "INSERT INTO `contact`(`firstname`, `lastname`, `email`, `phonenum`, `message`) VALUES ('$firstname','$lastname','$email','$phone','$message')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("message sucessfully sent")</script>';
    include 'contact.php';
} else {
    echo '<script type="text/javascript">alert("something went wrong please try again")</script>';
}

$conn->close();
?>