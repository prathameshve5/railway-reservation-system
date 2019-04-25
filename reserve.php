<?php

include('session.php');
include('nav.php');
$id = $_GET['id'];
$q = mysqli_query($connect, "SELECT * from schedule WHERE id='$id'");
$rows = mysqli_fetch_array($q);
$q1 = mysqli_query($connect, "SELECT * from train_details WHERE id='$id'");
$rows1 = mysqli_fetch_array($q1);
$_POST['pno'] = "";

?>
<!DOCTYPE html>
<html>

<head>
    <title>revervation form</title>
</head>


<head>
    <link rel="stylesheet" type="text/css" href="view_train.css">
</head>

<body style="background-color: cyan">
    <div id="container">
        <center>
            <table style="background-color: gray">
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
                    <td id="as">Available seats:-
                        <?php echo $rows1['seat_a']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo $rows1['fair_a']; ?>
                    </td>
                </tr>
            </table>
        </center>
        <?php 
        if ($rows1['seat_a'] == 0) {
            ?>
        <tr>
            <td><a href="schedule.php?page=1">NO seats available.. go to schedule for view more Trains</a></td>
        </tr>
        <?php
        ?>
    </div>

    <?php 
} else {
    ?>
    </div>
    <h2>fill the following form for reservation</h2>
    <center>
        <table>
            <form action="cal.php?id=<?php echo $id; ?>" method="post">


                <tr>
                    <td>Name:-<input type='text' name='p1' ;></td>
                    <td><input type='radio' name='gender1' value='male'>male<span><input type='radio' name='gender1' value='female'>Female</td>
                    <td>Age:-<input type="text" name="age1"></td>
                </tr>
                <tr>
                    <td>Name:-<input type='text' name='p2' ;></td>
                    <td><input type='radio' name='gender2' value='male'>male<span><input type='radio' name='gender2' value='female'>Female</td>
                    <td>Age:-<input type="text" name="age2"></td>
                </tr>
                <tr>
                    <td>Name:-<input type='text' name='p3' ;></td>
                    <td><input type='radio' name='gender3' value='male'>male<span><input type='radio' name='gender3' value='female'>Female</td>
                    <td>Age:-<input type="text" name="age3"></td>
                </tr>
                <tr>
                    <td>Name:-<input type='text' name='p4' ;></td>
                    <td><input type='radio' name='gender4' value='male'>male<span><input type='radio' name='gender4' value='female'>Female</td>
                    <td>Age:-<input type="text" name="age4"></td>
                </tr>
                <tr>
                    <td>Name:-<input type='text' name='p5' ;></td>
                    <td><input type='radio' name='gender5' value='male'>male<span><input type='radio' name='gender5' value='female'>Female</td>
                    <td>Age:-<input type="text" name="age5"></td>
                </tr>

                <tr>
                    <td><button type="submit">SUBMIT</button>
            </form>
            <?php 
        } ?>
        </table>
    </center>
</body>

</html> 