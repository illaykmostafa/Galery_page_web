<?php 
//Ouverture d'une session

if ($_POST["num"] ){
    $num=htmlspecialchars($_POST["num"]);
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
    $del1="Delete from t_commentaire_cmt where vis_num='".$num."';";
    $res1= $mysqli->query($del1);
    if ($res1==false) {
        // La requête a echoué
        echo "Error: Problème d'accès à la base 1\n";
        exit();
    }
else {
    $del2="Delete from t_visiteur_vis where vis_num='".$num."';";
    $res2= $mysqli->query($del2);
    if ($res2==false) {
        // La requête a echoué
        echo "Error: Problème d'accès à la base 2\n";
        exit();
    }
    else{
        header("Location:admin_tickets.php");
      }

    
    }
    $mysqli->close();}
else{ 
    echo "il ya des champs vide !!!!!";
}
?>