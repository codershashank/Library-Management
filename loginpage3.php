
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
	function myfunction(){
	 document.getElementById("mypara").innerHTML = "Your request is pending with the Librarian.";
       }	 
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
 $q = mysqli_query($con,"SELECT img FROM professors where name='$username'");
 $row = mysqli_fetch_array($q);
				 echo "<img width='40' height='40' src='$row[0]'/>";
		$con->close();
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
                    <li class="active">
                        <a href="loginpage3.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> My Shelf</a>
                    </li>
                    <li>
                        <a href="search.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</a>
                    </li>
                    <li>
                        <a href="requestbook.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Request New Book</a>
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
                            My shelf 
                        </h1>
                       
                    </div>
                </div>
				
	
                <!-- /.row -->
</div>
</div>


	<div class="container-fluid">
	<div class="row">
	
	<?php
require 'connect.php';
$id=$_SESSION['id'];
echo "<strong>Your ID is :</strong>".$id."<br>";
$query = "select books.title, profborrows.bookid, profborrows.duedt from books,profborrows where books.bookid = profborrows.bookid and profborrows.id='$id'";
//$query = mysqli_real_escape_string ($link,$query);
$qresult = mysqli_query($link,$query);
if(!$qresult)
{
	echo "error 2: ".mysqli_error($link);
}
$i=0;

while ($results = mysqli_fetch_assoc($qresult)){

$duedt=$results['duedt'];
$bookid=$results['bookid'];
$title=$results['title'];

?>
	<div class="col-md-3" style=" margin-left:20; background-image:url('books.jpg'); background-position:bottom left; height:200;width:200;">
	    <p style="color:white;">
	  <?php  echo $bookid."<br>".$title."<br>".$duedt;?>
		</p>
		<button class="btn btn-primary btn-lg" name="return" type="submit" data-toggle="modal" data-target="#myModal">Return Now!</button>
		<form action="reissue.php" method="post">
		<button class="btn btn-primary btn-lg" name="reissue" type="submit">Reissue</button>
		</form>
	</div>
	<?php $i++; } ?>
	
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Do you really want to return?</h4>
      </div>
      <div class="modal-body">
	  <form role="form" action="loginpage1.php" method="POST">
	  <div class="form-group">
	  <label>Enter Book Id to confirm:</label>
      <input type="text" name="bookid" placeholder="Book Id"></input>
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


