
<?php 
session_start();
if(isset($_SESSION['user'])){
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
                <ul class="nav navbar-nav side-nav" style="height:1500px;">
                    <li class="active">
						<a href="loginpage2.php"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Current Issues</a>
                    </li>
			         <li>
						<a href="returnrequest.php"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>Pending Return Request</a>
                    </li>
			
					<li >
						<a href="add.php"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Student</a>
                    </li>
					<li >
						<a href="addprof.php"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Professor</a>
                    </li>
                    <li>
                        <a href="search.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</a>
                    </li>
                    <li>
                        <a href="alluser.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  All Users</a>
                    </li>
					<li>
                        <a href="allprof.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  All Prof</a>
                    </li>
					<li >
						<a href="vendor.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  All Vendors</a>
                    </li>
                    <li >
						<a href="profrequest.php"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Professor requests</a>
                    </li>
                    
					<li >
						<a href="updatewallet.php"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>Update wallet</a>
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
                            Currently Issued
                        </h1>
                       
                    </div>
                </div>
				
	
                <!-- /.row -->
</div>
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
$query = "select borrows.id,duedt,borrows.bookid,issuedt,books.title from borrows,books where borrows.bookid=books.bookid";
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
            <th data-field="id">Book ID</th>
            <th data-field="name">Book Name</th>
            <th data-field="duedt">Due Date</th>
			<th data-field="issuedt">Issue Date</th>
			<th data-field="userid">User ID</th>
			
		</tr>
    </thead>
	<tbody>
	
	  <?php 
			while ($results = mysqli_fetch_assoc($qresult)){

				$duedt=$results['duedt'];
				$bookid=$results['bookid'];
				$title=$results['title'];
				$issuedt=$results['issuedt'];
				$uid=$results['id'];
 				echo"<tr>";
				echo "<td>".$bookid."</td>";
				echo "<td>".$title."</td>";
				echo "<td>".$duedt."</td>";
				echo"<td>".$issuedt."</td>";
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
    </div>
  </div>
</div>
