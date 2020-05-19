<html>
<head>
<title>information</title>    
    <link rel="stylesheet" href="imp.css">
    <link rel="stylesheet" href="userhome.css">
</head>
    <body>
        <div class="sidenav"> 
    <a href="userhome.php">profile</a>
            <div id="active" class="order1">
            <form action="order.php" method="post">
              <button id=active class="order" name="myorders" href="order.php">my orders</button>
            </form>
            </div>
            <a href="logout.php">logout</a>
        </div>
    </body>
</html>
<?php
session_start();
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

$sql=" select distinct s.salesid,c.custid,v.vehname,sh.showroomname,v.vehtype,v.vehcost,t.tax from vehicle v,sales s,tax  t,customer c,showroom sh where  s.vehid=v.vehid and s.custid=c.custid and s.showroomid=sh.showroomid and c.emailid='".$_SESSION['username']."'and s.taxid=t.taxid";

 $result=mysqli_query($conn,$sql);
echo "<table border='1'>
<tr>
<th>SALES ID</th>
<th>CUSTOMER ID</th>
<th>VEHICLE NAME</th>
<th>SHOWROOM MODEL</th>
<th>VEHICLE TYPE</th>
<th>TAX</th>
</tr>";

while ($row=mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row["salesid"]."</td>";
    echo "<td>".$row["custid" ]."</td>";
    echo "<td>".$row["vehname" ]."</td>";
    echo "<td>".$row["showroomname" ]."</td>";
    echo "<td>".$row["vehtype" ]."</td>";
    echo "<td>".$row["tax" ]."</td>";
    echo "</tr>";
}
/*if(mysqli_num_rows($result)>=1)
    {
        echo ''.$result;
    }
    /*if(isset($_POST['submit'])&& !empty($_POST['SUBMIT'])){
        include 'userhome.php';
    }
    else
    {
        echo '<script type="text/javascript">alert("error!!")</script>';
    }*/

?>
