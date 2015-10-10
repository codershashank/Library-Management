<?php

require 'connect.php';
require  'core.php';
$id=$_SESSION['id'];
$query="SELECT * FROM reader WHERE id='$id'";
$query_run= mysqli_query($link,$query);
$query_exec=mysqli_fetch_array($query_run);

if(isset($_POST['yourname']) && isset($_POST['youremail']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['dob']) && isset($_POST['quantity'])){
if(!empty($_POST['yourname']) && !empty($_POST['youremail']) && !empty($_POST['password'])){

$newname=$_POST['yourname'];
$newemail=$_POST['youremail'];
$newpassword=$_POST['password'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$quantity=$_POST['quantity'];


/*echo $newname;
echo $newdegree;
echo $newbranch;*/

$query1="UPDATE reader SET name='$newname',email='$newemail',passkey='$newpassword',address='$address',dob='$dob'and phone='$quantity' WHERE id='$id' ";
$query_run1=mysqli_query($link,$query1);
header('Location:loginpage1.php');
}
}
?>

<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/theme.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-theme.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/dashboard.css"/>
<link type="text/css" href="bootstrap/css/admin.css" rel="stylesheet"/>
<link type="text/css" href="bootstrap/css/font-awesome.min.css" rel="stylesheet"/>
<link type="text/css" href="bootstrap/css/signin.css" rel="stylesheet"/>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/docs.min.js"></script>
<script src="bootstrap/js/jquery1.js"></script>
    <script src="bootstrap/js/raphael.min.js"></script>
    <script src="bootstrap/js/morris.min.js"></script>
    <script src="bootstrap/js/morris-data.js"></script>
<style>
body { padding-top:30px; }
.form-control { margin-bottom: 10px; }
</style>

<center>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 well well-sm">
            <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Edit Profile</legend>
           <center>
		   <form action="profiledit.php" method="post" class="form" role="form">
            <!--<div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="firstname" placeholder="First Name" type="text"
                        required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                </div>
            </div>-->
			<div class="form-group">
			<label class="col-md-3 control-label">User Id</label>
    <div class="col-md-9">
      <p class="form-control-static"><?php echo $id; ?></p>
    </div>   
	</div>
	
	        <div class="form-group">
            <label class="col-md-3 control-label">Username</label>
            <div class="col-md-9">
			<input class="form-control" name="yourname" placeholder=" username" type="text" value="<?php if(isset($query_exec[1])){echo $query_exec[2];} ?>" />
			</div>
			</div>
			<div class="form-group">
            <label class="col-md-3 control-label">Email</label>
            <div class="col-md-9">
            <input class="form-control" name="youremail" placeholder="Your Email" type="email" value="<?php if(isset($query_exec[1])){echo $query_exec[4];} ?>" />
			</div>
			</div>
			
			<div class="form-group">
            <label class="col-md-3 control-label">Password</label>
            <div class="col-md-9">
            <input class="form-control" name="password" placeholder="New Password" type="password" value="<?php if(isset($query_exec[1])){echo $query_exec[1];} ?>" />
			</div>
			</div>
			
			
			<div class="form-group">
            <label class="col-md-3 control-label">Address</label>
            <div class="col-md-9">
			<input class="form-control" name="address" placeholder="Your Address" type="text" value="<?php if(isset($query_exec[1])){echo $query_exec[5];} ?>" />
			</div>
			</div>
	<!-- changed date format because mysql takes date format yyyy-mm-dd  -->
			<div class="form-group">
            <label class="col-md-3 control-label">DOB</label> 
            <div class="col-md-9">
			<input class="form-control" name="dob" placeholder="yyyy-mm-dd" type="date" value="<?php if(isset($query_exec[5])){echo $query_exec[6];} ?>" />
			</div>
			</div>
			
			<div class="form-group">
            <label class="col-md-3 control-label">Phone</label>
            <div class="col-md-9">
			<input class="form-control" name="quantity" placeholder="Phone" type="tel" value="<?php if(isset($query_exec[5])){echo $query_exec[3];} ?>"/>
			</div>
			</div>
          
            <br />
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">
                Save & Continue</button>
            </form>

        </div>
    </div>
</div>
</center>