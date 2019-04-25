<?php
 include('session.php');
 include('nav.php');
 error_reporting(0);
 $id=$_COOKIE['id'];
$p1=$_COOKIE['p1'];
$gender1=$_COOKIE['gender1'];
$age1=$_COOKIE['age1'];
$p2=$_COOKIE['p2'];
$gender2=$_COOKIE['gender2'];
$age2=$_COOKIE['age2'];
$p3=$_COOKIE['p3'];
$gender3=$_COOKIE['gender3'];
$age3=$_COOKIE['age3'];
$p4=$_COOKIE['p4'];
$gender4=$_COOKIE['gender4'];
$age4=$_COOKIE['age4'];
$p5=$_COOKIE['p5'];
$gender5=$_COOKIE['gender5'];
$age5=$_COOKIE['age5'];
$f_no=$_COOKIE['f_no'];

$res=mysqli_query($connect,"SELECT * FROM schedule WHERE id='$id'");
$c=mysqli_num_rows($res);
$rows=mysqli_fetch_array($res);


?>


<!DOCTYPE html>
<html>
<head>
	<title>eticket</title>
	<link rel="stylesheet" type="text/css" href="eticket.css">
</head>
<body>
<div id="whole">
<h2>E-ticket</h2><br>

<hr id="col">
<h3>Itinerary and Reservation Details</h3>
<div id="details"><div id="kin"><b><?php echo $rows['f_no']?></b></div><div class="ver"></div>
</div>
	<div class="dep">Departure<br><b><?php echo $rows['source'];?></b><br><?php echo $rows['departure'];?></div>
	<div class="arr">Arrival<br><b><?php echo $rows['destination'];?></b><br><?php echo $rows['arrival'];?></div>
	<div class="v"></div>
	<div class="last">Frequency<br><?php echo $rows['frequency'];?></div>
	<div id="pa_mid"><b id="sh">Passenger Name</b><b id="shi">Gender</b><b id="shif">Age</b>
<hr id="mid">
<b id="na"><?php echo $p1;?></b><b id="ad"><?php echo $gender1; ?></b><b id="di"></b><?php echo $age1;?></b>
<br>
<b id="na"><?php echo $p2;?></b><b id="ad"><?php echo $gender2; ?></b><b id="di"></b><?php echo $age2;?></b>
<br>
<b id="na"><?php echo $p3;?></b><b id="ad"><?php echo $gender3; ?></b><b id="di"></b><?php echo $age3;?></b>
<br>
<b id="na"><?php echo $p4;?></b><b id="ad"><?php echo $gender4; ?></b><b id="di"></b><?php echo $age4;?></b>
<br>
<b id="na"><?php echo $p4;?></b><b id="ad"><?php echo $gender5; ?></b><b id="di"></b><?php echo $age5;?></b>
<br>
</div>
</div>
<button onload="print()"><a href="#">print ticket</a></button>
<script type="text/javascript">
	function print()
	{
		window.print('eticket.php');
	}
</script>

</body>
</html>

