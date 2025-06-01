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
	

		
		<!-- End of menu area -->

    
		

		


		
		
		<!-- ============== Start counter ============== -->
		<section id="count-down" class="text-center">
        <div class="col-sm-offset-1 caption caption-wide">
                        <a class="btn btn-start wow fadeInUp" href="galerie.php" data-scroll data-wow-delay=".85s">Back to galerie</a>
		        	</div>
			<div class="color-overlay ptb100">
				<div class="container">
                

					<div class="row">
                       
						<div class="counter-content">
                        
						<?php 
                         /*Les information sur l'oeuvre */
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

                                 //Partie SQL (GET)
                                 if(isset($_GET['num'])){
                                   // echo ("Valeur de id : ");
                                    //echo ($_GET['num']);
                                    $requete= " SELECT exp_nom,exp_prenom,oeu_code,oeu_Intitule,oeu_date,oeu_description,oeu_fichier_img FROM t_oeuvre_oeu join tj_presentation_pre using(oeu_code) join t_exposant_exp using(exp_id) where oeu_code=".$_GET['num'].";";
                                    $res=$res=$mysqli->query($requete);
                                    if ($res == false) //Erreur lors de l’exécution de la requête
							            { // La requête a echoué
							            echo "Error: La requête a echoué \n";
							            echo "Errno: " . $mysqli->errno . "\n";
							            echo "Error: " . $mysqli->error . "\n";
							            exit(); }
							                   
							            else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
							            {
                                            $nb=$res->num_rows;
                                            //oeuvre no collective
                                            if ($nb == 1)
                                            {
                                            $ligne=$res->fetch_assoc();
                                            
                                            $pathname=$ligne['oeu_fichier_img'];
                                            $nom=$ligne['exp_nom'];
                                            $prenom=$ligne['exp_prenom'];
                                            $Intitule=$ligne['oeu_Intitule'];
                                            $date=$ligne['oeu_date'];
                                            $description=$ligne['oeu_description'];
                                            //les information
                                            //nom 
                                            echo "<h3 class='section-title wow fadeInDown'>".$Intitule."</h3>";
                                            echo "<div class='col-sm-4 each-counter wow zoomIn'>";
								                            echo "<span class='title'>Nom de l'exposant: </span>" ;
                                            echo "<br>";
                                            echo "<p class='title' >".$nom."</p>";
                                            echo " </div>";
                                            echo "<br>";
                                            //prenom
                                            echo "<div class='col-sm-4 each-counter wow zoomIn'>";
                                            echo " <span class='title' >Prenom de l'exposant: </span>";
                                            echo "<br>";
                                            echo  "<p class='title' >".$prenom."</p>";
                                            echo "</div>";
                                            //date
                                            echo "<div class='col-sm-4 each-counter wow zoomIn'>";
                                            echo"<span class='title'>Date de création de l’œuvre :</span>";
                                            echo "<br>";
								            echo  "<p class='title'>".$date."</p>";
							                echo"</div>";
                                            //description
                                         
                                            echo "<div class='col-sm-4 each-counter wow zoomIn' class='fl'>";
                                            echo"<span class='title'   >Description :</span>";
								            echo "<br>";
                                            echo  "<p class='titre'>".$description."</p>";
							                echo"</div>";}

                                                //oeuvre  collective
                                            else{
                                                $i=1;
                                               
                                              
                                                while( $ligne=$res->fetch_assoc()){
                                                $Intitule=$ligne['oeu_Intitule'];
                                               
                                                $nom=$ligne['exp_nom'];
                                                $prenom=$ligne['exp_prenom'];
                                                $description=$ligne['oeu_description'];
                                                $date=$ligne['oeu_date'];
                                                $pathname=$ligne['oeu_fichier_img'];
                                           
                                            //les information
                                                echo "<div>";
                                            
                                             //nom 
                                             if($i == 1){
                                            echo "<h3 class='section-title wow fadeInDown'>".$Intitule."</h3>";}

                                            echo "<div class='col-sm-4 each-counter wow zoomIn'>";
								                              echo "<span class='title'>Nom de l'exposant ".$i.":</span>" ;
                                            echo "<br>";
                                            echo "<p class='title'>".$nom."</p>";
                                              echo " </div>";
                                            //prenom
                                            echo "<div class='col-sm-4 each-counter wow zoomIn'>";
                                            echo " <span class='title' class='fl'>Prenom de l'exposant ".$i.":</span>";
                                            echo "<br>";
                                            echo  "<p class='title'>".$prenom."</p>";
                                            echo "</div>";
                                            $i+=1;
                                            echo "/<div>";

                                            }
                                            
                                            //date
                                            echo "<div class='col-sm-4 each-counter wow zoomIn'>";
                                            echo"<span class='title'>Date de création de l’œuvre :</span>";
                                            echo "<br>";
								            echo  "<p class='title'>".$date."</p>";
							                echo"</div>";
                                            //description
                                        
                                            echo "<div class='col-sm-4 each-counter wow zoomIn'>";
                                           
                                            echo "<h4 >Description :</h4>";
                                            echo "<br>";
                                            echo  "<s\p class='titre'>".$description."</p>";
                                            echo"</div>";
							              }

                                            
                                           /* */

                                            
							
							
							
							


                                 
                                   }}
                                   else {
                                    echo ("Vous avez oublié le paramètre !");
                                    exit();
                                   }
                                   
                                 






















                                      $mysqli->close();   ?>





							
						</div>
					</div> <!-- //row -->
				</div> <!-- //container -->
			</div>
		</section>
		<!-- ========= //End counter ========= -->

		
		




		<!-- ============== start home section  ============== -->
		<section id="home">
			<div id="home-slider" class="carousel slide in" data-ride="carousel">
			  <!-- Indicators -->
		
		      <div class="carousel-inner">
              <div class="item active" <?php echo "style='background-image: url(image/oeuvre/".$pathname.")'";?>>
		        	
                    </div><!-- //item -->
                    
		        
		    
		      </div>
		    </div>
		</section>
		<!-- ========= //End home section ========= -->




















	

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
<!--

							
							-->