<html>
<title>sign-up</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="imp.css">
<body>
            <div class="sidenav">
  <a href="mini.php">Home</a>
  
    <div class="dropdown">
  <button class="dropbtn" id="active">Sign-in</button>
  <div class="dropdown-content">
    <a href="admin.php">admin</a>
    <a href="employee.php">dealer</a>
      <a href="signup.php">sign up</a>
            <a href="login.php">log in</a>
  </div>
</div>
        <a href="contact.php">Contact us</a>
        <a href="aboutus.php">About us</a>
</div>
    <div class="signup">
    <form action="signupcon.php" method="post">
        <div class="cust">
            <h3>sign up</h3>
            <label>first name:</label>
        <input type="text" name="fname" class="input100"><br/>
        <label>last name:</label>
        <input type="text" name="lname" class="input100"><br/>
        <label>contact number:</label>
        <input type="text" name="cnum" class="input100"><br/>
             <label>email id:</label>
        <input type="email" name="email" class="input100">
       <br/>
        <label>password:</label>
            <input type="password" name="pass" class="input100">
        <br/>
        <label>address:</label>
            <input type="text" name="address" class="input100">
        <br/>
            <label>city:</label>
            <input type="text" name="city" class="input100">
        <br/>
            <label>state:</label>
            <input type="text" name="state" class="input100">
        <br/>
            <label>country:</label>
            <input type="text" name="country" class="input100">
        <br/>
            <label>pincode:</label>
            <input type="text" name="pincode" class="input100">
        <br/>
            <label>gender:</label>
            <input type="text" name="gender" class="input100">
        <br/>
        <button class="btn" type="submit" name="submit">submit</button>
        </div>  
        </form>
    
    </div>
</body>
</html>