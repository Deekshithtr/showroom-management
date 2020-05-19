
<html>
<head>
<title>information</title>    
    <link rel="stylesheet" href="imp.css">
    <link rel="stylesheet" href="userhome.css">
</head>
    <body>
        <div class="sidenav"> 
    <a class="active" href="#">profile</a>
            <div class="order1">
            <form action="order.php" method="post">
              <button class="order" name="myorders" href="order.php">my orders</button>
            </form>
            </div>
            <a href="logout.php">logout</a>
        </div>
    </body>
</html>
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

if(isset($_SESSION['username'])&& !empty($_SESSION['username'])){
    $sql="SELECT `fname`, `lname` FROM `customer` WHERE emailid='".$_SESSION['username']."'";
     $result=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_assoc($result)) {
        /*echo 'welcome ';
    echo $row["fname"];
    echo ' ';
    echo "<p style='color:red;'>".$row["lname" ]."</p>";
     echo ':)';*/
        echo "<p style='text-align:center;text-transform: capitalize;font-size: 25px;font-family: cursive;'> ";
        echo 'welcome '.$row["fname"]." ".$row["lname"]."</p>";
}
//
}
//session_destroy();
?>