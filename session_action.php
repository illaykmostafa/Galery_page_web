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
//Ouverture d'une session
session_start();
if ($_POST["pseudo"] && $_POST["mdp"]){
    $id=htmlspecialchars($_POST['pseudo']);
    $motdepasse=htmlspecialchars($_POST['mdp']);
    // Connexion à la base MariaDB
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
    echo ("Connexion BDD réussie !");
    $sql="SELECT cpt_pseudo,cpt_mot_de_passe,pro_role,pro_validite_du_profile FROM t_compte_cpt  join t_profil_pro using(cpt_pseudo) WHERE cpt_pseudo='" . $id . "' AND cpt_mot_de_passe=MD5('" . $motdepasse . "') and pro_validite_du_profile='A';";
    echo($sql);
    $resultat = $mysqli->query($sql);
    if ($resultat==false) {
        // La requête a echoué
        echo "Error: Problème d'accès à la base \n";
        exit();
    }
else {
    if($resultat->num_rows == 1) {
            $ligne=$resultat->fetch_assoc();
            if($ligne['pro_validite_du_profile']=='A'){
            //Mise à jour des données de la session
            $_SESSION['login']=$id;
            /* A prévoir et finaliser : récupérer puis vérifier
            le rôle du profil dans la base MariaDB,
            puis affecter la valeur du rôle à $_SESSION['role'] */
            $_SESSION['role']=$ligne['pro_role'];
           
            /* Redirection vers la page autorisée à cet utilisateur
            ATTENTION !! Ne pas mettre d'appel d'echo() / de balise HTML
            au-dessus de header() dans cette condition */
            header("Location:admin_accueil.php");
            }
            else{
                echo ("ce profile est desactive !!!!!");
            }
        }
    else{
            // aucune ligne retournée
            // => le compte n'existe pas ou n'est pas valide
            echo "pseudo/mot de passe incorrect(s) ou profil inconnu !";
            echo "<br /><a href=\"./session.php\">Cliquez ici pour réafficher
            le formulaire</a>";
    }
        





    
    }
    $mysqli->close();}
else{ 
    echo "il ya des champs vide !!!!!";
}
?>