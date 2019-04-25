<!DOCTYPE html>
<html>

<head>
    <title>scedule</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        #pageno {
            background-color: gray;
            display: inline;
            width: 100%;
            height: 20px;
            font-size: 30px;
            margin-left: 70px;
        }

        .pageno:hover {
            background-color: blue;
        }

        .pageno:active {
            background-color: red;
        }

        .pageno:visited {
            color: black;

        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>
                <form action="search.php" method="get">
                    <input type="text" name="source" placeholder="Enter source">--->><input type="text" name="destination" placeholder="Enter destination"><input type="submit" name="search" value="search">
                </form>

                <?php

                include('session.php');
                include('nav.php');
                $q = mysqli_query($connect, "SELECT * FROM schedule");
                $cou = mysqli_num_rows($q);
                $a = $cou / 20;
                $a = ceil($a);
                ?>
                <div id="pageno">
                    <?php 
                    for ($b = 1; $b <= $a; $b++) {
                        ?><a href="schedule.php?page=<?php echo $b; ?>" style="text-decoration:none;" class="pageno">
                        <?php echo $b, " "; ?></a>
                    <?php 
                }

                $page = $_GET['page'];
                if ($page == "" || $page == "1") {
                    $page1 = 0;
                } else {
                    $page1 = ($page * 20) - 20;
                }
                $sql = "SELECT * FROM schedule ORDER BY id DESC limit $page1,20"; ?>
                </div>
            </td>
    </table>
    <table>
        </tr>
        <tr>
            <th>#</th>
            <th>train no</th>
            <th>source</th>
            <th>destination</th>
            <th>departure</th>
            <th>arrival</th>
            <th>frequency</th>
        </tr>
        <?php 

        $res = mysqli_query($connect, "SELECT * FROM schedule ");
        $c = mysqli_num_rows($res);
        while ($rows = mysqli_fetch_array($res)) {
            ?>
        <tr>
            <td><a href="view_train.php?id=<?php echo $rows['id']; ?>">
                    <?php echo $rows['id']; ?></a></td>
            <td><a href="view_train.php?id=<?php echo $rows['id']; ?>">
                    <?php echo $rows['f_no']; ?></a></td>
            <td><a href="view_train.php?id=<?php echo $rows['id']; ?>">
                    <?php echo $rows['source']; ?></a></td>
            <td><a href="view_train.php?id=<?php echo $rows['id']; ?>">
                    <?php echo $rows['destination']; ?></a></td>
            <td><a href="view_train.php?id=<?php echo $rows['id']; ?>">
                    <?php echo $rows['departure']; ?></a></td>
            <td><a href="view_train.php?id=<?php echo $rows['id']; ?>">
                    <?php echo $rows['arrival']; ?></a></td>
            <td><a href="view_train.php?id=<?php echo $rows['id']; ?>">
                    <?php echo $rows['frequency']; ?></a></td>
        </tr>
        <?php	
    }
    mysqli_close($connect);
    ?>
    </table>
</body>

</html> 