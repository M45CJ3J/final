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
    <title>Intense Corporate Category Flat Bootstrap Responsive website Template | Home :: w3layouts</title>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
                            <li><a href="index.html" class="active">Home</a></li>
                            <!--<li><a href="about.html">About</a></li>-->
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
                            <li><a href="contact.php">Get an Appointment</a></li>
                            <li class="nav-right-sty mt-lg-0 mt-sm-4 mt-3">
                                <a href="logout.php" class="reqe-button text-uppercase">Logout</a>
                                <a href="yourprofile.php" class="reqe-button text-uppercase"> 
                                 <?php echo("welecome: ".$_SESSION['CUSTOMER']);?> </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
            </div>
        </div>
    </header>
    <!-- //header -->

    <!-- banner -->
    <section class="banner">
        <!-- banner text -->
        
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/a1.jpg" class="d-block w-100" alt="..." width="auto" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/a2.jpg" class="d-block w-100" alt="..." width="auto" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/a3.jpg" class="d-block w-100" alt="..." width="auto" height="500">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        <!-- //banner text -->
        <!-- banner-bottom -->
        <div class="banner-bottom-w3ls">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-6">
                        <div class="bb-img">
                            <img src="images/a2.jpg" class="img-fluid img-thumbnail" alt="" />
                            <h3>caption goes here</h3>
                        </div>
                    </div>
                    <div class="col-sm-4 col-6">
                        <div class="bb-img">
                            <img src="images/a1.jpg" class="img-fluid img-thumbnail" alt="" />
                            <h3>caption goes here</h3>
                        </div>
                    </div>
                    <div class="col-sm-4 col-6 mx-auto mt-sm-0 mt-4">
                        <div class="bb-img">
                            <img src="images/a3.jpg" class="img-fluid img-thumbnail" alt="" />
                            <h3>caption goes here</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //banner-bottom -->
    </section>
    <!-- //banner -->
    <!-- about-->
    <section class="single_grid_w3_main align-w3-abt" id="about">
        <div class="container">
            <div class="wthree_pvt_title text-center">
                <h4 class="w3pvt-title">Superior Services</h4>
                <p class="sub-title">Subheadings stand out because they are like mini titles. They make your post stand
                    out and
                    make it more readable.</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="abt-grid">
                        <div class="row">
                            <div class="col-3">
                                <div class="abt-icon">
                                    <span class="fa fa-ravelry"></span>
                                </div>
                            </div>
                      
                <div class="col-lg-4 my-lg-0 my-4">
                    <div class="abt-grid">
                        <div class="row">
                            <div class="col-3">

                            </div>
                            <div class="col-9">
                                <div class="abt-txt">
                                     
                                     
                                    <p>search</p>
                                    <form method="post">
   <input type="search" name="srch" style="width:500px; margin:auto; height:50px; border-radius:5px;" />
   <button style="width:100px; height:50px"><a href="<?php echo("search.php?sr=".$_POST['srch']);?>" >to search </a> </button>
    
    
    
    
    
            </form>
            
            
            
                                </div>
             
                            </div>
                        </div>
                    </div>
                </div>
                           <div class="d-flex justify-content-center">
             
            </div>
            
        </div>
    </section>
    <!-- //about -->
    <!-- services -->
    <section class="bg-services position-relative align-w3" id="services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-bg-color">
                        <div class="wthree_pvt_title mb-3">
                            <h4 class="w3pvt-title">what we provide
                            </h4>
                            <span class="sub-title">add your caption here</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6 service-title my-4">
                                <h4 class="home-title text-theme">Sub heading</h4>
                                <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                    tenetur yua.
                                </p>
                            </div>
                            <div class="col-md-6 service-title my-md-4">
                                <h4 class="home-title text-theme">Sub heading</h4>
                                <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                    tenetur ap.
                                </p>
                            </div>
                            <div class="col-md-6 service-title mt-4">
                                <h4 class="home-title text-theme">Sub heading</h4>
                                <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                    tenetur ar.
                                </p>
                            </div>
                            <div class="col-md-6 service-title mt-4">
                                <h4 class="home-title text-theme">Sub heading</h4>
                                <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                    tenetur as.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <a href="about.html" class="btn w3ls-btn">view more</a>
                        </div>
                    </div>

                </div>
                <div class="offset-lg-2"></div>
            </div>
        </div>
    </section>
    <!-- //services -->

    <!-- Portfolio -->
    <div class="wthree_pvtits-services align-w3" id="portfolio">
        <div class="container">
            <div class="wthree_pvt_title text-center">
                <h4 class="w3pvt-title">Portfolio
                </h4>
                <p class="sub-title">Subheadings stand out because they are like mini titles. They make your post stand
                    out and
                    make it more readable.</p>
            </div>
            <ul class="demo row">
                
                <?php
                  include_once "lawyer.php";
								   
								   $jj = new lawyer;
								  $rr = $jj->RUNSearch("select  * from lawyers ");
								   
								   while($rows = mysqli_fetch_assoc($rr))
   {
                ?>    
                <li class="col-lg-4">          	
                    <div class="img-grid">
                        <div class="Portfolio-grid1">
                    
                        <!--    <a href="#gal1">
                            
                                <img src="images/g1.jpg" alt=" " class="img-fluid" />
                            </a>-->
                        </div>
                        <div class="port-desc text-center">
                        <img src="pnel/lw/<?php echo($rows['OfficeUsername']); ?>.jpg" width="147" height="100"  />
                        
                            <h6 class="main-title-w3pvt text-center"><?php echo("Name: ".$rows['LawyerOfficeNAME']); ?></h6>
                          
                            <p><?php 
							 echo("Start working date:".$rows['StartWorkingDate']); ?> </p>
                              <p><?php 
							 echo("username:".$rows['OfficeUsername']); ?> </p>
                             <p><?php 
							
							 echo("location:".$rows['City']); ?> </p>
                              <p><?php 
							 
							  echo("SyndicateNumber:".$rows['SyndicateNumber']); ?> </p>
                             
                                <p><?php 
								
								echo("LawyerEmail:".$rows['LawyerEmail']); ?> </p> 
                                
                                <button><a href="<?php echo("yourprofile lw.php?lw=".$rows['OfficeUsername']);?>" >to his profile </a> </button>                        
                        </div>
                    </div>
                 <?php } ?> 
                  
                  
                </li>
               
                </ul>
                 <!--
                <li class="col-lg-4">
                
                
                
                
                    <div class="img-grid">
                        <div class="Portfolio-grid1">
                            <a href="#gal2">
                                <img src="images/g2.jpg" alt=" " class="img-fluid" />
                            </a>
                        </div>
                        <div class="port-desc text-center">
                            <h6 class="main-title-w3pvt text-center">Some Description</h6>
                            <p> Lorem ipsum dolor sit amet,Stet clita kasd gubergren, sed diam voluptua. sed
                                diam
                                nonumy eirmod tempor invidunt ut.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4">
                    <div class="img-grid">
                        <div class="Portfolio-grid1">
                            <a href="#gal3">
                                <img src="images/g3.jpg" alt=" " class="img-fluid" />
                            </a>
                        </div>
                        <div class="port-desc text-center">
                            <h6 class="main-title-w3pvt text-center">Some Description</h6>
                            <p> Lorem ipsum dolor sit amet,Stet clita kasd gubergren, sed diam voluptua. sed
                                diam
                                nonumy eirmod tempor invidunt ut.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4">
                    <div class="img-grid">
                        <div class="Portfolio-grid1">
                            <a href="#gal4">
                                <img src="images/g4.jpg" alt=" " class="img-fluid" />
                            </a>
                        </div>
                        <div class="port-desc text-center">
                            <h6 class="main-title-w3pvt text-center">Some Description</h6>
                            <p> Lorem ipsum dolor sit amet,Stet clita kasd gubergren, sed diam voluptua. sed
                                diam
                                nonumy eirmod tempor invidunt ut.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4">
                    <div class="img-grid">
                        <div class="Portfolio-grid1">
                            <a href="#gal5">
                                <img src="images/g5.jpg" alt=" " class="img-fluid" />
                            </a>
                        </div>
                        <div class="port-desc text-center">
                            <h6 class="main-title-w3pvt text-center">Some Description</h6>
                            <p> Lorem ipsum dolor sit amet,Stet clita kasd gubergren, sed diam voluptua. sed
                                diam
                                nonumy eirmod tempor invidunt ut.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4">
                    <div class="img-grid">
                        <div class="Portfolio-grid1">
                            <a href="#gal6">
                                <img src="images/g6.jpg" alt=" " class="img-fluid" />
                            </a>
                        </div>
                        <div class="port-desc text-center">
                            <h6 class="main-title-w3pvt text-center">Some Description</h6>
                            <p> Lorem ipsum dolor sit amet,Stet clita kasd gubergren, sed diam voluptua. sed
                                diam
                                nonumy eirmod tempor invidunt ut.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
            
            
            -->
            <div class="d-flex justify-content-center">
                <a href="login.php" class="btn w3ls-btn">view more</a>
            </div>
            <!-- popup-->
            <div id="gal1" class="popup-effect animate">
                <div class="popup">
                    <img src="images/g1.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int.
                        placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal2" class="popup-effect animate">
                <div class="popup">
                    <img src="images/g2.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int.
                        placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal3" class="popup-effect animate">
                <div class="popup">
                    <img src="images/g3.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int.
                        placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup3 -->
            <!-- popup-->
            <div id="gal4" class="popup-effect animate">
                <div class="popup">
                    <img src="images/g4.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int.
                        placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal5" class="popup-effect animate">
                <div class="popup">
                    <img src="images/g5.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int.
                        placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal6" class="popup-effect animate">
                <div class="popup">
                    <img src="images/g6.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int.
                        placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
        </div>
    </div>
    <!-- //Portfolio -->

    <!-- slide -->
    <section class="wthree-slie-btm py-lg-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slide-banner pl-0">
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-4">
                    <div class="container">
                        <div class="wthree_pvt_title">
                            <h4 class="w3pvt-title">creative solutions
                            </h4>
                            <span class="sub-title">add your caption here</span>
                        </div>
                        <div class="row flex-column">
                            <div class="abt-grid">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="abt-icon">
                                            <span class="fa fa-ravelry"></span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="abt-txt ml-0">
                                            <h4>sanctus takimata </h4>
                                            <p>Lo sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="abt-grid mt-4 pt-lg-2">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="abt-icon">
                                            <span class="fa fa-laptop"></span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="abt-txt ml-0">
                                            <h4>takimata sanctus</h4>
                                            <p>Lo sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <a href="about.html" class="btn w3ls-btn">view more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slide -->
    <section class="wthree-slie-btm py-lg-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slide-banner pl-0">
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-4">
                    <div class="container">
                        <div class="wthree_pvt_title">
                            <h4 class="w3pvt-title">creative solutions
                            </h4>
                            <span class="sub-title">add your caption here</span>
                        </div>
                        <div class="row flex-column">
                            <div class="abt-grid">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="abt-icon">
                                            <span class="fa fa-ravelry"></span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="abt-txt ml-0">
                                            <h4>sanctus takimata </h4>
                                            <p>Lo sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="abt-grid mt-4 pt-lg-2">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="abt-icon">
                                            <span class="fa fa-laptop"></span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="abt-txt ml-0">
                                            <h4>takimata sanctus</h4>
                                            <p>Lo sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <a href="about.html" class="btn w3ls-btn">view more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //slide -->
    <!-- blog -->
    <section class="blog_w3ls align-w3" id="posts">
        <div class="container">
            <div class="wthree_pvt_title tex t-center">
                <h4 class="w3pvt-title">latest posts
                </h4>
                <p class="sub-title">Subheadings stand out because they are like mini titles. They make your post stand
                    out and
                    make it more readable.</p>
            </div>
            <div class="row space-sec">
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-sm-0 mt-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="single.html">
                                <img class="card-img-bottom" src="images/g1.jpg" alt="Card image cap">
                                <span class="post-icon">blog post</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="blog-title card-title font-weight-bold">
                                <a href="single.html">Cras ultricies ligula sed.</a>
                            </h5>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                            <a href="single.html" class="blog_link">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-md-0  mt-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="single.html">
                                <img class="card-img-bottom" src="images/g2.jpg" alt="Card image cap">
                                <span class="post-icon">blog post</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="blog-title card-title font-weight-bold">
                                <a href="single.html">magna porta au blandita.</a>
                            </h5>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                            <a href="single.html" class="blog_link">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 mx-auto blog-end">
                    <div class="card">
                        <div class="card-header p-0  position-relative">
                            <a href="single.html">
                                <img class="card-img-bottom" src="images/g3.jpg" alt="Card image cap">
                                <span class="post-icon">blog post</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="blog-title card-title font-weight-bold">
                                <a href="single.html">Cras ultricies ligula sed.</a>
                            </h5>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                            <a href="single.html" class="blog_link">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
            </div>
        </div>
    </section>
    <!-- //blog -->
    <!-- footer -->
    <footer class="footer py-md-5 pt-md-3 pb-sm-5">
        <div class="container">
            <div class="row p-sm-4 px-3 py-3">
                <div class="col-lg-4 footer-top mt-md-0 mt-sm-5">
                    <h2>
                        <a class="navbar-brand" href="indexafter.php">
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
                                <a href="indexafter.php">
                                    Home
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="about.php">
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
                                <a href="contact.php">
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
                                <a href="deleteacco.php">
                                    Deactivation
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
        <p class="text-bl">© 2019 Intense. All rights reserved | Design by
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