<html>
<title>sales detais</title>
    <link rel="stylesheet" href="imp.css">
    <link rel="stylesheet" href="vehicle.css">
<body>
  <div class="sidenav"> 
    <a  href="userhome.php">profile</a>
            <a class="active"href="booking.php">book now</a>
            <div class="order1">
            <form action="order.php" method="post">
              <button class="order" name="myorders" href="order.php">my orders</button>
            </form>
            </div>
            <a href="logout.php">logout</a>
        </div>   
    <div class="sgnup1">
    <form action="bookingc.php" method="post">
        <div class="cust">
            <h3>book now</h3>
            <label>vehicle id:</label>
        <input type="text" name="vid" class="vid"><br/>
        <label>customer id:</label>
        <input type="text" name="cid" class="cid"><br/>
        <label>showroom id:</label>
        <input type="text" name="sid" class="sid"><br/>
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