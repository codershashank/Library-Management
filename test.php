<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='iit';
$mysql_db='library';
$link=mysqli_connect('localhost','root','','library') or die('could not connect');
mysqli_select_db($link,$mysql_db);


if( isset($_POST['username']) && isset($_POST['password'])){
$username=$_POST['username'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];
$_SESSION['usertype']=$_POST['usertype'];
if(!empty($username)&&!empty($password)&&!empty($usertype)){
	if($usertype=="student"){
			$query_run=@mysqli_query($link,"select name,id from reader where name ='$username' and passkey ='$password'");
		if($query_run){
			$query_num_rows=@mysqli_num_rows($query_run);
			if($query_num_rows==0){
			echo 'invalid Username/Password!!';
			}
			else{
			$user=mysqli_fetch_assoc($query_run);
			$_SESSION['id']=$user['id'];
			$_SESSION['user']=$user['name'];
			$_SESSION['usertype']=$usertype;
			header('Location: loginpage1.php');
			}
		}
}
else if($usertype=="librarian"){
$query_run=@mysqli_query($link,"select name,id from librarian where name ='$username' and passkey ='$password'");
		if($query_run){
			$query_num_rows=@mysqli_num_rows($query_run);
			if($query_num_rows==0){
			echo 'invalid Username/Password!!';
			}
			else{
			$user=mysqli_fetch_assoc($query_run);
			$_SESSION['id']=$user['id'];
			$_SESSION['user']=$user['name'];
			$_SESSION['usertype']=$usertype;
			header('Location: loginpage2.php');
			}
		}
}
else if($usertype=="professor"){
$query_run=@mysqli_query($link,"select name,id from professors where name ='$username' and passkey ='$password'");
	if($query_run){
		$query_num_rows=@mysqli_num_rows($query_run);
		if($query_num_rows==0){
		echo 'invalid Username/Password!!';
		}
		else{
		$user=mysqli_fetch_assoc($query_run);
		$_SESSION['id']=$user['id'];
		$_SESSION['user']=$user['name'];
		$_SESSION['usertype']=$usertype;
		header('Location: loginpage3.php');
		}	
	}
}

//$query_run=@mysqli_query($link,"select username from users where username ='$username' and password ='$password'");
}
}
$link->close();
?>
<!DOCTYPE HTML>
<!--[if lt IE 7 ]> <html lang="en" class="ie ie6"> <![endif]--> 
<!--[if IE 7 ]>	<html lang="en" class="ie ie7"> <![endif]--> 
<!--[if IE 8 ]>	<html lang="en" class="ie ie8"> <![endif]--> 
<!--[if IE 9 ]>	<html lang="en" class="ie ie9"> <![endif]--> 
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Bibliotheque</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/jquery.vegas.min.css">
<link rel="stylesheet" href="bootstrap/css/animate.min.css">
  <link href="bootstrap/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="bootstrap/styles.css"> 

<!-- CUSTOM STYLES -->
<link rel="stylesheet" href="bootstrap/css/styles1.css">
<link rel="stylesheet" href="bootstrap/css/responsive.css">
<link rel="stylesheet" href="bootstrap/css/grayscale.css">
<link rel="stylesheet" href="bootstrap/css/fonts1.css">
<link rel="stylesheet" href="bootstrap/css/fonts2.css">

<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

<!-- JQUERY -->
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.vegas.min.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.scrollTo.min.js"></script>
<script src="bootstrap/js/wow.min.js"></script>
<script src="bootstrap/js/jquery.nav.js"></script>
<script src="bootstrap/js/jquery.knob.js"></script>
<script src="bootstrap/js/smoothscroll.js"></script>
<script src="bootstrap/js/jquery.vegas.min.js"></script>
  <script src="bootstrap/js/jquery.easing.min.js"></script>
  <script src="bootstrap/js/grayscale.js"></script>
<script>
$(function() {
  $.vegas('slideshow',{
    preload:true,
    backgrounds:[
    { src:'bootstrap/images/pic1.jpg',fade:3000, valign:'40%' },
    { src:'bootstrap/images/pic2.jpg' ,fade:3000},
    { src:'bootstrap/images/pic3.jpg' ,fade:3000},
	{ src:'bootstrap/images/pic4.jpg' ,fade:3000},
	{ src:'bootstrap/images/gift.jpg' ,fade:3000},
	{ src:'bootstrap/images/pic6.jpg' ,fade:3000},
	{ src:'bootstrap/images/pic7.jpg' ,fade:3000},
	{ src:'bootstrap/images/pic8.jpg' ,fade:3000}
  ]})('overlay', {
    src:'bootstrap/images/pic9.png',
	opacity:0.3
  })

});
</script>
<!--<style>
.navbar.navbar-inverse {
    background:rgba(13, 13, 13, 0.7);
}

</style>-->
</head>
<!--<body id="home">
<div class="wrapper">
       
        <nav class="navbar navbar-inverse navbar-fixed-top move-me" role="navigation">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Bibliotheque</a>
            </div>
			
			-->
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="bootstrap/images/logo.png" height="70px" width="70px"></img>  <span class="light">IIT </span>Indore
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">LOG IN</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Developers</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3 class="brand-heading">Bibliotheque</h3>
                        <p class="intro-text">An ideal web application on library automation<br></p>
                      
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About this Project</h2>
                <p>Bibliotheque, is designed to trumpet the inception of a new era in library management solution systems, providing an intricate, yet user friendly environment catering to the needs of the readers as well as the librarians, to utilise and manage the reading resources judiciously. </p>
                <p>This project is intended towards providing a viable professional solution for availing or disseminating library services smoothly and efficiently, in a time bound manner.</p>
                <p> The new automated system endeavours to provide better accessibility, security, efficiency and personalisation at the end user level, in medium/large scale organisations/library houses.</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
				<form action="main.php" method="POST" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<h3  style="color:white;">Get Started</h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="textinput" style="color:white;"><b> Username</b></label>
  <div class="col-md-2" style="padding-left:112px">
    <input id="textinput" name="username" type="text" placeholder="Enter Username" class="input-large">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="passwordinput"  style="color:white;">Password</label>
  <div class="col-md-2" style="padding-left:112px">
    <input id="passwordinput" name="password" type="password" placeholder="Enter Password" class="input-large">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-3 control-label" for="selectbasic"  style="color:white;">I am</label>
  <div class="col-md-6 controls">
    <select id="selectbasic" name="usertype" class="input-large">
      <option name="usertype">student</option>
      <option name="usertype">librarian</option>
      <option name="usertype">professor</option>
	  <option name="usertype">Other</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="singlebutton"></label>
  <div class="controls">
    <button value="Log In" type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>

				
				
				
				
                    <!--<h2>Download Grayscale</h2>
                    <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
                    <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>-->
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center" style="width:100%;margin-top:150px;">
	      <h3>THE INSANE DUO</h3>
        <div class="row">
		<div class="col-sm-6">
           <img src="bootstrap/images/sha.png" height="370px" width="310px"></img>
        </div>
		<div class="col-sm-6">
           <img src="bootstrap/images/hur.png" height="370px" width="310px"></img>
        </div>
		</div>
    </section>
    <!--./ GALLERY/PORTFOLIO SECTION END -->
   
						<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           
					
					
					
						
						
						
						
                    
					
            
				
            
						
						
						



</div>
	
<footer>
        <div class="container text-center" style="background:grey;width:100%;">
            <p>Copyright &copy; All rights reserved</p>
        </div>
    </footer>


</body>
</html>




