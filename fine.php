
<?php 
session_start();
require 'connect.php';
if(isset($_SESSION['user'])){
}
else
{
header('Location:main.php');
}
if(isset($_POST['bookid'])){
if(!empty($_POST['bookid'])){
$bookid=$_POST['bookid'];
$id=$_SESSION['id'];
$query="insert into request(bookid,id,requestdate) values('$bookid','$id',now())";
$qresult = mysqli_query($link,$query);
if(!$qresult)
	{
	echo "error 3";
	}
	
	else
	{	
	echo '<br> delete successful<br>';	
	}
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
	<script src="bootstrap/js/bootstrap-modal.js"></script>
	<script>
	function myfunction(){
	 document.getElementById("mypara").innerHTML = "Your request is pending with the Librarian.";
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
				 <?php 
				$username=$_SESSION['user'];
				$id=$_SESSION['id'];
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
                    <li class="active">
                        <a href="fine.php"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span>  Overdues</a>
                    </li>
                    <li>
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
                    
                  
					
					
					
					
						</ul>
						</div>
						
						
                    
					
            
				
            
						
						
						
			
</nav>

	<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Remittances
                        </h1>
                       
                    </div>
                </div>
				
	
                <!-- /.row -->
</div>
</div>


	<div class="container-fluid">
	
	
	<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="all.php">All</a></li>
  <li role="presentation"><a href="wallet.php">My Wallet</a></li>
  <li role="presentation"><a href="pay.php">Pay now</a></li>
  <li role="presentation"><a href="history.php">History</a></li>
</ul>
	<?php
	
	 $query1="SELECT * FROM `borrows` WHERE now()>duedt and returndt IS NULL and id='$id'";
	 $query2="SELECT * FROM `borrows` WHERE returndt>duedt and returndt IS NOT NULL and id='$id'";
	 $qresult1=mysqli_query($con,$query1);
	 $qresult2=mysqli_query($con,$query2);
	 if(mysqli_num_rows($qresult1)>0){
	 ?>
	 <table border="1" style="width:80%">
	 <h3>*******************--All these books are witheld by you--*************************</h3>
	 <th style="text-align:center; height:40px">Book id</th>
	 <th style="text-align:center; height:40px">Issue Date</th>
	 <th style="text-align:center; height:40px">Due Date</th>
	 <th style="color:red;text-align:center; height:40px">Overdue(days)</th>
	 <?php
	while($row=mysqli_fetch_assoc($qresult1))
	 {
	?>
	<tr style="text-align:center;height:40px">
	<td><?php echo $row['bookid'];?></td>
	<td><?php echo $row['issuedt'];?></td>
	<td><?php echo $row['duedt'];?></td>
	<td>
	<?php $temp=date("Y/m/d");
	$todaydt=date_create($temp);
	$duedt=date_create($row['duedt']);
	$diff=date_diff($todaydt,$duedt); 
	echo $diff->format("%a");
	?>
	</td>
	</tr>
	<?php
	}
	?>
	
	</table>
	</br></br></br>
	
	<?php
	}
	
	if(mysqli_num_rows($qresult2)>0){
	?>
	 <table border="1" style="width:80%">
	 <h3>*******************--All these books have already been returned--*******************</h3>
	 <th style="text-align:center; height:40px">Book id</th>
	 <th style="text-align:center; height:40px">Due Date</th>
	 <th style="text-align:center; height:40px">Return Date</th>
	 <th style="color:red;text-align:center; height:40px">Overdue(days)</th>
	 <?php
	while($row=mysqli_fetch_assoc($qresult2))
	 {
	?>
	<tr style="text-align:center;height:40px">
	<td><?php echo $row['bookid'];?></td>
	<td><?php echo $row['duedt'];?></td>
	<td><?php echo $row['returndt'];?></td>
	<td>
	<?php $duedt=date_create($row['duedt']);
	$returndt=date_create($row['returndt']);
	$diff=date_diff($duedt,$returndt); 
	echo $diff->format("%a");?>
	</td>
	</tr>
	<?php
	}
	?>
	
	</table>
	<?php 
	
	}
      
	  
	  ?>	

	</div>
	
	
	
	
	
	
	<!--<div class="col-md-3" style=" margin-left:30; background-image:url('books.jpg');background-position:bottom left; height:200;width:200;">
	    <p>This is shashank</p>
	</div>
	
	<div class="col-md-3" style="margin-left:30; background-image:url('books.jpg');background-position:bottom left; height:200;width:200;">
	    <p>This is shashank</p>
	</div>
	
	<div class="col-md-3" style="margin-left:30; background-image:url('books.jpg');background-position:bottom left; height:200;width:200;">
	    <p>This is shashank</p>
	</div>
	
			</div>
                <!-- /.row 
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

