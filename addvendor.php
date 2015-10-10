<?php

require 'connect.php';
require  'core.php';
$newid=$_POST['id'];
$enterprise=$_POST['enterprise'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$dealsin=$_POST['dealsin'];


/*echo $newname;
echo $newdegree;
echo $newbranch;*/

$query1="INSERT into vendor (id,enterprise,email,phone,address,dealsin)values('$newid','$enterprise','$email','$phone','$address','$dealsin')";
$query_run1=mysqli_query($link,$query1);
if($query_run1)
	echo'DONE';
header('Location:vendor.php');
?>
