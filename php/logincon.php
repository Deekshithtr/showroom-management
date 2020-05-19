<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="showroom";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();
if(isset($_POST['em']))
{
    $uname=$_POST['em'];
    $pass=$_POST['pass'];
    $sql="SELECT * FROM `customer` WHERE emailid='".$uname."' AND password='".$pass."' limit 1 ";
    
    $result=mysqli_query($conn,$sql);
   $_SESSION['username']=$uname;
    if(mysqli_num_rows($result)==1)
    {
        echo '<script type="text/javascript">alert("successfully logged in")</script>';
        include 'userhome.php';
    }
    /*if(isset($_POST['submit'])&& !empty($_POST['SUBMIT'])){
        include 'userhome.php';
    }*/
    else
    {
        echo '<script type="text/javascript">alert("invalid username/password")</script>';
        include 'login.php';
    }
}

?>