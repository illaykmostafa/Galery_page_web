<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Galerie Sculptures </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A free responsive photography html website template by Frittt Templates">
  <meta name="author" content="FritttTemplates">
  
  <!-- FAVICON -->
  <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="img/png" href="favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="img/png" href="favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="img/png" href="favicons/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="img/png" href="favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="favicons/manifest.json">
  <link rel="shortcut icon" href="favicons/favicon.ico">
  <meta name="msapplication-config" content="favicons/browserconfig.xml">
  
  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" href="css/jPushMenu.css">
  <link rel="stylesheet" href="css/lightbox.css">
  <link rel="stylesheet" href="css/main.css">

 <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

</head> <!-- head -->
<body >
<!-- ============== start wrapper  ============== -->
<div id="wrapper">
		<!-- main-nav -->
		<div class="main-nav">
			<div class="logo-left">
				<a data-scroll href="#home">
					<img src="img/logo2.png" alt="logo">
				</a>
			</div>
			<div class="menu-button toggle-menu menu-right push-body">
				<button><i class="fa fa-bars"></i></button>
			</div>
		</div> <!-- //end main-nav -->

		<!--=========================



	=========================
			Start area for Menu 
		============================== -->
		<nav id="main-navigation" class="nav-menu nav-menu-vertical nav-menu-right">
			<ul class="list-inline">
				<li ><a href="index.php">Home</a></li>
				<li><a href="Livre dor.php">Livre d'or</a></li>
				<li ><a href="inscription.php">Inscription</a></li>
				<li><a href="galerie.php">Galerie</a></li>
				<li class="current"><a href="session.php">Log in</a></li>
			<!--	<li><a href="#latest-blog">Blog</a></li>
				<li><a href="#client-feedback">Testimonials</a></li>
				<li><a href="#contact">Contact</a></li>-->
			</ul>
		</nav>
		
		<!-- End of menu area -->
	  <style>
    .txt {color: #F0394C;}
    </style>
		

		

		<!-- ============== inscription ============== -->
		<section id="contact" >
			<div class="map-content">
				<div id="gmap">
				</div>
			</div>
			<div class="color-overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-offset-2 form-content ptb100">
							<h3 class="section-title wow fadeInDown">SESSION</h3>
							
							<div class="clearfix"></div>
							<form action="session_action.php" method="post" class="form wow fadeIn" data-wow-delay=".25s">
           <span class=txt> 	Pseudo:</span>  <input type="text" class="form-control" placeholder="Votre pseudo" name="pseudo">
           <span class=txt>   Mot de passe:</span><input type="password" class="form-control" placeholder="Votre mot de passe" name="mdp" id="input">
                <input type="checkbox" onclick="myFunction()"><span class=txt>Show Password</span> <br> 
                
								
								<p class="btn-block btn btn-submit text-uppercase" > <input type="submit" value="Valider"></p>
                <br> 
                <br> 
                <br> 
                <br> 
                <br> 
                <br> 
                <br> 
                <br> 

                

								<!--<a class="btn-block btn btn-submit text-uppercase">Valider</a> -->
							</form>
						</div>
					</div> <!-- //row -->
				</div> <!-- //container -->
			</div>
		</section>
		<!-- ========= //End contact section ========= -->
  























		<!-- ============== Start footer ============== -->
		
	</div> <!-- //end wrapper -->

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <!-- animation effects -->
  <script src="js/wow.min.js"></script>
  <!-- count-down -->
  <script src="js/jquery.inview.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <!-- content slider -->
  <script src="js/jquery.bxslider.min.js"></script>
  
  <!-- pushmenu -->
  <script src="js/jPushMenu.js"></script>
  <!-- smooth navigation -->
  <script src="js/mousescroll.js"></script>
  <script src="js/jquery.nav.js"></script>
  <!-- filter portfolio & lightbox -->
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/lightbox.min.js"></script>
  <!-- smooth scrool -->
  <script src="js/smoothscroll.js"></script>
  <!-- custom js -->
  <script src="js/app.js"></script>
  <script> function myFunction() {
  var x = document.getElementById("input");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}  </script>
<script> function myFunction2() {
  var x = document.getElementById("input2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}  </script>

  
</body>

</html>