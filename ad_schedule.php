<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:admin_login.php");
}
require('admin_nav.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
        th {
  background-color: #4CAF50;
  color: white;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}</style>
</head>

<body>
    <table style='margin-top:8%;'>
        <tr>

            <th>train no</th>
            <th>source</th>
            <th>destination</th>
            <th>departure</th>
            <th>arrival</th>
            <th>frequency</th>
        </tr>
        <tr>
            <form action="ad_schedule.php" method="POST">

                <td><input type="text" name="f_no"></td>
                <td><input type="text" name="source"></td>
                <td><input type="text" name="destination"></td>
                <td><input type="datetime-local" name="departure"></td>
                <td><input type="datetime-local" name="arrival"></td>
                <td><input type="text" name="frequency"></td>


        </tr>
        <th>number of seats</th>
        <th>fare</th>
        <tr>
            <td><input type="text" name="seat_a"></td>
            <td><input type="text" name="fair_a"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="submit" class="button"></td>
        </tr>
        </form>
</body>

</html>

<?php

include('session.php');
if (isset($_POST['submit'])) {
    $q = mysqli_query($connect, "SELECT MAX(id) from schedule");
    $c = mysqli_num_rows($q);

    $rows = mysqli_fetch_array($q);
    if ($rows) {
        $max_id = $rows[0];
        $max_id = $max_id + 1;
    } else {
        $max_id = 1;
    }

    $f_name = $_POST['f_no'];
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $departure = $_POST['departure'];
    $arrival = $_POST['arrival'];
    $frequency = $_POST['frequency'];
    $seat_a = $_POST['seat_a'];
    $fair_a = $_POST['fair_a'];
    $q = mysqli_query($connect, "INSERT into schedule(id,f_no,source,destination,departure,arrival,frequency) values('" . $max_id . "','" . $f_name . "','" . $source . "','
	" . $destination . "','" . $departure . "','" . $arrival . "','" . $frequency . "')");
    mysqli_query($connect, "INSERT INTO train_details(id,seat_a,fair_a) values ('" . $max_id . "','" . $seat_a . "','" . $fair_a . "')");
}
?> 