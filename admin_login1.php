<?php
session_start();
if($_POST['name']=="admin" && $_POST['password']=="admin")
{
   $_SESSION['username']="admin";
   header("location:ad_schedule.php");
}

 ?>