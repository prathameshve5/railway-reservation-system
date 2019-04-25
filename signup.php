
<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	
	<script type="text/javascript" src="jquery.min.js"></script>
	

</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="register-form" action="signup.php" method="post">
      <input type="text" name="name" placeholder="name" required="" />
      <input type="password" name="password" placeholder="password" required="" />
      <input type="text" name="email" placeholder="email address" required="" />
      <textarea placeholder="Adresss" name="address" required=""></textarea>
      <button type="submit">create</button>
      <p class="message">Already registered? <a href="index.php">Sign In</a></p>
    </form>
  </div>
</div>
</body>
</html>
<?php
include('connect.php');
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$address=$_POST['address'];

$q=mysqli_query($connect,"INSERT INTO users (name,password,email,address) VALUES ('$name','$password','$email','$address')");

?>