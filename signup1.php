<?php
include('connect.php');
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$address=$_POST['address'];

$q=mysqli_query($connect,"INSERT INTO users (name,password,email,address) VALUES ('$name','$password','$email','$address')");
if($q)
{
	header("location:index.php");
}
else{
	?>
	<img src="error.png" style="height: 400px; width: 800px;position: fixed;margin-top: 8%;margin-left:5px;">
	<?php
	header("refresh:0.5,url=signup.php");
}

?>