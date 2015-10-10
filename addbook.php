<?php

require 'connect.php';
require  'core.php';
$bookid=$_POST['id'];
$title=$_POST['title'];
$author=$_POST['author'];
$type=$_POST['type'];
$typetext=$_POST['typetext'];
$publisher=$_POST['publisher'];


echo $id."<br>";
echo $title."<br>";
echo $author."<br>";
echo $type."<br>";
echo $typetext."<br>";
echo $publisher."<br>";

if($type=='Genre')
{
	$query1="INSERT into books (bookid,title,author,genre,publisher) values ('$bookid','$title','$author','$typetext','$publisher')";
	$query_run1=mysqli_query($link,$query1);
	if($query_run1)
		echo'DONE';
	else
		die(mysqli_error($link));
}
else if ($type=='Subject')
{
	$query1="INSERT into books (bookid,title,author,subject,publisher) values ('$bookid','$title','$author','$typetext','$publisher')";
	$query_run1=mysqli_query($link,$query1);
	if($query_run1)
		echo'DONE';
	else
		die(mysqli_error($link));
}
header('Location:profrequest.php');
?>