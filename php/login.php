<!doctype html>
<html>
    <head>
        <title>login page</title>
        <link rel="stylesheet" href="login1.css" >
        <link rel="stylesheet" href="imp.css">
    </head>
    <body>
        <div class="sidenav">
  <a  href="mini.php">Home</a>
  
    <div class="dropdown">
  <button class="dropbtn" id="active">Sign-in</button>
  <div class="dropdown-content" >
    <a href="admin.php">admin</a>
    <a href="employee.php">dealer</a>
      <a href="signup.php">sign up</a>
      <a href="login.php">log in</a>
  </div>
</div>
        <a href="contact.php">Contact us</a>
        <a href="aboutus.php">About us</a>
</div>
        <div class="login">
            <h3 data-text="login">login</h3>
            <form action="logincon.php" method="post">
                 <div class="input1">
                <label for="em">Email</label>
                <input type="email"  name="em" id="em" required=""><br/>
                </div>
                <div class="input1">
                <label for="pass" >Password</label>
                <input type="password" name="pass" id="pass" value="password" required=""><br/></div>
                <button type="submit" value="submit">submit</button><br/>
            </form>
        </div>
    </body>
</html>