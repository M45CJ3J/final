
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Intense Corporate Category Flat Bootstrap Responsive website Template | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Intense Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header id="home">
        <div class="container">
            <div class="header d-lg-flex justify-content-between align-items-center py-sm-3 py-2 px-sm-2 px-1">
                <!-- logo -->
                <div id="logo">
                    <h1><a href="index.html">Intense</a></h1>
                </div>
                <!-- //logo -->
                <!-- nav -->
                <div class="nav_w3ls ml-lg-5">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down"
                                        aria-hidden="true"></span>
                                </label>
                                <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="portfolio.html" class="drop-text">Portfolio</a></li>
                                    <li><a href="single.html" class="drop-text">Blog Post</a></li>
                                    <li><a href="index.html" class="drop-text">More</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                            <li class="nav-right-sty mt-lg-0 mt-sm-4 mt-3">
                <a href="logout.php" class="reqe-button text-uppercase">logout</a>
                <a href="yourprofile.php" class="reqe-button text-uppercase active"><?php echo($_SESSION['CUSTOMER']); ?></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
            </div>
        </div>
    </header>
    <!-- //header -->
    <!-- inner banner -->
    <div class="inner-banner-w3ls d-flex flex-column justify-content-center align-items-center">
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.html" class="m-0">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- register  -->
    
    
    <div class="modal-body align-w3">
   
    
        
    
    <?php 
   if(isset($_GET['sr'])){
	  include "lawyer.php";
	   
	   $lawyer = new lawyer();
	   $c = $lawyer->gets($_GET['sr']);
	  
	  echo("xx");
	  while( $rows = mysqli_fetch_assoc($c)){
	  
   
	   ?>
  
	   <form method="post" class="p-sm-3">
           <div class="form-group">
                <label for="recipient-name" class="col-form-label">OfficeUsername</label>
                <input type="text" disabled class="form-control" value="<?php echo($rows['OfficeUsername']); ?>"  name="name" id="recipient-name"
                    >
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">LawyerOfficeNAME</label>
                <input type="text" disabled class="form-control" value="<?php echo($rows['LawyerOfficeNAME']); ?>"  name="name" id="recipient-name"
                    >
            </div>
           
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">StartWorkingDate</label>
                <input type="text" class="form-control" disabled name="username" value="<?php echo($rows['StartWorkingDate']); ?>" id="recipient-name"
                    >
            </div>
           
      <div class="form-group">
                <label for="password1" class="col-form-label">City</label>
                <input type="text" class="form-control" disabled value="<?php echo($rows['City']); ?>"  name="city" id="password1"
                    >
            </div>
          
            <div class="form-group">
                <label for="password2" class="col-form-label">SyndicateNumber</label>
                <input type="text" class="form-control" disabled  value="<?php echo($rows['SyndicateNumber']); ?>" name="phone" id="password2"
                    >
            </div>
              <div class="form-group">
                <label for="recipient-email" class="col-form-label">LawyerEmail</label>
                <input type="email" class="form-control" disabled value="<?php echo($rows['LawyerEmail']); ?>" name="Email" id="recipient-email"
                    >
                  
                
         
               
                           </div>
          
            <div class="right-w3l">
                
            </div>
            

         </form>
           <?php
		    } 
   }
		   ?>
    </div>
    <!-- //register -->
    <!-- footer -->
    <footer class="footer py-md-5 pt-md-3 pb-sm-5">
        <div class="container">
            <div class="row p-sm-4 px-3 py-3">
                <div class="col-lg-4 footer-top mt-md-0 mt-sm-5">
                    <h2>
                        <a class="navbar-brand" href="index.html">
                            Intense
                        </a>
                    </h2>
                    <div class="fv3-contact mt-2">
                        <p>
                            <a href="mailto:example@email.com">info@example.com</a>
                        </p>
                    </div>
                    <div class="fv3-contact my-2">
                        <p>+456 123 7890</p>
                    </div>
                    <div class="fv3-contact">
                        <p>+90 nsequursu dsdesdc,
                            <br>xxx Street State 34789.</p>
                    </div>
                </div>
                <div class="col-lg-2  col-md-6 mt-lg-0 mt-4">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Navigation</h3>
                        <hr>
                        <ul class="list-w3pvtits">
                            <li>
                                <a href="index.html">
                                    Home
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="about.html">
                                    About Us
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="portfolio.html">
                                    Portfolio
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="single.html">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  col-md-6 mt-lg-0 mt-4">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Links</h3>
                        <hr>
                        <ul class="list-w3pvtits">
                            <li>
                                <a href="about.html">
                                    Our Mission
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="single.html">
                                    Latest posts
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="portfolio.html">
                                    Explore
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="contact.html">
                                    Find us
                                </a>
                            </li>
                            <li>
                                <a href="index.html">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mt-lg-0 mt-4">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Links</h3>
                        <hr>
                        <ul class="list-w3pvtits">
                            <li>
                                <a href="single.html">
                                    more
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="portfolio.html">
                                    our work
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="about.html">
                                    Explore
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="contact.html">
                                    contact us
                                </a>
                            </li>
                            <li>
                                <a href="index.html">
                                    references
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  col-md-6 mt-lg-0 mt-4">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Links</h3>
                        <hr>
                        <ul class="list-w3pvtits">
                            <li class="my-2">
                                <a href="portfolio.html">
                                    Explore
                                </a>
                            </li>
                            <li>
                                <a href="about.html">
                                    Our Mission
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="single.html">
                                    Latest posts
                                </a>
                            </li>

                            <li class="mb-2">
                                <a href="contact.html">
                                    Find us
                                </a>
                            </li>
                            <li>
                                <a href="index.html">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //footer bottom -->
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="cpy-right text-center">
        <p class="text-wh">© 2019 Intense. All rights reserved | Design by
            <a href="http://w3layouts.com"> W3layouts.</a>
        </p>
    </div>
    <!-- //copyright -->
    <!-- move top icon -->
    <a href="#home" class="move-top text-center">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </a>
    <!-- //move top icon -->

</body>

</html>