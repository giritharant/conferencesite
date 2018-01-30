<?php

$con=mysqli_connect("localhost","root","","bigdata");
//mysql_select_db("bigdata");
//$query = mysql_query("SELECT user_name FROM fields WHERE roll_no='$_POST['roll_no']'");
$query = "SELECT * FROM fields WHERE roll_no='$_POST[roll_no]'";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
$password=$row['user_password'];
$email=$_POST['user_email'];
$subject = "Retrieve Password";
$txt = "Your password is $password";
$headers = "From: csgiri95@gmail.com" . "\r\n" .

mail($email,$subject,$txt,$headers);

?>
<!DOCTYPE html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
		<meta charset="utf-8">
<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
<title>Welcome to our website</title>
  <script src="js/modernizr.custom.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/jquery.fancybox.css" rel="stylesheet">
		<link href="css/flickity.css" rel="stylesheet" >
		<link href="css/animate.css" rel="stylesheet">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" >
<link href="css/main.css" rel="stylesheet" type="text/css">
 <link href="css/settings.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
    <link href="css/style-revolution-slider.css" rel="stylesheet"> <!-- metronic revo slider styles -->

        <link rel="stylesheet" href="css/normalize.css">
        
        <link rel="stylesheet" href="css/style.css">
			
    </head>
    
     

    <body>
		<div class="container-fluid indexhead">
<div class="indexHeader">
  <div class="headerLeft"><h2>Big Data </h2> <!-- <img src="images/logo1.png"> --></div>
  <div class="headerRight clearfix">
    
  
    <div  class="navbar navbar-default  innerTitle" role="navigation">
      <div  class=" menu navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="  cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="bs-example-navbar-collapse-1">
          <div class="sidebar-offcanvas clearfix menu"  >
          <nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="login.php">Tutorials</a>    </li>
    <li><a href="login.php">People</a></li>
    <li><a href="login.php">Downloads </span></a>
	
	<ul> 
	<li> <a href="login.php">Survey Papers</a> </li>
		<li><a href="login.php"> Data Sets</a> </li>
		<li> <a href="login.php">Tools</a> </li>
		<li> <a href="login.php">Books </a></li>
		</ul></li>
              
              <li><a href="support.php">Support</span></a></li>
              <li><a href="contact.php">Contact</span></a></li>
    <div style='clear:both'></div>
   </ul>
</nav>
            <!--<ul class="nav navbar-nav navbar-right">
              <li><a class="active" href="index.html"><span>HOME</span></a></li>
              <li><a href="about-us.html">PRoFILE </span></a></li>
              <li><a href="services.html">PROJECT </span></a>
              
              </li>
              <li><a href="why-cool-curves.html">TOOLS </span></a></li>
              <li><a href="faq.html">CAREER</span></a></li>
              <li><a href="contact-us.php">TESTIMONIALS</span></a></li>
              <li><a href="contact-us.php">contact US</span></a></li>
            </ul>-->
          </div>
            </div>
      </div>
    </div>
  </div>
</div> </div>


<h1> Mail Sent Sucessfully!! <a href="login.php" style="text-decoration:none;">Log In </a> To Continue </h1>
