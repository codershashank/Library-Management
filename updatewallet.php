<?php 
session_start();
if(isset($_SESSION['user'])){
echo '<p><center>Hi  '.$_SESSION['user'].'  Welcome to IIT Indore Student Database Center</p></center>';
}
else
{
header('Location:loginform.php');
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
	<script src="bootstrap/js/bootstrap-modal.js"></script>
	<script>
	var id=1;
	function myfunction(){
	 document.getElementById("mypara").innerHTML = "Your request is pending with the Librarian.";
       	id=0;
	}	
	</script>
	<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Bibliotheque</a>
            </div>
			
			
			 <ul class="nav navbar-right top-nav">
			
				
				<li>
	
				 <img width='40' height='40' src="silhouette.png" />;
				</li>
				
				
				 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php $username=$_SESSION['user']; echo "$username" ;?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <center>
					   <li>
                            <a href="profiledit.php"><img height="15" width="15" src="edit.png"/>  Edit Profile </a>
                        </li>
						</center>
                        <li class="divider"></li>
                        
						<center>
						<li>
                            <a href="logout.php"><img height="15" width="15" src="logout.png"/>    Log Out</a>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                        </li>
						</center>
                    </ul>
                </li>
		
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img width="20" height="20" src='mail.png '/> <b class="caret"></b></a>
					
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
									
                                </div>
                            </a>
                        </li>
						
						
						 <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
							
                        </li>
						</ul>
						</li>
						</ul>

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
						<a href="loginpage2.php"><i class="fa fa-fw fa-table"></i>Current Issues</a>
                    </li>
			         <li>
						<a href="returnrequest.php"><i class="fa fa-fw fa-table"></i>Pending Return Request</a>
                    </li>
			
					<li >
						<a href="add.php"><i class="fa fa-fw fa-table"></i> Add Student</a>
                    </li>
					<li >
						<a href="addprof.php"><i class="fa fa-fw fa-table"></i> Add Professor</a>
                    </li>
                    <li>
                        <a href="search.php"><i class="fa fa-fw fa-bar-chart-o"></i> Search</a>
                    </li>
                    <li>
                        <a href="alluser.php"><i class="fa fa-fw fa-table"></i>All Users</a>
                    </li>
					<li>
                        <a href="allprof.php"><i class="fa fa-fw fa-table"></i>All Prof</a>
                    </li>
					<li >
						<a href="vendor.php"><i class="fa fa-fw fa-table"></i>All Vendors</a>
                    </li>
                    <li >
						<a href="profrequest.php"><i class="fa fa-fw fa-table"></i>Proffesor requests</a>
                    </li>
                    
					<li class="active">
						<a href="updatewallet.php"><i class="fa fa-fw fa-table"></i>Update wallet</a>
                    </li>
                    <li>
                        <a href="view.php"><i class="fa fa-fw fa-table">View Database</i></a>
                    </li>
				</ul>
			</div>
						
		</nav>
		

<?php 
require 'connect.php';
//require  'core.php';

if(isset($_POST['id']) && isset($_POST['wallet'])){
if(!empty($_POST['id']) &&!empty($_POST['wallet'])){
$newid=$_POST['id'];
$newwallet=$_POST['wallet'];

/*echo $newid;
echo $newcoupon;*/

$query1="UPDATE reader set wallet=wallet + '$newwallet' where id='$newid'";
$query_run1=mysqli_query($link,$query1);
?>

<!-- Sidebar Menu Items OVER -->	
<?php
if($query_run1)
{ ?>
	<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Notice:  </strong>Wallet updated
</div>
<?php } } }?>
<center>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 well well-sm">
            <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Add Reader</legend>
           <center>
		   <form action="updatewallet.php" method="post" class="form" role="form">
    		<div class="form-group">
			<label class="col-md-3 control-label">User Id</label>
				<div class="col-md-9">
				 <input class="form-control" name="id" placeholder="ID [format:stu#####]" type="text" required/>
				</div>   
			</div>
			
			<div class="form-group">
            <label class="col-md-3 control-label">Coupons</label>
            <div class="col-md-9">
			<input class="form-control" name="wallet" placeholder="Enter number of coupons here" type="text" required/>
			</div>
			</div>
          
            <br />
            <br />
            <button class="btn btn-lg btn-primary btn-lg" type="submit">
                Save & Continue</button>
            </form>

        </div>
    </div>
</div>
</center>