
	<?php 
	session_start();
	if(isset($_SESSION['user'])){
				;
				}
	else
	{
	header('Location:main.php');
	}
	
	if(isset($_POST["bookid"]) && !empty($_POST["bookid"])){
	$bookid=$_POST["bookid"];
	$id=$_SESSION["id"];
	
	}
	?>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/theme.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-theme.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/dashboard.css"/>
<link type="text/css" href="bootstrap/css/admin.css" rel="stylesheet"/>
<link type="text/css" href="bootstrap/css/search.css" rel="stylesheet"/>
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
	<script>
	function myfunction(){
	 document.getElementById("mypara").innerHTML = "Book issue successful!!";
       }	 
	</script>
	<head>
	<style>

	</style>
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
				if ($_SESSION['usertype']=='student')
				 {$con = mysqli_connect("localhost","root","","library");
				 $q = mysqli_query($con,"SELECT img FROM reader where name='$username'");
				 if (!$q)
				 {
					echo"<pre>ERROR:".mysqli_error($con)."</pre>";
				 }
				 $row = mysqli_fetch_array($q);
				 }
				else if($_SESSION['usertype']=='professor')
				 {
				 
				 $con = mysqli_connect("localhost","root","","library");
				 $q = mysqli_query($con,"SELECT img FROM professors where name='$username'");
				 if (!$q)
				 {
					echo"<pre>ERROR:".mysqli_error($con)."</pre>";
				 }
				 $row = mysqli_fetch_array($q);
				 }
				 
				else if($_SESSION['usertype']=='librarian')
				 {
				 
				 $con = mysqli_connect("localhost","root","","library");
				 $q = mysqli_query($con,"SELECT img FROM librarian where name='$username'");
				 if (!$q)
				 {
					echo"<pre>ERROR:".mysqli_error($con)."</pre>";
				 }
				 $row = mysqli_fetch_array($q);
				 }
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img width="20" height="20" src='mail.png'/> <b class="caret"></b></a>
					
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
                        <?php 
						//this php script determines the current user type accordingly the link is displayed in the nav bar
							if($_SESSION['usertype']=='librarian')
							{
							echo '<a href="loginpage2.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Current Issues</a>';
							} 
							else if($_SESSION['usertype']=='student')
							{
							echo '<a href="loginpage1.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>My Shelf</a>';
							}
							
							else if($_SESSION['usertype']=='professor')
							{
							echo '<a href="loginpage3.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>My Shelf</a>';
							}
						
						?>
                    </li>

					<li class="active">
                        <a href="search.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>  Search</a>
                    </li>
					                    <?php if($_SESSION['usertype']=='student'){?>
				<li>
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
					
					
					
					                    <?php } else if ($_SESSION['usertype']=='professor'){?>
										<li>
                        <a href="recommend.php"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Recommended</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Book Lost Declaration</a>
                    </li>
					
					<li>
                        <a href="#"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Library policy</a>
                    </li>
					
										
										<?php }?>
					
						</ul>
						</div>
						
						
                    
					
            
				
            
						
						
						
			
</nav>
</div>

	<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12" style="margin-left:250">
                        <h1 class="page-header">
                            Search Library 
                        </h1>
                       
                    </div>
                </div>
				
	
                <!-- /.row -->
			</div>
	</div>


<div class="container-fluid"> 
	<div class="row">
	<div class="col-lg-12" style="margin-left:50;">
	<form class="navbar-form pull-left" role="Search" action = "search.php" method = "post" >
	<div class="input-group">
	<div class="form-group" >
            	<label class="col-md-7 control-label" style ="margin-left:200;">Enter Keyword</label>
            	<div class="col-md-7" style="margin-left:200;">
			<input class="form-control" name="keyword" placeholder="Search" type="text" required/>
			<button type="submit" class="btn btn-primary" style="height:33" ><span class="glyphicon glyphicon-search"></span></button>
			<select name="category"class="form-control">
  <option name ="category">By Title</option>
  <option name ="category">By Author</option>
  <option name ="category">By Subject</option>
  <option name ="category">By Genre</option>
  <option name ="category">By Bookid</option>
  <option name ="category">By publisher</option>
			</select>
			</div>
			</div>
			</div>
	</div>
               
                  
              
    </div>
    </form>
	<div class="row" >
	<div class="col-md-7" style="margin-left:280">
	<?php	
	    
		require 'connect.php';
$id=$_SESSION['id'];

