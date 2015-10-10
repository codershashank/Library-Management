
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
	 document.getElementById("mypara").innerHTML = "Adding the book Now.";
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
                    <li class="active" >
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

            <div class="container-fluid" >

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <center>Currently Pending Book Requests</center>
                        </h1>
                       
                    </div>
                </div>
				
	
                <!-- /.row -->
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10">
<?php
	require 'connect.php';
	$id = $_SESSION['id'];
	echo '<strong>Your ID is:'.$id.'</strong><br>';
	$query = "select subject,title,author,publisher,genre from requestbook";
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
					
					<th data-field="name">Book Name</th>
					<th data-field="publisher">Publisher</th>
					<th data-field="author">Author</th>
					<th data-field="subject">Subject</th>
					<th data-field="genre">Genre</th>
				</tr>
			</thead>
			<tbody>
			
			  <?php 
					while ($results = mysqli_fetch_assoc($qresult)){
				
						$name=$results['title'];
						$publisher=$results['publisher'];
						$author=$results['author'];
						$subject=$results['subject'];
						$genre=$results['genre'];
						echo"<tr>";
						echo "<td>".$name."</td>";
						echo "<td>".$publisher."</td>";
						echo"<td>".$author."</td>";
						if(!empty($subject))
						echo"<td>".$subject."</td>";
						else
						{echo"<td>----</td>";}
						if(!empty($genre))
						{echo"<td>".$genre."</td>";}
						else
						{echo"<td>----</td>";}
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
	<div class="col-md-2 col-md-offset-4">
			<center><button  class="btn btn-success btn-info"  name="return" type="submit" data-toggle="modal" data-target="#myModal">&nbsp&nbsp&nbspWant to Add a New book ?&nbsp&nbsp&nbsp<br>Add Now!</button></center>
	</div>
	</div>
</div>


  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">What is going to be the book's...</h4>
      </div>
      <div class="modal-body">
	  <form role="form" action="addbook.php" method="POST">
	  <div class="form-group">
	  <label>Id:</label><br>
      <input type="text" name="id" placeholder="Id will be..." required></input>
	  <br><br><label>Title:</label><br>
      <input type="text" name="title" placeholder="Title ... " required></input>
	  <br><br><label>Author:</label><br>
      <input type="text" name="author" placeholder="Author is..."></input>
	  <br><br>
			<label class="inline">What is</label><select class="inline" name="type"class="form-control" style="width:100px">
			<option name ="type">Genre</option>
			<option name ="type">Subject</option>
			</select>
			<label class="inline">of the book</label>	
			<input type="text" name="typetext" placeholder="Genre or Subject is.."></input>
	  <br><br><label>Publisher:</label><br>
      <input type="text" name="publisher" placeholder="Publisher is.." required></input>
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
