<!DOCTYPE html>
<html>

<head>
    <title>log in</title>
    <link rel="stylesheet" type="text/css" href="login.css">

    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('message').click(function() {
                $('login-form').hide()
            });
        });
    </script>

</head>

<body>
    <div class="login-page">
        <div class="form">

            <form class="login-form" action="index.php" method="post">
                <input type="text" name="name" placeholder="username" />
                <input type="password" name="password" placeholder="password" />
                <button type="submit">login</button>
                <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
            </form>
        </div>
    </div>
</body>

</html>
<?php
error_reporting(0);
session_start();
include('connect.php');
$name = $_POST['name'];
$password = $_POST['password'];

if ($name != "" && $password != "") {
  $q = mysqli_query($connect, "SELECT * FROM users WHERE name = '$name' AND password = '$password'");
  $r = mysqli_num_rows($q);
  if ($r == 1) {
    $rows = mysqli_fetch_array($q);
    $_SESSION['login_user'] = $rows['name'];
    header("location:schedule.php?page=1");
  }
}
?> 