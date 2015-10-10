<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='iit';
$mysql_db='library';
$link=mysqli_connect('localhost','root','','library') or die('could not connect');
mysqli_select_db($link,$mysql_db);


if( isset($_POST['username']) && isset($_POST['password'])){
$username=$_POST['username'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];
$_SESSION['usertype']=$_POST['usertype'];
if(!empty($username)&&!empty($password)&&!empty($usertype)){
	if($usertype=="student"){
			$query_run=@mysqli_query($link,"select name,id from reader where name ='$username' and passkey ='$password'");
		if($query_run){
			$query_num_rows=@mysqli_num_rows($query_run);
			if($query_num_rows==0){
			echo 'invalid Username/Password!!';
			}
			else{
			$user=mysqli_fetch_assoc($query_run);
			$_SESSION['id']=$user['id'];
			$_SESSION['user']=$user['name'];
			$_SESSION['usertype']=$usertype;
			header('Location: loginpage1.php');
			}
		}
}
else if($usertype=="librarian"){
$query_run=@mysqli_query($link,"select name,id from librarian where name ='$username' and passkey ='$password'");
		if($query_run){
			$query_num_rows=@mysqli_num_rows($query_run);
			if($query_num_rows==0){
			echo 'invalid Username/Password!!';
			}
			else{
			$user=mysqli_fetch_assoc($query_run);
			$_SESSION['id']=$user['id'];
			$_SESSION['user']=$user['name'];
			$_SESSION['usertype']=$usertype;
			header('Location: loginpage2.php');
			}
		}
}
else if($usertype=="professor"){
$query_run=@mysqli_query($link,"select name,id from professors where name ='$username' and passkey ='$password'");
	if($query_run){
		$query_num_rows=@mysqli_num_rows($query_run);
		if($query_num_rows==0){
		echo 'invalid Username/Password!!';
		}
		else{
		$user=mysqli_fetch_assoc($query_run);
		$_SESSION['id']=$user['id'];
		$_SESSION['user']=$user['name'];
		$_SESSION['usertype']=$usertype;
		header('Location: loginpage3.php');
		}	
	}
}

//$query_run=@mysqli_query($link,"select username from users where username ='$username' and password ='$password'");
}
}
$link->close();
?>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/theme.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-theme.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"/>
<link href="bootstrap/css/signin.css" rel="stylesheet"/>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<form action="main.php" method="POST" class="form-signin">
<h2 class="form-signin-heading">Welcome to BIBLIOTHEQUE</h2>
<label class="form control-label">Username:</label></br>
<input type="text" name="username" placeholder="Type username here..." required></br>
<label>Password:</label></br>
<input type="password" class="span3" placeholder="Type password here..." name="password" required></br>
I am
<select name="usertype">
  <option name="usertype" value="student">Student</option>
  <option name="usertype" value="professor">Professor</option>
  <option name="usertype" value="librarian">Librarian</option>
  <option  name="usertype" value="others">Others</option>
</select>
<!-- <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">User Type
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Student</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Professor</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Librarian</a></li>
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Others</a></li>
        </ul>
      </div>-->
<label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
<p><a href='register.php'>SignUp here!!</a></p>
<button type="submit" value="Log In" class="btn btn-primary">Log In</button> 
</form>
  