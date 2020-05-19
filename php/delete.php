<html>
<head>
<title>information</title>    
 <link rel="stylesheet" href="customerform.css"> 
    <link rel="stylesheet" href="imp.css">
</head>
    <body>
        <div class="sidenav">
  <a href="customerform.php">add new dealer</a>
    <a href="dealerdetail.php">dealer details</a>
                <a href="trigger.php">showroom  details</a>
    <a class="active"  href="delete.php">delete</a>
              <a href="numuser.php">number of users</a>
    <a href="feedback.php">feedback</a>
    <a href="logout.php">logout</a>
  </div>

    <form action="deletecon.php" method="post">
        
        <label>enter the dealer id:</label>
            <input type="text" name="delete" class="delte">
        <br/>
        <button type="submit" name="dlte">delete</button>
        </form>
    
    </body>
</html>