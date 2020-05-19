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
if(isset($_POST['uname']))
{
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $sql="select * from admin where username='".$uname."' AND password='".$pass."' limit 1 ";
    
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1)
    {
        /*link()
        echo " you have successfully logged in";*/
        include 'customerform.php';
        //exit();
    }
    else
    {
        echo '<script type="text/javascript">alert("invalid username/password")</script>';
        include 'admin.php';
    }
}
?>