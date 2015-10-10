
<?php 
session_start();
require 'connect.php';
if(isset($_SESSION['user'])){


//echo '<p><center>Hi  '.$_SESSION['user'].'  Welcome to IIT Indore Student Database Center</p></center>';
}
else
{
header('Location:main.php');
}
if(isset($_POST['bookid'])){
if(!empty($_POST['bookid'])){
$bookid=$_POST['bookid'];
$id=$_SESSION['id'];
$query1="select bookid from books where bookid='$bookid' and numofcopies<=1";
$qresult1 = mysqli_query($link,$query1);
$row1=mysqli_fetch_array($qresult1);
if($row1[0]){
$query2="insert into claims(bookid,id,dateofclaim) values('$bookid','$id',now())";
$qresult2 = mysqli_query($link,$query2);
?>
<div class="alert alert-success" role="alert" style="margin-right:200px;">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <strong>Notice:  </strong>Your claim was registered successfully.
</div>
<?php
}
else
{?>
			<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Notice:  </strong>Cannot register a claim on this book.
</div>
<?php
}
}
}
?>
<head>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/theme.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-theme.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/dashboard.css"/>
<link type="text/css" href="bootstrap/css/admin.css" rel="stylesheet"/>
<link type="text/css" href="bootstrap/css/font-awesome.min.css" rel="stylesheet"/>
<link type="text/css" href="bootstrap/css/signin.css" rel="stylesheet"/>
<link href="bootstrap/css/star-rating.css" media="all" rel="stylesheet" type="text/css" />
<link type="text/css" href="bootstrap/css/jquery.rating.css" rel="stylesheet"/>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/docs.min.js"></script>
    <script src="bootstrap/js/raphael.min.js"></script>
    <script src="bootstrap/js/morris.min.js"></script>
    <script src="bootstrap/js/morris-data.js"></script>
	<script src="bootstrap/js/bootstrap-modal.js"></script>
	<script src="bootstrap/js/jquery.rating.pack.js" type="text/javascript"></script>
	<script src="bootstrap/js/jquery.form.js" type="text/javascript"></script>
	<script> 
	</script>
	<meta charset="UTF-8"/>
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>


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
				 <?php 
				$username=$_SESSION['user'];
 $con = mysqli_connect("localhost","root","","library");
 $q = mysqli_query($con,"SELECT img FROM reader where name='$username'");
 $row = mysqli_fetch_array($q);
				 echo "<img width='40' height='40' src='$row[0]'/>";
				?>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img width="20" height="20" src='/mail.png'/> <b class="caret"></b></a>
					
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
                <ul class="nav navbar-nav side-nav" style="height:1500px;">
                    <li>
                        <a href="loginpage1.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  My Shelf</a>
                    </li>
                    <li>
                        <a href="search.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>  Search</a>
                    </li>
                    <li>
                        <a href="fine.php"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span>  Overdues</a>
                    </li>
                    <li class="active">
                        <a href="claim.php"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>  Claims</a>
                    </li>
                    <li>
                        <a href="recommend.php"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Recommended</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Book Lost Declaration</a>
                    </li>
					
					<li>
                        <a href="#"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Library policy</a>
                    </li>
					
					<li>
                        <a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Ask Librarian</a>
                    </li>
					
					<li>
                        <a href="#"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Donate a book</a>
                    </li>
					
					
					
					
			<!--		<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
					
				-->	
					
					
						</ul>
						</div>
						
						
                    
					
            
				
            
						
						
						
			
</nav>

	<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Claim a book 
                        </h1>
                       
                    </div>
                </div>
				
	
                <!-- /.row -->
</div>
</div>


	<div class="container-fluid">
	<div class="row">
	 <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 well well-sm">
            <legend><a href="http://www.iiti.ac.in"><i class="glyphicon glyphicon-globe"></i></a>Make a Claim</legend>
           <center>
		   <form action="claim.php" method="POST" class="form" role="form">
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
            <label class="col-md-5 control-label">Enter Book ID: </label>
            <div class="col-md-7">
			<input class="form-control" name="bookid" placeholder="Type here" type="text"/>
			</div>
			</div>
			
	<!-- changed date format because mysql takes date format yyyy-mm-dd  -->
		
            <br />
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">
                Submit</button>
            </form>

        </div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
			</div>
</div>

<!--<div class="row">
	
	<div class="col-md-4" style=" margin-left:33; margin-top:20 ; background-image:url('books.jpg');background-position:bottom left;height:200;width:200;">
	  <img height="60" width="60" src="#"/>
	    <p>This is shashank</p>
	</div>
	
	<div class="col-md-4" style=" margin-left:32; margin-top:20 ; background-image:url('books.jpg');background-position:bottom left; height:200;width:200;">
	  <img height="60" width="60" src="#"/>
	    <p>This is shashank</p>
	</div>
	
	<div class="col-md-4" style=" margin-left:32; margin-top:20 ; background-image:url('books.jpg');background-position:bottom left;height:200;width:200;">
	  <img height="60" width="60" src="#"/>
	    <p>This is shashank</p>
	</div>
	
	<div class="col-md-4" style=" margin-left:32; margin-top:20; background-image:url('books.jpg');background-position:bottom left;height:200;width:200;">
	  <img height="60" width="60" src="#"/>
	    <p>This is shashank</p>
	</div>
			
                <!-- /.row 
</div>
-->














</div>


 <!--<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
         
        </div>
      </div>
    </nav>
	
	 <div class="container-fluid">
      <div class="row"
        <div class="col-sm- col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
-->
  
<!--<a href="logout.php">Logout!!</a>
<ol>
<li><a href="add.php"> Add Student</a></li>
<li><a href="view.php">"View Database</a></li>
<li><a href="profiledit.php">"Edit Profile"</a></li>
</ol>
-->

