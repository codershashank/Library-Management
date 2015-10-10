
<?php 
session_start();
if(isset($_SESSION['user'])){
echo '<p><center>Hi  '.$_SESSION['user'].'  Welcome to IIT Indore Student Database Center</p></center>';
}
else
{
header('Location:main.php');
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
	 document.getElementById("mypara").innerHTML = "We are done here";
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
                    <li >
						<a href="loginpage2.php"><i class="fa fa-fw fa-table"></i>Current Issues</a>
                    </li>
					<li class="active">
						<a href="returnrequest.php"><i class="fa fa-fw fa-table"></i>Pending Return Requests</a>
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
                    
					<li >
						<a href="updatewallet.php"><i class="fa fa-fw fa-table"></i>Update wallet</a>
                    </li>
                    <li>
                        <a href="view.php"><i class="fa fa-fw fa-table">View Database</i></a>
                    </li>
				</ul>
			</div>
						
		</nav>
		
<!-- Sidebar Menu Items OVER -->		

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          Pending Return Requests
                        </h1>
                       
                    </div>
                </div>
				
	
                <!-- /.row -->
</div>
</div>


	<div class="container-fluid">
	
	<div class="row">
	<div class="col-md-4 col-md-offset-3" style="margin-top:20px">
	<center><button  class="btn btn-primary btn-lg"  name="return" type="submit" data-toggle="modal" data-target="#myModal">&nbsp&nbsp&nbspWant to return a book ?&nbsp&nbsp&nbsp<br>Return Now!</button></center>
	</div>
	</div>
	<div class="row">
<div class="col-md-10">

	<?php
require 'connect.php';
$id = $_SESSION['id'];
echo '<strong>Your ID is:'.$id.'</strong><br>';
$query = "select request.id,request.bookid,books.title from request,books where request.bookid=books.bookid";
//$query = mysqli_real_escape_string ($link,$query);
$qresult = mysqli_query($link,$query);
if(!$qresult)
{
	echo "$qresult". "error 2";
} 

if(mysqli_num_rows($qresult)>0)
{
?>
<table class="table table-striped" >
    <thead>
        <tr>
            <th data-field="id">Book ID</th>
            <th data-field="name">Book Name</th>
            <th data-field="userid">User ID</th>
			
		</tr>
    </thead>
	<tbody>
	
	  <?php 
			while ($results = mysqli_fetch_assoc($qresult)){

				
				$bookid=$results['bookid'];
				$title=$results['title'];
				$uid=$results['id'];
 				echo"<tr>";
				echo "<td>".$bookid."</td>";
				echo "<td>".$title."</td>";
				echo"<td>".$uid."</td>";
				echo "</tr>";
			 } 
	}
			 $link->close(); 
	 ?>
		
	</tbody>
	</div>
		</table>
		</div>
	
	
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Do you really want to return?</h4>
      </div>
      <div class="modal-body">
	  <form role="form" action="return.php" method="POST">
	  <div class="form-group">
	  <label>Enter Book Id:</label>
      <input type="text" name="bookid" placeholder="Book Id"></input>
      <label>Enter User Id:</label>
      <input type="text" name="id" placeholder="User id"></input>
	  </div>	  
	  </div>
	    <div class="modal-footer">
		<p id="mypara"></p>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" onclick="myfunction()">Save changes</button>
      </div>
	  </form>
      
    
    </div>
  </div>
</div>
