<html>
<head>
<title>information</title>    
 <link rel="stylesheet" href="customerform.css"> 
    <link rel="stylesheet" href="imp.css">
</head>
    <body>
        <div class="sidenav">
  <a class="active">add new dealer</a>
    <a href="dealerdetail.php">dealer details</a>
    <a href="trigger.php">showroom  details</a>
    <a href="delete.php">delete</a>
  <a href="numuser.php">number of users</a>
    <a href="feedback.php">feedback</a>
    <a href="logout.php">logout</a>
  </div>

    <form action="insdealer.php" method="post">
        
        <div class="cust">
            <h3>new dealer</h3>
        <label>admin id</label>
        <input type="text" name="adminid" class="adminid" required><br/>
        <label>company name</label>
        <input type="text" name="cmp_name" class="cmp_name"><br/>
             <label>first-name</label>
        <input type="text" name="fname" class="fname">
       <br/>
        <label>lname:</label>
            <input type="text" name="lname" class="lname">
        <br/>
        <label>username:</label>
            <input type="text" name="uname" class="uname" required>
        <br/>
            <label>password:</label>
            <input type="password" name="password" class="password" required>
        <br/>
            <label>contact no:</label>
            <input type="text" name="cnum" class="cnum">
        <br/>
            <label>address:</label>
            <input type="text" name="address" class="address">
        <br/>
        <button type="submit" name="submit">submit</button>
        </div>  
        </form>
    
    </body>
</html>