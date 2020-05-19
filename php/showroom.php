<html>
<title>sign-up</title>
    <link rel="stylesheet" href="imp.css">
    <link rel="stylesheet" href="vehicle.css">
<body>
   <div class="sidenav">
    <a  href="vehicle.php">add vehicles</a>
    <a class="active" href="showroom.php">add showroom</a>
     <a href="sales.php">sales</a>
            <a href="tax.php">tax</a>
              <a href="logout.php">log out</a>

        </div>    
    <div class="sgnup1">
    <form action="showroomcon.php" method="post">
        <div class="cust">
            <h3>add showroom info</h3>
            <label>dealer id:</label>
        <input type="text" name="dealerid" class="dealid"><br/>
        <label>showroom name:</label>
        <input type="text" name="sname" class="sname"><br/>
        <label>license no:</label>
        <input type="text" name="lno" class="lno"><br/>
             <label>address:</label>
        <input type="text" name="address" class="address">
       <br/>
        <label>city:</label>
            <input type="text" name="city" class="city">
        <br/>
        <label>state:</label>
            <input type="text" name="state" class="state">
        <br/>
            <label>pincode:</label>
            <input type="text" name="pincode" class="pincode">
        <br/>
        <button type="submit" name="submit">submit</button>
                    
    
        </div>  
        </form>
         <form action="showroomview.php">
        <div class="view1">
        <button type="submit" name="view">details</button>
        </div>
        </form>
    </div>
</body>
</html>