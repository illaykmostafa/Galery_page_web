<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Photography Website Template</title>
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
<body>
	
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
			Start area for Menu 
		============================== -->
        <nav id="main-navigation" class="nav-menu nav-menu-vertical nav-menu-right">
			<ul class="list-inline">
				<li ><a href="index.php">Home</a></li>
				<li><a href="Livre dor.php">Livre d'or</a></li>
				<li><a href="inscription.php">Inscription</a></li>
				<li class="current"><a href="galerie.php">Galerie</a></li>
				<li ><a href="session.php">Log in</a></li>
				<!--<li><a href="#latest-blog">Blog</a></li>
				<li><a href="#client-feedback">Testimonials</a></li>
				<li><a href="#contact">Contact</a></li>-->
			</ul>
		</nav>
		
		<!-- End of menu area -->
        
		

		

		


		<!-- ============== Start portfolio section ============== -->
<section id="portfolio" class="mtb100">
	<div class="container">
		<h3 class="section-title wow fadeInDown">Galerie</h3>
		
		<div class="clearfix"></div>

		<div class="portfolio-content">
			

			<div class="portfolio-items">

			<?php 
				$mysqli=new mysqli('localhost','zillaykmo','qrpztgds','zfl2-zillaykmo');

				if ($mysqli->connect_errno)
					{
						// Affichage d'un message d'erreur
						echo "Error: Problème de connexion à la BDD \n";
						echo "Errno: " . $mysqli->connect_errno . "\n";
						echo "Error: " . $mysqli->connect_error . "\n";
						// Arrêt du chargement de la page
						exit();}
						// Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
						if (!$mysqli->set_charset("utf8")) {
						printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
						exit();
						}
						//echo ("Connexion BDD réussie !");
						$requete=" SELECT oeu_code,oeu_Intitule,oeu_date,oeu_fichier_img FROM t_oeuvre_oeu ;";
						$res=$res=$mysqli->query($requete);
						if ($res == false) //Erreur lors de l’exécution de la requête
								{ // La requête a echoué
								echo "Error: La requête a echoué \n";
								echo "Errno: " . $mysqli->errno . "\n";
								echo "Error: " . $mysqli->error . "\n";
								exit(); }
										
								else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
								{
									
									//affichage des l'oeuvre
									while ($oeu = $res->fetch_assoc()){

										echo"<div class='col-lg-3 col-md-4 col-sm-6 portfolio-item festival wedding'>";
										echo"<figure class='content wow fadeIn' data-wow-delay='.15s'>";
										echo"<img src='image/mini_img/".$oeu['oeu_fichier_img']."' class='img-100p' alt='portfolio'>"; //image
										echo"<figcaption class='overflow-content-full'>";
										echo"<p class='icon horizontal-vertical-center'>";
										
										echo	"<a  href='oeuvre.php?num=".$oeu['oeu_code']."'><i class='fa fa-search-plus'></i></a>";  
										echo"</p>";
										echo"<div class='caption text-center'>";
										echo"<p class='title'>".$oeu['oeu_Intitule'] ."</p>";//intitule
										echo"<p class='info'>".$oeu['oeu_date']."</p>";//date
										echo"</div>";
										echo"</figcaption>";
										echo"</figure>";
										echo"</div>";
														




									}
}
			$mysqli->close();?>





























					












					</div>
				</div>
			</div> <!-- // container -->
		</section>
		<!-- ========= //End portfolio section ========= -->
		
		
		

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
  

 




</body>

</html>