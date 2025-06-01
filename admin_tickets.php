<?php
/* Vérification ci-dessous à faire sur toutes les pages dont l'accès est
autorisé à un utilisateur connecté. */
session_start();
if(!isset($_SESSION['login']) || $_SESSION['role']!='A' ) //A COMPLETER pour tester aussi le rôle...
{
 //Si la session n'est pas ouverte, redirection vers la page du formulaire
header("Location:session.php");
exit();
}
?>

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
			
		</div> <!-- //end main-nav -->
        <style>
    .txt {color: #F0394C;}
    </style>
		<!--=========================
			


		<!-- ============== Start portfolio section ============== -->
<section id="portfolio" class="mtb100">
    <div class="container">
        <h3 class="section-title wow fadeInDown">Visiteur </h3>
        <p class="section-info col-sm-8 col-sm-offset-2 wow fadeInDown" data-wow-delay=".25s">
            Bonjour <?php echo $_SESSION['login'];?> ! Bienvenu sur ton compte.
        </p>
        <div class="clearfix"></div>
        <div class="portfolio-content">
                        
<?php 
$mysqli=new mysqli('localhost','zillaykmo','qrpztgds','zfl2-zillaykmo');
if ($mysqli->connect_errno)
{
    // Affichage d'un message d'erreur
    echo "Error: Problème de connexion à la BDD \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    // Arrêt du chargement de la page
    exit();
    }
// Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
if (!$mysqli->set_charset("utf8")) {
    printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
    exit();
    }
//echo ("Connexion BDD réussie !");
$requete=" SELECT * FROM `t_visiteur_vis` left join t_commentaire_cmt using(vis_num) ;";
$res=$mysqli->query($requete);
if ($res == false) //Erreur lors de l’exécution de la requête
{ // La requête a echoué
    echo "Error: La requête a echoué \n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit(); 
    }
    
else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
{
        echo "<ul class='portfolio-filter text-center list-inline mtb40 text-uppercase'>";       
		        echo"<li><a  href='admin_accueil.php' data-filter='*'>Accueil</a></li> ";
				echo "<li><a class='active' href='admin_tickets.php' data-filter='.wedding'>Visiteur</a></li>";
                /*echo "<li><a href='#' data-filter='.festival'>Festival</a></li>";
                echo "<li><a href='#' data-filter='.engagement'>Engagement</a></li>";
                echo "<li><a href='#' data-filter='.birthday'>Birthday</a></li>";*/
                echo "</ul>";
  
            echo "<table class='table table-hover'>";
            echo "<tr>";
            echo"<th>cpt_pseudo </th>";
            echo"<th> Nom </th>";
            echo"<th>Penom </th>";
            echo"<th>email </th>";
            echo"<th>numero</th>";
            echo"<th>mot de passe</th>";
            echo"<th>Date de creation</th>";
            echo"<th>commentaire numero</th>";
            echo"<th>Date de publication</th>";
            echo"<th>commentaire</th>";
            echo"<th>Etat</th>";
            echo "</tr>";
            while($vis = $res->fetch_assoc()){
                echo "<tr>";
                echo"<td>". $vis['cpt_pseudo'] ."</td> <td>".$vis['vis_nom']."</td>";
                echo"<td>". $vis['vis_prenom'] ."</td> <td>".$vis['vis_email']."</td>";
                echo"<td>". $vis['vis_num'] ."</td> <td>".$vis['vis_mot_de_passe']."</td>";
                echo"<td>". $vis['vis_date'] ."</td> <td>".$vis['cmt_num']."</td>";
                echo"<td>". $vis['cmt_date_time_pub'] ."</td> <td>".$vis['cmt_txt']."</td>"; 
                echo"<td>". $vis['cmt_etat'] ."</td>"; 
                echo "</tr>";
                }
            echo "</table>";
            }
            $requete3="Select * from t_visiteur_vis ";
            $res3=$mysqli->query($requete3);
            if ($res3 == false) //Erreur lors de l’exécution de la requête
            { // La requête a echoué
                echo "Error: La requête a echoué \n";
                echo "Errno: " . $mysqli->errno . "\n";
                echo "Error: " . $mysqli->error . "\n";
                exit(); 
                }
                
            else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
            {   
                echo "<form action='action_tickets.php' method='post' class='btn-block btn btn-submit text-uppercase' data-wow-delay='.25s'>";
                echo "<select name='num'>";
                while($vis = $res3->fetch_assoc()){
                   echo "<option value=".$vis['vis_num'].">".$vis['vis_num']."</option>";
                    }
                   echo  "</select>";
                   echo "<p class='btn-block btn btn-submit text-uppercase' > <input type='submit' value='Supprimer'></p>";
                    echo "</form>";
                }
             
       echo" <section id='contact'>
       <div class='map-content'>
           <div id='gmap'>
           </div>
       </div>
       <div class='color-overlay'>
           <div class='container'>
               <div class='row'>
                   <div class='col-md-8 col-sm-offset-2 form-content ptb100'>
                       <h3 class='section-title wow fadeInDown'>Ajouter un ticker</h3>
                       
                       <div class='clearfix'></div>
                       <form action='Ajoute.php' method='post' class='form wow fadeIn' data-wow-delay='.25s'>
      <span class=txt>   Nom:</span>   <input type='text' class='form-control' placeholder='Ajouter nom' name='nom'>
      <span class=txt>   Prenom:</span> <input type='text' class='form-control' placeholder='Ajouter prenom' name='prenom'>
      <span class=txt>  Email: </span>  <input type='text' class='form-control' placeholder='Ajouter email' name='email'>
      <span class=txt>   ID ticket:</span><input type='password' class='form-control' placeholder='ID ticket' name='id' id='input'>
        
                           
                           <p class='btn-block btn btn-submit text-uppercase' > <input type='submit' value='Valider'></p>
           

                           <!--<a class='btn-block btn btn-submit text-uppercase'>Valider</a> -->
                       </form>
                   </div>
               </div> <!-- //row -->
           </div> <!-- //container -->
       </div>
   </section>";
        
    

$mysqli->close();
?>
            </div>
        </div>
    </div> <!-- // container -->
</section>
<!-- ========= //End portfolio section ========= -->



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