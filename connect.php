<?php

$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='library';
$link=mysqli_connect('localhost','root','','library') or die('could not connect');
@mysqli_select_db($mysql_db);
//echo "<b>connected</b> <br>";
?>