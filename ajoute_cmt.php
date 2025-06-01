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
</html>











<?php


if(!empty($_POST["id"]) && !empty($_POST["mdp"]) &&!empty( $_POST["email"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) &&!empty( $_POST["cmt"]) )
{
$code=htmlspecialchars($_POST['id']);
$mdp=htmlspecialchars($_POST['mdp']);
$email=htmlspecialchars($_POST['email']);
$nom=htmlspecialchars($_POST['nom']);
$prenom=htmlspecialchars($_POST['prenom']);
$cmt=htmlspecialchars($_POST['cmt']);
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
    echo ("Connexion BDD réussie !");
    if (!$mysqli->set_charset("utf8")) {
        printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
        exit();
        }
        //Requetes 
      $requete1="SELECT * FROM `t_visiteur_vis` where vis_num=".$code." and vis_mot_de_passe= MD5('" .$mdp. "') and vis_nom='".$nom."'and vis_prenom='".$prenom."';";
      $res=$mysqli->query($requete1);
    if ($res == false) //Erreur lors de l’exécution de la requête
    { // La requête a echoué
    echo "Error: La requête a echoué \n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit(); 
    }
    
    else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
    {
        if($res->num_rows == 1){
            $requete2="Select * from t_commentaire_cmt where vis_num= ".$code.";";
            $res2=$mysqli->query($requete2);
            if ($res2 == false) //Erreur lors de l’exécution de la requête
            { // La requête a echoué
            echo "Error: La requête a echoué \n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit(); 
            }
    
            else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
            {   
                if($res2->num_rows == 1){
                    echo("Tu as ajouter deja un commentaire !! Tu peut pas ajouter un autre");
                    echo "<ul class='portfolio-filter text-center list-inline mtb40 text-uppercase'>";       
                    echo"<li><a href='Livre dor.php' data-filter='*'> Retour</a></li> ";
                    echo "</ul>";
                }
                else{
                    $temp="set @id_3h_ok = (
                    select vis_num from t_visiteur_vis
                    where vis_date <= NOW()
                    and now() <= TIMESTAMPADD(HOUR,3,vis_date)
                    and vis_num =".$code."
                    );";
                    $temps=$mysqli->query($temp);
                    $requete3="SELECT ".$temps.";";
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
                        //$ress = $res->fetch_assoc();
                        if($res != NULL){
                            $requete4="insert into t_commentaire_cmt values (NULL,NOW(),'".$cmt."',NULL,".$code.");";
                            $res4=$mysqli->query($requete4);
                            if ($res4 == false) //Erreur lors de l’exécution de la requête
                            { // La requête a echoué
                            echo "Error: La requête a echoué 4 \n";
                            echo "Errno: " . $mysqli->errno . "\n";
                            echo "Error: " . $mysqli->error . "\n";
                            exit(); 
                            }
            
                            else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
                            { header("Location:Livre dor.php"); } 


                        }
                        else{
                            echo "Tu as depasse les 3 heures! tu peut pas ajouter un commentaire";
                            echo "<ul class='portfolio-filter text-center list-inline mtb40 text-uppercase'>";       
                            echo"<li><a href='Livre dor.php' data-filter='*'> Retour</a></li> ";
                            echo "</ul>";
                        }

                    }






                }

            }


        }
        else{
            echo("L'ID de la ticket est invalide !!!!!");
            echo "<ul class='portfolio-filter text-center list-inline mtb40 text-uppercase'>";       
            echo"<li><a href=\"Livre d''or.php\" > Retour</a></li> ";
            echo "</ul>";
            
        }
        
    }













        $mysqli->close();
       
    
    
    }
    else{
        echo("il ya des champs  vide !!");
        echo "<ul class='portfolio-filter text-center list-inline mtb40 text-uppercase'>";       
        echo"<li><a href='Livre dor.php' > Retour</a></li> ";
        echo "</ul>";
        
    }
                            ?>