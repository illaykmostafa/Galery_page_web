<?php 
//Ouverture d'une session

if ($_POST["cpt"] ){
    $id=htmlspecialchars($_POST["cpt"]);
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
    $sql="SELECT * FROM t_profil_pro where cpt_pseudo = '".$id."';";
   
 
    
    echo($sql);
    $resultat = $mysqli->query($sql);

    if ($resultat==false) {
        // La requête a echoué
        echo "Error: Problème d'accès à la base \n";
        exit();
    }
else {
  
    $ligne=$resultat->fetch_assoc();
    if($ligne['pro_validite_du_profile'] == 'A') {
        $req1="Update t_profil_pro set pro_validite_du_profile='D' where cpt_pseudo='".$id."';";
        $res1 = $mysqli->query($req1);
        echo($res1);
    if ($res1==false) {
        // La requête a echoué
        echo "Error: Problème d'accès à la base 1\n";
        exit();
    }
    else {header("Location:admin_accueil.php");}

          
        }
    else{
        $req2="Update t_profil_pro set pro_validite_du_profile='A' where cpt_pseudo='".$id."';";
        $res2 = $mysqli->query($req2);
        if ($res2==false) {
            // La requête a echoué
            echo "Error: Problème d'accès à la base 2\n";
            exit();
        }
        else {header("Location:admin_accueil.php");}
    }
        





    
    }
    $mysqli->close();}
else{ 
    echo "il ya des champs vide !!!!!";
}
?>