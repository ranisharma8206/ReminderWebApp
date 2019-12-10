
<?php

$con = mysqli_connect('localhost','root','','my_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");

$sql="INSERT INTO `user` (`id`,`med_name`,`time`,`date`,`amount`,`type`,`frequency`) VALUES (default,'$_POST[med_name]','$_POST[time]','$_POST[date]','$_POST[amount]','$_POST[type]','$_POST[frequency]')";
$result = mysqli_query($con,$sql);

mysqli_close($con);
?>
