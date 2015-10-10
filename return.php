<?php
// program to return books
// please edit the require fields below accordingly
//require 'core.php';		// edit these accordingly
require 'connect.php';	//edit these accordingly
$qresult="";
$bookid=$_POST["bookid"];
$id=$_POST["id"];
	echo "bookid: ".$bookid."<br> userid: ".$id;

	// first update the borrows table by inserting the return date; then call regclaim stored procedure which automates the claim and return thing
	$query="update borrows set returndt=now() where id='$id'and bookid='$bookid'";	
	$qresult = @mysqli_query($link,$query);
	if(!$qresult)
	{
	die("Error cant enter return date. Error is:".mysqli_error($link));
	}		
	$query3= "select bookid,id from claims where claims.bookid='$bookid' ORDER BY claims.dateofclaim LIMIT 1";
	$qresult3=mysqli_query($link,$query3);
	if (mysqli_num_rows($qresult3)>0)
	{
		$result=mysqli_fetch_assoc($qresult3);
		$done=1;
		$vid=$result['id'];
	}
	else
	{
		$done=0;
		$vid='';
	}
	
	echo $done;
	$query1 = "call claimreg('$bookid','$id','$done','$vid')";
	//$query = mysqli_real_escape_string ($link,$query);
	$qresult1 = @mysqli_query($link,$query1);
	if(!$qresult1)
	{
	die("Error: ".mysqli_error($link));
	}
	else
	{	
		echo "done";
		$_SESSION["return"]=true;	
		
	}
	
	
$link->close();	
header ('location:loginpage2.php');   
?>