<?php
   include('connect.php');

   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($connect,"select name from users where name = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql);
   
   $login_session = $row['name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>