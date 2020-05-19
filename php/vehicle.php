<html>
<title>sign-up</title>
    <link rel="stylesheet" href="imp.css">
    <link rel="stylesheet" href="vehicle.css">
<body>
   <div class="sidenav">
    <a class="active" href="#">add vehicles</a>
    <a href="showroom.php">add showroom</a>
     <a href="sales.php">sales</a>
            <a href="tax.php">tax</a>
       <a href="logout.php">log out</a>
        </div>    
    <div class="sgnup1">
    <form action="vehiclecon.php" method="post">
        <div class="cust">
            <h3>add vehicle info</h3>
            <label>dealer id:</label>
        <input type="text" name="dealerid" class="dealid"><br/>
        <label>vehicle name:</label>
        <input type="text" name="vname" class="vname"><br/>
        <label>vehicle model:</label>
        <input type="text" name="vmodel" class="vmodel"><br/>
             <label>vehicle type:</label>
        <input type="text" name="vtype" class="vtype">
       <br/>
        <label>vehicle description:</label>
            <input type="text" name="vdesc" class="vdesc">
        <br/>
        <label>vehicle cost:</label>
            <input type="text" name="vcost" class="vcost">
        <br/>
            <label>create date:</label>
            <input type="date" name="cdate" class="cdate">
        <br/>
        <button type="submit" name="submit">submit</button>
         </div> 
        </form>
        <form action="vehicleview.php">
        <div class="view1">
        <button type="submit" name="view">details</button>
        </div>
                
        </form>
    </div>
</body>
</html>