$query = "select count(bookid) from borrows where id='$id'";			//counts the number of books issued by a student
$qresult = mysqli_query($link,$query);


if(isset($_POST['bookid']) && !empty($_POST['bookid'])){
			$bookid=$_POST['bookid'];
			if ($_SESSION['usertype']=='student')
			{
			$query0="select numofcopies from books where bookid='$bookid'";
					$result0=mysqli_query($link,$query0);
					$qresult=mysqli_fetch_assoc($result0);
			if($qresult['numofcopies']>1){		
			
			$query1="insert into borrows (bookid,id,issuedt) values ('$bookid','$id',now())";
					$result=mysqli_query($link,$query1);
			}
			
			else
			{
				echo'Number of copies is less than 1';
			}
			}	
			else if ($_SESSION['usertype']=='professor')
			{
			$query0="select numofcopies from books where bookid='$bookid'";
					$result0=mysqli_query($link,$query0);
					$qresult=mysqli_fetch_assoc($result0);
			if($qresult['numofcopies']>0){		
			
			$query1="insert into profborrows (bookid,id,issuedt) values ('$bookid','$id',now())";
					$result=mysqli_query($link,$query1);
			}
			else
			{
				echo'Number of copies is less than 1';
			}
			}	
}
if(!$qresult)
{
	echo "Error: ".mysqli_error($link);
}
$result2 = mysqli_fetch_array($qresult);

