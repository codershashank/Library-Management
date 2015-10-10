
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
                    <li >
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
					<li class="active" >
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
                        All Vendors 
                        </h1>
                       
                    </div>
                </div>
				
	
                <!-- /.row -->
</div>



	<div class="container-fluid">
	<div id="content" class="span12">
		<div col-md-1>
		<?php ?>
		</div>
    </div>

	<div class="row">
<div class="col-md-10">

	<?php
require 'connect.php';
$id = $_SESSION['id'];
echo '<strong>Your ID is:'.$id.'</strong><br>';
$query = "select * from vendor";
//$query = mysqli_real_escape_string ($link,$query);
$qresult = mysqli_query($link,$query);
if(!$qresult)
{
	echo "Error! : ".mysqli_error($link);
} 
if(mysqli_num_rows($qresult)>0)
{
?>
<table class="table table-striped" >
    <thead>
        <tr>
            <th data-field="id">Vendor ID</th>
            <th data-field="name">Enterprise</th>
            <th data-field="duedt">Phone</th>
			<th data-field="issuedt">Email</th>
			<th data-field="userid">Address</th>
			<th data-field="userid">Deals In</th>
		</tr>
    </thead>
	<tbody>
	
	  <?php 
			while ($results = mysqli_fetch_assoc($qresult)){

				$id=$results['id'];
				$enterprise=$results['enterprise'];
				$phone=$results['phone'];
				$email=$results['email'];
				$address=$results['address'];
				$deals=$results['dealsin'];
 				echo"<tr>";
				echo "<td>".$id."</td>";
				echo "<td>".$enterprise."</td>";
				echo "<td>".$phone."</td>";
				echo"<td>".$email."</td>";
				echo"<td>".$address."</td>";
				echo"<td>".$deals."</td>";
				echo "</tr>";
			 } 
		}
		$link->close(); 
	 ?>
		
	</tbody>
	</div>
		</table>
		</div>      
    </div>

	<div class="row">
	<div class="col-md-4 col-md-offset-3">
	<center><button  class="btn btn-success btn-info"  name="return" type="submit" data-toggle="modal" data-target="#myModal">&nbsp&nbsp&nbspWant to Add a Vendor  ?&nbsp&nbsp&nbsp<br>Add Now!</button></center>
	</div>
	</div>	

  </div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Do you really want to return?</h4>
      </div>
      <div class="modal-body">
	  <form role="form" action="addvendor.php" method="POST">
	  <div class="form-group">
	  <label>Enter Vendor Id:</label><br>
      <input type="text" name="id" placeholder="Vendor Id" required></input>
	  <br><label>Enter Enterprise Name:</label><br>
      <input type="text" name="enterprise" placeholder="Name goes here..." required></input>
	  <br><label>Enter Phone:</label><br>
      <input type="text" name="phone" placeholder="Phone"></input>
	  <br><label>Enter Email:</label><br>
      <input type="text" name="email" placeholder="Email"></input>
	  <br><label>Enter Address:</label><br>
      <input type="text" name="address" placeholder="Where is the vendor?" required></input>
	  <br><label>Deals In:</label><br>
      <input type="text" name="dealsin" placeholder="What does vendor supply?" required></input>
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

</div>