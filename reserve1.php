<?php

include('session.php');
$s = $_GET['id'];
$p = $_GET['rs'];
$q = mysqli_query($connect, "SELECT * from schedule WHERE id='$s'");
$rows = mysqli_fetch_array($q);
$q1 = mysqli_query($connect, "SELECT * from train_details WHERE id='$s'");
$rows1 = mysqli_fetch_array($q1);


?>
<h3>your payment for following Train is
    <?php echo $p; ?>
</h3>
<div id="container">

    <table>
        <tr>
            <td>Train number:-
                <?php echo $rows['f_no']; ?>
            </td>
        </tr>

        <tr>
            <td>From:-
                <?php echo $rows['source']; ?><span>To:-
                    <?php echo $rows['destination']; ?>
            </td>
        </tr>
        <tr>
            <td>Depart at:-
                <?php echo $rows['departure'], " "; ?><span>Arrive At:-
                    <?php echo " ", $rows['arrival']; ?>
            </td>
        </tr>
        <tr>
            <td>Frequency:-
                <?php echo $rows['frequency']; ?>
            </td>
        </tr>
        <tr>
            <td>Available seats:-
                <?php echo $rows1['seat_a']; ?>
            </td>
        </tr>

    </table>
</div>

<center> <a href="c_reserve.php">wants to continue reservation</a>OR<button id="myButton">Cancel ticket</button></center>


<script type="text/javascript">
    document.getElementById("myButton").onclick = function() {
        location.href = "/railway/schedule.php?page=1";
    };
</script> 