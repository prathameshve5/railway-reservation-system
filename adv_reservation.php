<?php
require('connect.php');
require('admin_nav.php');



?>
<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>

    <table id="customers" style="margin-top:7%;">
        <tr>
            <th>train no</th>
            <th>Passanger name</th>
            <th>gender</th>
            <th>age</th>
        </tr>
        <?php 
        $q = mysqli_query($connect, "select * from p_details");
        while ($row = mysqli_fetch_array($q)) {
            ?>
        <tr>
            <td>
                <?php echo $row['f_no']; ?>
            </td>
            <td>
                <?php echo $row['p_name']; ?>
            </td>
            <td>
                <?php echo $row['gender']; ?>
            </td>
            <td>
                <?php echo $row['age']; ?>
            </td>
        </tr>

        <?php

    }
    ?>

    </table>

</body>

</html> 