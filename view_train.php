<?php
session_start();
include('session.php');
include('nav.php');
$id = $_GET['id'];
$q = mysqli_query($connect, "SELECT * from schedule WHERE id='$id'");
$rows = mysqli_fetch_array($q);
$q1 = mysqli_query($connect, "SELECT * from train_details WHERE id='$id'");
$rows1 = mysqli_fetch_array($q1);
$_SESSION['f_no'] = $rows['f_no'];

?>

<head>
    <link rel="stylesheet" type="text/css" href="view_train.css">
</head>
<div id="container">

    <body style="background-color: cyan;">
        <table style="background-color: gray;  font-family: sans-serif;">
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
            <tr>
                <td>
                    <?php echo $rows1['fair_a']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <form>
                        <center>
                            <a href="reserve.php?id=<?php echo $id; ?>">Want's to reserve train Click here
                                !</a></center>
                    </form>
                </td>
            </tr>
        </table>
</div>
</body> 