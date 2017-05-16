<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "phpproject";
	$conn = new mysqli($servername, $username, $password,$dbname);
	mysqli_set_charset($conn, "utf8");

	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "ADMIN")
	{
		echo "This page for Admin only!";
		exit();
	}	
	
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$result = $conn->query($strSQL);
	$row = $result->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Computer Enginerring - Chiangmai University</title>
  
  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- PLUGINS CSS STYLE -->
  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/owl.theme.css" rel="stylesheet">
  <link href="css/flexslider.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!--Revolution slider css-->
<link href="rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/rev-style.css" rel="stylesheet" type="text/css" media="screen">
<!--custom css for only medial template-->
<link href="css/medical.css" type="text/css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
  <div class="container">
    <div class="top-bar">
        <div class="row">
            <div class="col-md-7 hidden-xs hidden-sm">
                <span><i class="pe-7s-phone"></i> +01 1800 696 55</span>
            </div>
            <div class="col-md-5 text-right">
                <div class="top-bar-right">
                    <a href="#" class="social-icon-sm si-border-round si-facebook">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon-sm si-border-round si-twitter">
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon-sm si-border-round si-g-plus">
                        <i class="fa fa-youtube-play"></i>
                        <i class="fa fa-youtube-play"></i>
                    </a>
                    <a href="#" class="appointment">กดไปเถอะ ไม่มีอะไรหรอก</a>
                    <?=$row["Username"];?>
                      <a href="logout.php">Logout</a>
                </div>

            </div>
        </div>
    </div>
  </div>
  <!-- Static navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/cpehead-logo.png" alt="KAREE" width="180"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="facultyStaff.php">บุคลากร</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="services.php">Cancer care</a></li>
                        <li><a href="services.php">Rehabilitation Center</a></li>
                        <li><a href="services.php">Transplant Services</a></li>
                        <li><a href="services.php">Emergency Services</a></li>

                    </ul>
                </li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="studentIndex.php">Student</a></li>
                <li><a href="post.php">Post</a></li>
<!--                 <li><a href="medical-Blog.html">Blog</a></li> -->
                <li><a href="contact.php">Contact us</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
  </nav>
    <!-- MAIN SECTION -->
     <section class="mainContent full-width clearfix">
      <div class="container">
        <div class="row">
          	 <div class="col-xs-offset-1 col-xs-10">
             		<div class="panel panel-default formPanel">
                          <div class="panel-heading bg-color-1 border-color-1">
                            <h3 class="panel-title">Add teacher</h3>
                          </div>
                          <div class="panel-body">
                                
             			 </div>
            		</div>
             </div>
        </div>
          
      </div>
    </section>
<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 margin30">
                        <h3>About Medical</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <ul class="list-unstyled contact-details">
                            <li class="clearfix">
                                <i class="pe-7s-home"></i>
                                <p>
                                    124, Munna wali street, queens road, 302012
                                </p>
                            </li>
                            <li class="clearfix">
                                <i class="pe-7s-phone"></i>
                                <p>
                                    +01 1800 555 33
                                </p>
                            </li>
                            <li class="clearfix">
                                <i class="pe-7s-mail"></i>
                                <p>
                                    support@assanmedical.com
                                </p>
                            </li>
                        </ul>
                        <div class="socials-colored">
                            <a href="#" class="social-icon si-dark si-colored-facebook">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="social-icon si-dark si-colored-twitter">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon si-dark si-colored-google-plus">
                                <i class="fa fa-google-plus"></i>
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#" class="social-icon si-dark si-colored-google-plus">
                                <i class="fa fa-youtube-play"></i>
                                <i class="fa fa-youtube-play"></i>
                            </a>
                            <a href="#" class="social-icon si-dark si-colored-linkedin">
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div><!--col-->
                    <div class="col-md-3 margin30">
                        <h3>Quick links</h3>
                        <ul class="list-unstyled quick-links">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Faqs</a></li>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="#">make an appointment</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Privacy & policy</a></li>
                            <li><a href="#">Terms & conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 margin30">
                        <h3>latest news</h3>
                        <ul class="list-unstyled latest-news">
                            <li>
                                <a href="#">Sed do eiusmod tempor incididunt ut labore</a>
                                <em><i class="fa fa-comments-o"></i> 6 comments</em>
                            </li>
                            <li>
                                <a href="#">Lorem Ipsum is simply dummy text of the printing.</a>
                                <em><i class="fa fa-comments-o"></i> 6 comments</em>
                            </li>
                            <li>
                                <a href="#">Sed do eiusmod tempor incididunt ut labore</a>
                                <em><i class="fa fa-comments-o"></i> 6 comments</em>
                            </li>                          
                        </ul>
                    </div>
                    <div class="col-md-3 margin30">
                        <h3>Quick Contact</h3>
                        <form role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <button type="button" class="btn btn-theme-bg btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <span>Copyright &copy; 2015. All right reserved.</span>
                </div>
            </div>
        </footer>

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/pace.min.js" type="text/javascript"></script>
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="js/jquery.stellar.min.js" type="text/javascript"></script>
        <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="js/wow.min.js" type="text/javascript"></script>
        <script src="js/waypoints.min.js"></script>
        <!--revolution slider plugins-->
        <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
        <script src="js/jquery.imagesloaded.min.js" type="text/javascript"></script>
        <script src="js/isotope-custom.js" type="text/javascript"></script>
        <script src="rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/revolution-custom.js"></script>
        <script src="js/medical-custom.js" type="text/javascript"></script>
    </body>
</html>    