if($result2[0]<=3)
	{			
			if(!empty($_POST["category"]))
		{
			
		$category=$_POST["category"];	
		if($category=="By Title")
		{ 
		$title=$_POST["keyword"];		// edit this for post method
		$stat="select * from books where title like '%$title%'";
		$result = mysqli_query($link,$stat);
		if(mysqli_num_rows($result)>0)
			{
			?>
			<table class="table table-striped"  style="width:100%; border:solid; ">
			<th style="height:45px">Book Id</th>
			<th>Title</th>
			<th>Genre</th>
			<th>Publisher</th>
			<th>Subject</th>
			<th>Author</th>
			<th>Available</th>
				<?php 
				while($row=mysqli_fetch_assoc($result))
				{
				?>
				<tr style="height:48px">
				<td> <?php echo $row["bookid"];?></td>
				<td><?php echo $row["title"];?></td>
				<td><?php echo $row["genre"];?></td>
				<td><?php echo $row["publisher"];?></td>
				<td><?php echo $row["subject"];?></td>
				<td><?php echo $row["author"];?></td>
				<td><?php echo $row["numofcopies"];?></td>
				<?php if ($row["numofcopies"]>1){ ?>
				<td><button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal">Quickissue</button></td>
				<?php } 
				else if($row["numofcopies"]<=1){
				?>
				<td><button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal">Claim</button></td>
				<?php }
				?>
				<?php
				}
				?>
				</table>
		<?php	}
		else
		echo "No results";
		}

		if ($category == "By Author")
		{
		$author=$_POST["keyword"];
		$stat="select * from books where author like'%$author%'";
		$result = mysqli_query($link,$stat);
		
		if(mysqli_num_rows($result)>0)
			{
			?>
			<table class="table table-striped"  style="width:100%; border:solid; ">
			<th style="height:45px">Book Id</th>
			<th>Title</th>
			<th>Genre</th>
			<th>Publisher</th>
			<th>Subject</th>
			<th>Author</th>
			<th>Available</th>
				<?php 
				while($row=mysqli_fetch_assoc($result))
				{
				?>
				<tr style="height:48px">
				<td> <?php echo $row["bookid"];?></td>
				<td><?php echo $row["title"];?></td>
				<td><?php echo $row["genre"];?></td>
				<td><?php echo $row["publisher"];?></td>
				<td><?php echo $row["subject"];?></td>
				<td><?php echo $row["author"];?></td>
				<td><?php echo $row["numofcopies"];?></td>
				<?php if ($row["numofcopies"]>1){ ?>
				<td><button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal">Quickissue</button></td>
				<?php } 
				else if($row["numofcopies"]<=1){
				?>
				<td><button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal">Claim</button></td>
				<?php }
				?>
				<?php
				}
				?>
				</table>
		<?php	}
		else
		echo "No results";
			}
			if($category=="By Subject")
		{
		$subject=$_POST["keyword"];		// edit this for post method
		$stat="select * from books where subject like '%$subject%'  and subject IS NOT NULL";
		$result =mysqli_query($link,$stat);
		if(mysqli_num_rows($result)>0)
			{
			?>
			<table class="table table-striped"  style="width:100%; border:solid; ">
			<th style="height:45px">Book Id</th>
			<th>Title</th>
			<th>Genre</th>
			<th>Publisher</th>
			<th>Subject</th>
			<th>Author</th>
			<th>Available</th>
				<?php 
				while($row=mysqli_fetch_assoc($result))
				{
				?>
				<tr style="height:48px">
				<td> <?php echo $row["bookid"];?></td>
				<td><?php echo $row["title"];?></td>
				<td><?php echo $row["genre"];?></td>
				<td><?php echo $row["publisher"];?></td>
				<td><?php echo $row["subject"];?></td>
				<td><?php echo $row["author"];?></td>
				<td><?php echo $row["numofcopies"];?></td>
				<?php if ($row["numofcopies"]>1){ ?>
				<td><button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal">Quickissue</button></td>
				<?php } 
				else if($row["numofcopies"]<=1){
				?>
				<td><button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal">Claim</button></td>
				<?php }
				?>
				<?php
				}
				?>
				</table>
		<?php	}
		else
		echo "No results";
			}

			if($category=="By Genre")
		{
			$genre=$_POST["keyword"];
			$stat="select * from books where genre like'%$genre%' and genre IS NOT NULL";
		$result = mysqli_query($link,$stat);
		if(mysqli_num_rows($result)>0)
			{
				?>
			<table class="table table-striped"  style="width:100%; border:solid; ">
			<th style="height:45px">Book Id</th>
			<th>Title</th>
			<th>Genre</th>
			<th>Publisher</th>
			<th>Subject</th>
			<th>Author</th>
			<th>Available</th>
				<?php 
				while($row=mysqli_fetch_assoc($result))
				{
				?>
				<tr style="height:48px">
				<td> <?php echo $row["bookid"];?></td>
				<td><?php echo $row["title"];?></td>
				<td><?php echo $row["genre"];?></td>
				<td><?php echo $row["publisher"];?></td>
				<td><?php echo $row["subject"];?></td>
				<td><?php echo $row["author"];?></td>
				<td><?php echo $row["numofcopies"];?></td>
				<?php if ($row["numofcopies"]>1){ ?>
				<td><button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal">Quickissue</button></td>
				<?php } 
				else if($row["numofcopies"]<=1){
				?>
				<td><button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal">Claim</button></td>
				<?php }
				?>
				<?php
				}
				?>
				</table>
		<?php	}
		else
		echo "No results";
			}

			if($category == "By Bookid")

		{
		$bookid=$_POST["keyword"];		// edit this for post method
		$stat="select * from books where bookid like'%$bookid%'";
		$result = mysqli_query($link,$stat);
		if(mysqli_num_rows($result)>0)
			{
				?>
			<table class="table table-striped"  style="width:100%; border:solid; ">
			<th style="height:45px">Book Id</th>
			<th>Title</th>
			<th>Genre</th>
			<th>Publisher</th>
			<th>Subject</th>
			<th>Author</th>
			<th>Available</th>
				<?php 
				while($row=mysqli_fetch_assoc($result))
				{
				?>
				<tr style="height:48px">
				<td> <?php echo $row["bookid"];?></td>
				<td><?php echo $row["title"];?></td>
				<td><?php echo $row["genre"];?></td>
				<td><?php echo $row["publisher"];?></td>
				<td><?php echo $row["subject"];?></td>
				<td><?php echo $row["author"];?></td>
				<td><?php echo $row["numofcopies"];?></td>
				<?php if ($row["numofcopies"]>1){ ?>
				<td><button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal">Quickissue</button></td>
				<?php } 
				else if($row["numofcopies"]<=1){
				?>
				<td><button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal">Claim</button></td>
				<?php }
				?>
				<?php
				}
				?>
				</table>
		<?php	}
		else
		echo "No results";
		}
		
			if($category == "By publisher")
		{
		$publisher=$_POST["keyword"];		// edit this for post method
		$stat="select * from books where publisher like'%$publisher%'";
		$result = mysqli_query($link,$stat);
		if(mysqli_num_rows($result)>0)
			{
				?>
			<table class="table table-striped"  style="width:100%; border:solid">
			<th style="height:45px">Book Id</th>
			<th>Title</th>
			<th>Genre</th>
			<th>Publisher</th>
			<th>Subject</th>
			<th>Author</th>
			<th>Available</th>
				<?php 
				while($row=mysqli_fetch_assoc($result))
				{
				?>
				<tr style="height:48px">
				<td> <?php echo $row["bookid"];?></td>
				<td><?php echo $row["title"];?></td>
				<td><?php echo $row["genre"];?></td>
				<td><?php echo $row["publisher"];?></td>
				<td><?php echo $row["subject"];?></td>
				<td><?php echo $row["author"];?></td>
				<td><?php echo $row["numofcopies"];?></td>
				<?php if ($row["numofcopies"]>1){ ?>
				<td><button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal">Quickissue</button></td>
				<?php } 
				else if($row["numofcopies"]<=1){
				?>
				<td><button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal">Claim</button></td>
				<?php }
				?>
				<?php
				}
				?>
				</table>
		<?php	}
		else
		echo "No results";
		}
		}

		?>
		</div>
	</div>
	
</div>
		
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Add a Book to your Shelf</h4>
      </div>
      <div class="modal-body">
	  <form role="form" action="search.php" method="POST">
	  <div class="form-group">
	  <label>Enter Book Id to confirm:</label>
      <input type="text" name="bookid" placeholder="Book Id" required></input>
      </div>	  
	  </div>
	    <div class="modal-footer">
		<p id="mypara"></p>
        <button type="button" class="btn btn-default" data-dismiss="modal">Dismiss</button>
        <button type="submit" class="btn btn-primary" onclick="myfunction()">Save changes</button>
      </div>
	  </form>
    </div>
  </div>
</div>          

<?php 
}
 else
	{
			if(!empty($_POST["category"]))
		{
			
		$category=$_POST["category"];	

		if($category=="By Title")
		{ 
		$title=$_POST["keyword"];		// edit this for post method
		$stat="select * from books where title like '%$title%'";
		$result = mysqli_query($link,$stat);
		if(mysqli_num_rows($result)>0)
			{
			?>
			<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Notice:  </strong>Issue limit exceeded.You cannot issue anymore books.
</div>
			<table class="table table-striped"  style="width:100%; border-style:solid;">
			<th style="height:45px">Book Id</th>
			<th>Title</th>
			<th>Genre</th>
			<th>Publisher</th>
			<th>Subject</th>
			<th>Author</th>
			<th>Available</th>
				<?php 
				while($row=mysqli_fetch_assoc($result))
				{
				?>
				<tr style="height:48px">
				<td> <?php echo $row["bookid"];?></td>
				<td><?php echo $row["title"];?></td>
				<td><?php echo $row["genre"];?></td>
				<td><?php echo $row["publisher"];?></td>
				<td><?php echo $row["subject"];?></td>
				<td><?php echo $row["author"];?></td>
				<td><?php echo $row["numofcopies"];?></td>
				<?php
				}
				?>
				</table>
		<?php	}
		else
		echo "No results";
			
		}
		if ($category == "By Author")
		{
		$author=$_POST["keyword"];
		$stat="select * from books where author like'%$author%'";
		$result = mysqli_query($link,$stat);
		if(mysqli_num_rows($result)>0)
			{
				?>
				<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Notice:  </strong>Issue limit exceeded.You cannot issue anymore books.
</div>
			<table class="table table-striped" class="table table-striped" class="table table-striped"  style="width:100%; border:solid; ">
			<th style="height:45px">Book Id</th>
			<th>Title</th>
			<th>Genre</th>
			<th>Publisher</th>
			<th>Subject</th>
			<th>Author</th>
			<th>Available</th>
				<?php 
				while($row=mysqli_fetch_assoc($result))
				{
				?>
				<tr style="height:48px">
				<td> <?php echo $row["bookid"];?></td>
				<td><?php echo $row["title"];?></td>
				<td><?php echo $row["genre"];?></td>
				<td><?php echo $row["publisher"];?></td>
				<td><?php echo $row["subject"];?></td>
				<td><?php echo $row["author"];?></td>
				<td><?php echo $row["numofcopies"];?></td>
				
				<?php
				}
				?>
				</table>
		<?php	}
		else
		echo "No results";
			}

			if($category=="By Subject")
		{
		$subject=$_POST["keyword"];		// edit this for post method
		$stat="select * from books where subject like '%$subject%'  and subject IS NOT NULL";
		$result =mysqli_query($link,$stat);
		if(mysqli_num_rows($result)>0)
			{
				?>
				<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Notice:  </strong>Issue limit exceeded.You cannot issue anymore books.
</div>
			<table class="table table-striped"  style="width:100%; border:solid; ">
			<th style="height:45px">Book Id</th>
			<th>Title</th>
			<th>Genre</th>
			<th>Publisher</th>
			<th>Subject</th>
			<th>Author</th>
			<th>Available</th>
				<?php 
				while($row=mysqli_fetch_assoc($result))
				{
				?>
				<tr style="height:48px">
				<td> <?php echo $row["bookid"];?></td>
				<td><?php echo $row["title"];?></td>
				<td><?php echo $row["genre"];?></td>
				<td><?php echo $row["publisher"];?></td>
				<td><?php echo $row["subject"];?></td>
				<td><?php echo $row["author"];?></td>
				<td><?php echo $row["numofcopies"];?></td>
				<?php
				}
				?>
				</table>
		<?php	}
		else
		echo "No results";
			}
			if($category=="By Genre")
		{
			$genre=$_POST["keyword"];
			$stat="select * from books where genre like'%$genre%' and genre IS NOT NULL";
		$result = mysqli_query($link,$stat);
		if(mysqli_num_rows($result)>0)
			{
				?>
				<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Notice:  </strong>Issue limit exceeded.You cannot issue anymore books.
</div>
			<table class="table table-striped"  style="width:100%; border:solid; ">
			<th style="height:45px">Book Id</th>
			<th>Title</th>
			<th>Genre</th>
			<th>Publisher</th>
			<th>Subject</th>
			<th>Author</th>
			<th>Available</th>
				<?php 
				while($row=mysqli_fetch_assoc($result))
				{
				?>
				<tr style="height:48px">
				<td> <?php echo $row["bookid"];?></td>
				<td><?php echo $row["title"];?></td>
				<td><?php echo $row["genre"];?></td>
				<td><?php echo $row["publisher"];?></td>
				<td><?php echo $row["subject"];?></td>
				<td><?php echo $row["author"];?></td>
				<td><?php echo $row["numofcopies"];?></td>
				<?php
				}
				?>
				</table>
		<?php	}
		else
		echo "No results";
			}
			
			if($category == "By Bookid")

		{
		$bookid=$_POST["keyword"];		// edit this for post method
		$stat="select * from books where bookid like'%$bookid%'";
		$result = mysqli_query($link,$stat);
		if(mysqli_num_rows($result)>0)
			{
				?>
				<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Notice:  </strong>Issue limit exceeded.You cannot issue anymore books.
</div>
			<table class="table table-striped"  style="width:100%; border:solid; ">
			<th style="height:45px">Book Id</th>
			<th>Title</th>
			<th>Genre</th>
			<th>Publisher</th>
			<th>Subject</th>
			<th>Author</th>
			<th>Available</th>
				<?php 
				while($row=mysqli_fetch_assoc($result))
				{
				?>
				<tr style="height:48px">
				<td> <?php echo $row["bookid"];?></td>
				<td><?php echo $row["title"];?></td>
				<td><?php echo $row["genre"];?></td>
				<td><?php echo $row["publisher"];?></td>
				<td><?php echo $row["subject"];?></td>
				<td><?php echo $row["author"];?></td>
				<td><?php echo $row["numofcopies"];?></td>
				<?php
				}
				?>
				</table>
		<?php	}
		else
		echo "No results";
			}
			
			if($category == "By publisher")
		{
		$publisher=$_POST["keyword"];		// edit this for post method
		$stat="select * from books where publisher like'%$publisher%'";
		$result = mysqli_query($link,$stat);
		if(mysqli_num_rows($result)>0)
			{
				?>
				<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Notice:  </strong>Issue limit exceeded.You cannot issue anymore books.
</div>
			<table class="table table-striped" style="width:100%; border:solid; ">
			<th style="height:45px">Book Id</th>
			<th>Title</th>
			<th>Genre</th>
			<th>Publisher</th>
			<th>Subject</th>
			<th>Author</th>
			<th>Available</th>
				<?php 
				while($row=mysqli_fetch_assoc($result))
				{
				?>
				<tr style="height:48px">
				<td> <?php echo $row["bookid"];?></td>
				<td><?php echo $row["title"];?></td>
				<td><?php echo $row["genre"];?></td>
				<td><?php echo $row["publisher"];?></td>
				<td><?php echo $row["subject"];?></td>
				<td><?php echo $row["author"];?></td>
				<td><?php echo $row["numofcopies"];?></td>
				<?php
				}
				?>
				</table>
		<?php	}
		else
		echo "No results";
			}	
			}
			}
		$link->close();
		?>
		</div>
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

