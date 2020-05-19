<html>
<head>
    <title>Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="imp.css">
</head>
<body>
           <div class="sidenav">
  <a href="mini.php">Home</a>
  
    <div class="dropdown">
  <button class="dropbtn">Sign-in</button>
  <div class="dropdown-content">
    <a href="admin.php">admin</a>
    <a href="employee.php">dealer</a>
      <a href="signup.php">sign up</a>
      <a href="login.php">log in</a>
  </div>
</div>
        <a href="contact.php" class="active">Contact us</a>
        <a href="aboutus.php">About us</a>
</div>
    <div class="form">
        <h3 data-text=contact_us>contact us</h3> <br>
        <form action="cont.php" method="post">
    <label>first name</label><br>
    <input id="first-name" class="input100" type="text" name="firstname" placeholder="First name" required=""><br>
    <label>last name</label><br>
    <input class="lastname" type="text" name="lastname" placeholder="Last name" required=""><br>
    <label>email</label><br>
    <input id="email" class="input100" type="text" name="email" placeholder="Eg.example@email.com" required=""><br>
    <label>phone number</label><br>
    <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +91 9291919191" required=""><br>
    <textarea id="message" class="input100" name="message" placeholder="Write us a message" required=""></textarea><br>
        <button class="btn" type="submit" value="submit">Send Message</button>
        </form></div>
    
</body>    
</html>