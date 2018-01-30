<?php
	session_start();
	if(isset($_SESSION['u_name']))
	{
		
		header("location:index2.php");
	}

?>

<!doctype html>
<html>
<head>
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
    
  <!--Mobile nav -->
  		
<!--Mobile nav -->
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
    <li><a href='#'>Home</a></li>
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

<!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-40">
      <div class="revolution-slider">
        <div class="fullwidthabnner">
          <ul id="revolutionul">
		  
		  
			
			
            <!-- THE NEW SLIDE -->
            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" >
              <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
              <img   src="images/banner1.jpg" alt="" style="height:350px;">
              
           <div class="caption lft slide_item_left bannerTitle"
                data-x="380"
                data-y="100"
                data-speed="400"
                data-start="1500"
                data-easing="easeOutExpo">
              <br>               Do you know that Big Data

<br><span class="slide_title_white_bold">If you want click here...,</span>
              </div>
               
              <a class="caption lft btn dark slide_btn slide_item_left" href="registration.html"
                data-x="800"
                data-y="230"
                data-speed="400"
                data-start="3000"
                data-easing="easeOutExpo">
                Sign Up
              </a> 

 <a class="caption lft btn dark slide_btn slide_item_left" href="login.php"
                data-x="680"
                data-y="230"
                data-speed="400"
                data-start="3000"
                data-easing="easeOutExpo" onclick="sigin()">
                Sign In
              </a> 
                
               
            </li>    

        <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" >
              <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
              <img   src="images/banner2.jpg" alt="" style="height:350px;">
              
           <div class="caption lft slide_item_left bannerTitle"
                data-x="680"
                data-y="100"
                data-speed="400"
                data-start="1500"
                data-easing="easeOutExpo">
               Big data <br>
analysis
<br><span class="slide_title_white_bold"> big data.</span>
              </div>
               
              <a class="caption lft btn dark slide_btn slide_item_left" href="registration.html"
                data-x="800"
                data-y="230"
                data-speed="400"
                data-start="3000"
                data-easing="easeOutExpo">
                 Sign Up
              </a>
 
 <a class="caption lft btn dark slide_btn slide_item_left" href="login.php"
                data-x="680"
                data-y="230"
                data-speed="400"
                data-start="3000"
                data-easing="easeOutExpo">
                Sign In
              </a> 
                
               
            </li>

            <!-- Third SLIDE -->
            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" >
              <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
               <img   src="images/banner3.jpg" alt="" style="height:350px;">
              
              <div class="caption lft slide_item_left bannerTitle"
                data-x="0"
                data-y="130"
                data-speed="400"
                data-start="1500"
                data-easing="easeOutExpo">
                
                Big data
 <span class="slide_title_white_bold">analysis</span>
              </div>
              
               <a class="caption lft btn dark slide_btn slide_item_left" href="registration.html"
                data-x="200"
                data-y="230"
                data-speed="400"
                data-start="3000"
                data-easing="easeOutExpo">
                Sign Up
              </a>
                <a class="caption lft btn dark slide_btn slide_item_left" href="login.php"
                data-x="80"
                data-y="230"
                data-speed="400"
                data-start="3000"
                data-easing="easeOutExpo">
                Sign In
              </a> 
            </li>
                   
                   
               
                        
                        
                       
                        
        
                </ul>
               
            </div>
        </div>
    </div>
    <!-- END SLIDER -->
    
  
					
					<div class="container indexBottom">
				<div class="row">
					<div class="col-md-12">

						<div class="col-md-4 feature-1 wp2 boxcontent">
							<div class="feature-icon">
								<i> </i>
							</div>
							<div class="feature-content">
								<h1>Big Data Analytics</h1>
								<p>Built using HTML5/CSS3 and jQuery, and built using one of the world's most powerful CSS frameworks available, Bootstrap.</p>
								<a href="#" class="read-more-btn">Read More <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
						<div class="col-md-4 feature-2 wp2 delay-05s boxcontent">
							<div class="feature-icon">
								<i class="fa fa-desktop"></i>
							</div>
							<div class="feature-content">
								<h1>Cloud Computing</h1>
								<p>Perfect if you run your own start-up, product or service. Boxify can showcase your business converting your visits to income.</p>
								<a href="#" class="read-more-btn">Read More <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
						<div class="col-md-4 feature-3 wp2 delay-1s boxcontent">
							<div class="feature-icon">
								<i> </i>
							</div>
							<div class="feature-content">
								<h1>Big Data Security</h1>
								<p>As aways, download Boxify for free exclusively from Codrops. If you love Boxify and want to thank me, simply <a href="http://peterfinlan.com/">buy me a beer</a>. </p>
								<a href="#" class="read-more-btn">Read More <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>

					</div>
				</div>
			</div>

<div class="container-fluid modal-footer p0 footerOut">
    <div class="footerLeft">
      
      <div class="footerRightBootom">© 2015. All rights reserved</div>
    </div>
    <div class="footerRight">Designed by V</div>
  </div>

<script src="js/jquery.min.js" type="text/javascript"></script>
          
  <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
   
  <!-- BEGIN RevolutionSlider -->  
   <script src="js/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src="js/jquery.themepunch.revolution.min.js" type="text/javascript"></script> 
    <script src="js/jquery.themepunch.tools.min.js" type="text/javascript"></script> 
    <script src="js/revo-slider-init.js" type="text/javascript"></script>
    <!-- END RevolutionSlider -->
    
      <!-- lava Menu End --> 
    <script src="js/Lava-lamp-js.js" type='text/javascript'></script>
       <!-- lava Menu End --> 
       
        <!--Mobile nav -->
<script src="js/jPushMenu.js"></script>
<script type="text/javascript">
      //<![CDATA[
      $(document).ready(function(){
        $('.toggle-menu').jPushMenu({closeOnClickLink: false});
        $('.dropdown-toggle').dropdown();
      });
      //]]>
    </script>
<!--Mobile nav -->

<!--Dropdown menu--> 
<script src="js/bootstrap1.min.js"></script> 
<script type="text/javascript" src="js/jquery.smartmenus.js"></script> 
<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
<!--Dropdown menu-->
    
    

    <script src="js/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            //Layout.init();    
            Layout.initOWL();
            RevosliderInit.initRevoSlider();
           // Layout.initTwitter();
           // Metronic.init();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
   
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   		<script src="js/min/toucheffects-min.js"></script>
		<script src="js/retina.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/min/scripts-min.js"></script>
		
		<!-- End 3 box --> 

</body>

</html>
