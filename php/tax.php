<html>
<title>tax</title>
    <link rel="stylesheet" href="imp.css">
    <link rel="stylesheet" href="vehicle.css">
<body>
   <div class="sidenav">
    <a  href="vehicle.php">add vehicles</a>
    <a href="showroom.php">add showroom</a>
     <a href="sales.php">sales</a>
            <a class="active" href="tax.php">tax</a>
              <a href="logout.php">log out</a>

        </div>    
    <div class="sgnup1">
    <form action="taxcon.php" method="post">
        <div class="cust">
            <h3>tax</h3>       
        <label>tax description:</label>
        <input type="text" name="tdesc" class="tdesc"><br/>
        <label>tax:</label>
        <input type="text" name="tax" class="tax"><br/>
        <button type="submit" name="submit">submit</button>
        </div>  
        </form>
    <form action="taxview.php">
        <div class="view1">
        <button type="submit" name="view">details</button>
        </div>
        </form>
    </div>
</body>
</html>