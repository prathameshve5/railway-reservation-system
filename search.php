<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
session_start();
include('session.php');
$source = $_GET['source'];
$dest = $_GET['destination'];
?>
<div id='se'>
    <h2>Search result for source
        <?php echo $source; ?> to destination
        <?php echo $dest, " "; ?>are as follows</h2>
</div>;



<table>
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
    $res = mysqli_query($connect, "SELECT * FROM schedule where source like '%{$source}%' AND destination LIKE '%{$dest}%'");
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