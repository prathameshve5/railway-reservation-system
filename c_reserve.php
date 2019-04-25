<?php
error_reporting(0);
include('session.php');
$id = $_COOKIE['id'];
$p1 = $_COOKIE['p1'];
$gender1 = $_COOKIE['gender1'];
$age1 = $_COOKIE['age1'];
$p2 = $_COOKIE['p2'];
$gender2 = $_COOKIE['gender2'];
$age2 = $_COOKIE['age2'];
$p3 = $_COOKIE['p3'];
$gender3 = $_COOKIE['gender3'];
$age3 = $_COOKIE['age3'];
$p4 = $_COOKIE['p4'];
$gender4 = $_COOKIE['gender4'];
$age4 = $_COOKIE['age4'];
$p5 = $_COOKIE['p5'];
$gender5 = $_COOKIE['gender5'];
$age5 = $_COOKIE['age5'];
$f_no = $_COOKIE['f_no'];

$q1 = mysqli_query($connect, "SELECT * from train_details WHERE id='$id'");
$rows1 = mysqli_fetch_array($q1);
$rs = $rows1['fair_a'];

$q = mysqli_query($connect, "SELECT MAX(pid) from p_details");
$c = mysqli_num_rows($q);
$q2=mysqli_query($connect,"SELECT max(seatno) from p_details where f_no = '$f_no'");
$ro= mysqli_fetch_array($q2);
$qr=mysqli_query($connect,"SELECT * from train_details where id = '$id'");

$ro1= mysqli_fetch_array($qr);
if($ro)
{
    $se=$ro1[1];
    $se=$se-($se-1);
}
$rows = mysqli_fetch_array($q);
if ($rows) {
    $max_id = $rows[0];
    $max_id = $max_id + 1;
} 
else {
    $max_id = 1;
}
if ($p1 != '' && $gender1 != '' && $age1 != '') {
    $max_id = $max_id + 1;
    $rs = $rs + $rs;
    mysqli_query($connect, "INSERT INTO p_details(pid,f_no,p_name,gender,age,seatno) VALUES ('$max_id','$f_no','$p1','$gender1','$age1','$se')");
    $s=$ro1[1];
    $s=$s-1;
    mysqli_query($connect,"UPDATE train_details SET seat_a='$s' where id='$id'");
}
if ($p2 != '' && $gender2 != '' && $age2 != '') {
    $max_id = $max_id + 1;
    $rs = $rs + $rs;
    mysqli_query($connect, "INSERT INTO p_details(pid,f_no,p_name,gender,age) VALUES ('$max_id','$f_no','$p2','$gender2','$age2')");
    $s=$ro1[1];
    $s=$s-2;
    mysqli_query($connect,"UPDATE train_details SET seat_a='$s' where id='$id'");
}
if ($p3 != '' && $gender3 != '' && $age3 != '') {
    $max_id = $max_id + 1;
    $rs = $rs + $rs;
    mysqli_query($connect, "INSERT INTO p_details(pid,f_no,p_name,gender,age) VALUES ('$max_id','$f_no','$p3','$gender3','$age3')");
    $s=$ro1[1];
    $s=$s-3;
    mysqli_query($connect,"UPDATE train_details SET seat_a='$s' where id='$id'");
}
if ($p4 != '' && $gender4 != '' && $age4 != '') {
    $max_id = $max_id + 1;
    $rs = $rs + $rs;
    mysqli_query($connect, "INSERT INTO p_details(pid,f_no,p_name,gender,age) VALUES ('$max_id','$f_no','$p4','$gender4','$age4')");
    $s=$ro1[1];
    $s=$s-4;
    mysqli_query($connect,"UPDATE train_details SET seat_a='$s' where id='$id'");
}
if ($p5 != '' && $gender5 != '' && $age5 != '') {
    $max_id = $max_id + 1;
    $rs = $rs + $rs;
    mysqli_query($connect, "INSERT INTO p_details(pid,f_no,p_name,gender,age) VALUES ('$max_id','$f_no','$p5','$gender5','$age5')");
    $s=$ro1[1];
    $s=$s-5;
    mysqli_query($connect,"UPDATE train_details SET seat_a='$s' where id='$id'");
}


?>

<script>
    window.alert('you have successfully done reservation');
    location.href = "/railway/schedule.php?page=1";
</script> 