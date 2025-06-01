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
<body id="courses">
	
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
				<li class="current"><a href="Livre dor.php">Livre d'or</a></li>
				<li><a href="inscription.php">Inscription</a></li>
				<li><a href="galerie.php">Galerie</a></li>
				<li ><a href="session.php">Log in</a></li>
				<!--<li><a href="#latest-blog">Blog</a></li>
				<li><a href="#client-feedback">Testimonials</a></li>
				<li><a href="#contact">Contact</a></li>-->
			</ul>
		</nav>
		
		<!-- End of menu area -->

		<style>
    .txt {color: #F0394C;}
    </style>
		

		


		<!-- ============== Start courses section ============== -->
		<section >
			<div class="color-overlay ptb100">
				<div class="container">
                    
					<!=========================================Commentaire========================================!>
					<h3 class="section-title wow fadeInDown">Commentaire</h3>
						
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
							$requete2="SELECT * FROM `t_commentaire_cmt`
                            right join t_visiteur_vis using(vis_num)";
							
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
							echo( "<table class='table table-bordered'> ");
							echo "<tr>";
							echo "<th style='color:white' >Nom</th>";
							echo "<th style='color:white'>  Prenom</th>";
							echo "<th style='color:white' > Numero de commenataire</th>";
							echo "<th style='color:white'> Date de publication</th>";
							echo "<th style='color:white'> Commentaire</th>";
							echo "<th style='color:white'> Numero de visiteur</th>";
							
							echo "</tr>";

							//de table actualite
							while ($act = $res->fetch_assoc())
							{
								if($act['cmt_num']!=NULL){
							echo "<tr>";
                            echo ("<td style='color:white'>" . $act['vis_nom'] . "</td><td style='color:white'>" . $act['vis_prenom']. "</td> ");
							echo ("<td style='color:white'>".$act['cmt_num'] . "</td> <td style='color:white' >" . $act['cmt_date_time_pub']  . "</td>");
							echo ("<td style='color:white'>" . $act['cmt_txt'] . "</td><td style='color:white'>" . $act['vis_num']. "</td> ");
							
							echo "</tr >";}
							else{
								echo "<tr>";
								echo ("<td style='color:white'>" . $act['vis_nom'] . "</td><td style='color:white'>" . $act['vis_prenom']. "</td> ");
								echo "<td style='color:white'>NULL</td>";
								echo "<td style='color:white'>NULL</td>";
								echo "<td style='color:white'>NULL</td>";
								echo "</td><td style='color:white'>" . $act['vis_num']. "</td> ";
								echo "</tr >";

							}
							
							}
							}
							echo "</table>";
							$mysqli->close(); ?>

<section id="contact">
			<div class="map-content">
				<div id="gmap">
				</div>
			</div>
			<div class="color-overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-offset-2 form-content ptb100">
							<h3 class="section-title wow fadeInDown">Ajouter un commentaire</h3>
							
							<div class="clearfix"></div>
							<form action="ajoute_cmt.php" method="post" class="form wow fadeIn" data-wow-delay=".25s">
           <span class=txt>   Numero de ticket:</span>   <input type="text" class="form-control" placeholder="ID ticket" name="id">
           <span class=txt>   ID:</span> <input type="text" class="form-control" placeholder="Votre ID" name="mdp">
           <span class=txt>  Nom: </span>  <input type="text" class="form-control" placeholder="Votre nom" name="nom">
           <span class=txt> 	Prenom:</span>  <input type="text" class="form-control" placeholder="Votre prenom" name="prenom">
           <span class=txt>   Email:</span><input type="text" class="form-control" placeholder="Votre email" name="email" >
		   <span class=txt>   Commentaire:</span><input type="text" class="form-control" placeholder="Commentaire a ajouter" name="cmt" >
								
								<p class="btn-block btn btn-submit text-uppercase" > <input type="submit" value="Valider"></p>
                

								<!--<a class="btn-block btn btn-submit text-uppercase">Valider</a> -->
							</form>
						</div>
					</div> <!-- //row -->
				</div> <!-- //container -->
			</div>
		</section>
		<!-- ========= //End contact section ========= -->







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