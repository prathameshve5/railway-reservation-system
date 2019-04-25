<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style type="text/css">
        #nav {
            height: 70px;
            width: 100%;
            border: 1px solid black;
            background-color: #6d8084;
            color: white;
            font-weight: 400px;
            font-size: 20px;
            padding-bottom: 10px;
            top: 0;
            left: 0;
            position: fixed;
            z-index: 1;

        }

        ul {
            background-color: #6d8084;
            float: right;


        }

        li {
            display: inline;
            padding: 7px;

        }
    </style>
</head>

<body>
    <div id="nav">
        <ul>
            <li style="margin-right:10px, font-family: courier; font-size: 35px; font-style: bold;">Railway reservation system</li>
            <li><a href="ad_schedule.php">add schedule</a></li>
            <li><a href="adv_schedule.php">view schedule</a></li>
            <li><a href="adv_reservation.php">view reservations</a></li>
            <li><a href="adlogout.php">logout</a></li>

        </ul>
    </div>
</body>

</html> 