<html>
<title>sales detais</title>
    <link rel="stylesheet" href="imp.css">
    <link rel="stylesheet" href="vehicle.css">
<body>
   <div class="sidenav">
    <a  href="vehicle.php">add vehicles</a>
    <a href="showroom.php">add showroom</a>
     <a  class="active" href="sales.php">sales</a>
            <a href="tax.php">tax</a>
              <a href="logout.php">log out</a>

        </div>    
    <div class="sgnup1">
    <form action="salescon.php" method="post">
        <div class="cust">
            <h3>add sales info</h3>
            <label>vehicle id:</label>
        <input type="text" name="vid" class="vid"><br/>
        <label>customer id:</label>
        <input type="text" name="cid" class="cid"><br/>
        <label>showroom id:</label>
        <input type="text" name="sid" class="sid"><br/>
             <label>taxid:</label>
        <input type="text" name="tid" class="tid">
       <br/>
        <label>order date:</label>
            <input type="date" name="odate" class="odate">
        <br/>
        <label>deleivery date:</label>
            <input type="date" name="ddate" class="ddate">
        <br/>
        <button type="submit" name="submit">submit</button>
        </div>  
        </form>
    <form action="salesview.php">
        <div class="view1">
        <button type="submit" name="view">details</button>
        </div>
        </form>
    </div>
</body>
</html>