<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sculptures Website </title>
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
				<li class="current"><a href="#home">Home</a></li>
				<li><a href="Livre dor.php">Livre d'or</a></li>
				<li><a href="inscription.php">Inscription</a></li>
				<li><a href="galerie.php">Galerie</a></li>
				<li ><a href="session.php">Log in</a></li>
				<!--<li><a href="#latest-blog">Blog</a></li>
				<li><a href="#client-feedback">Testimonials</a></li>
				<li><a href="#contact">Contact</a></li>-->
			</ul>
		</nav>
		
		<!-- End of menu area -->


		<!-- ============== start home section  ============== -->
		<section id="home">
			<div id="home-slider" class="carousel slide in" data-ride="carousel">
			  <!-- Indicators -->
			<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#home-slider"></li>
				<li data-slide-to="1" data-target="#home-slider" class=""></li>
				<li data-slide-to="2" data-target="#home-slider" class=""></li>
			</ol>

		      <div class="carousel-inner">
		        <div class="item active" style="background-image: url(img/slider/01.jpg)">
		        	<div class="col-sm-offset-1 caption caption-wide">
		        		<h1 class="main-title wow fadeInUp" data-wow-delay=".25s">Sculptures <br/>website</h1>

		        		
		        	</div>
		        </div><!-- //item -->
		        <div class="item" style="background-image: url(img/slider/02.jpg)">
		        	<div class="col-sm-offset-1 caption caption-wide">
		        		<h1 class="main-title wow fadeInUp" data-wow-delay=".25s">Voir  <br/> Notre Page </h1>
		        		
		        	</div>
		        </div><!-- //item -->
		        <div class="item" style="background-image: url(img/slider/03.jpg)">
		          <div class="col-sm-offset-1 caption">
		        		<h1 class="main-title wow fadeInUp" data-wow-delay=".25s">Laisser<br/>un commentaire</h1>
		        		<p class="sub-title wow fadeInUp" data-wow-delay=".55s">:)</p>
		        		
		        	</div>
		        </div><!-- //item -->
		      </div>
		    </div>
		</section>
		<!-- ========= //End home section ========= -->
		

<style>
	p{
	color:white;	
    text-align:center;
    font-size: 150%
    }
	h3{
		color:white;
	}
	.ctr{
		text-align:center;
	}
</style>


		<!-- ============== Start courses section ============== -->
		<section id="courses">
			<div class="color-overlay ptb100">
				<div class="container">

					<h3 class="section-title wow fadeInDown">Configuration</h3>

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
							
							$requete3="select * from t_configuratuion_con";
							//echo($requete3);
				
							$res=$mysqli->query($requete3);

							if ($res == false) //Erreur lors de l’exécution de la requête
							{ // La requête a echoué
							echo "Error: La requête a echoué \n";
							echo "Errno: " . $mysqli->errno . "\n";
							echo "Error: " . $mysqli->error . "\n";
							exit();
							}
							else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
							{
							echo "<br />";
							//echo($res->num_rows); //Donne le bon nombre de lignes récupérées
							echo "<br />";
							
							
							echo("<div class=\"first-courses each-courses\">");
							//de table configuration
						$con = $res->fetch_assoc();
						echo "<div class='ctr'>";
						echo ("<h3>Intitule: </h3> <p>".$con['con_intitule'] ." </p> <br/> <h3>Date de debut: </h3> <p>" . $con['con_date_debut']."</p>"  );
						echo ( " <br/> <h3>Date fin: </h3> <p>". $con['con_date_fin'] . "</p> <br/> <h3>Lieu : </h3> <p>" . $con['con_lieu']."</p> <br/>" );
						echo( "<h3>Date vernissage: </h3> <p>".   $con['con_date_vernissage']  ." </p> <br/> <p> ". $con['con_txt_bienvenue']." </p>");
						echo "</div>";
							
							echo("</div>");}
							$mysqli->close(); ?>

													

				



						

							
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<!=========================================Actualite========================================!>
					<h3 class="section-title wow fadeInDown">Actualite</h3>
						
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
							$requete2="select * from t_actualite_act";
							
							//echo($requete2);
				
							$res=$mysqli->query($requete2);

							if ($res == false) //Erreur lors de l’exécution de la requête
							{ // La requête a echoué
							echo "Error: La requête a echoué \n";
							echo "Errno: " . $mysqli->errno . "\n";
							echo "Error: " . $mysqli->error . "\n";
							exit();
							}
							else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
							{
							
							
							
							echo( "<table class='table table-bordered'>");
							echo "<tr>";
							echo "<th style='color:white'>Numero d'actualite</th>";
							echo "<th style='color:white'>  Titre</th>";
							echo "<th style='color:white'>  Texte</th>";
							echo "<th style='color:white'>  date de publication</th>";
							echo "<th style='color:white'>  pseudo</th>";
							
							echo "</tr>";

							//de table actualite
							while ($act = $res->fetch_assoc())
							{
								
							echo "<tr>";
							echo ("<td style='color:white'>".$act['act_num'] . "</td> <td style='color:white'>" . $act['act_titre']  . "</td>");
							echo ("<td style='color:white'>" . $act['act_txt'] . "</td ><td style='color:white'>" . $act['act_date_pub']. "</td> ");
							echo("<td style='color:white'>" .   $act['cpt_pseudo']  ."</td>");
							echo "</tr >";
							
							}
							}
							echo "</table>";
							$mysqli->close(); ?>

















							<div class="row">
						 	
							<div class="col-md-8 info-part">
								<div class="first-courses each-courses">
                                
									
								</div>
								
							</div>
							 <div class="col-md-4 text-right">
                             
                             </div>
						 
					</div> <!-- //row -->
				</div> <!-- //container -->
			</div>
		</section>
		


		
		
	


	


		


		

		




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
  
</body>

</html>