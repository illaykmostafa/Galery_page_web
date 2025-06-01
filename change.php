<?php
session_start();
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
        if(!empty($_POST["mdp"]) && !empty( $_POST["cmdp"])){
            $mdp=htmlspecialchars($_POST['mdp']);
            $cmdp=htmlspecialchars($_POST['cmdp']);
            if(strcmp($mdp ,$cmdp)==0){
            $requete="Update t_compte_cpt set cpt_mot_de_passe=MD5('".$mdp."')where cpt_pseudo='".$_SESSION['login']."';";
            $res = $mysqli->query($requete);
            if ($res == false) //Erreur lors de l’exécution de la requête
            {
            // La requête a echoué
            echo "Error: La requête a échoué \n";
            echo "Query: " . $requete . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit();
            }
         }
           else{
            echo("Les mots de passe sont differents!!");
            echo "<ul class='portfolio-filter text-center list-inline mtb40 text-uppercase'>";       
            echo"<li><a href='admin_accueil.php' data-filter='*'> Retour</a></li> ";
            echo "</ul>";
            exit();
           } 
        }
        if(!empty($_POST["nom"])){
            $nom=$_POST['nom'];
            $requete1="Update t_profil_pro set pro_Nom='".$nom."' where cpt_pseudo='".$_SESSION['login']."';";
            $res1 = $mysqli->query($requete1);
            if ($res1 == false) //Erreur lors de l’exécution de la requête
            {
            // La requête a echoué
            echo "Error: La requête a échoué \n";
            echo "Query: " . $requete1 . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit();
            }
         }

         if(!empty($_POST["prenom"])){
            $prenom=$_POST['prenom'];
            $requete2="Update t_profil_pro set pro_prenom='".$prenom."' where cpt_pseudo='".$_SESSION['login']."';";
            $res2 = $mysqli->query($requete2);
            if ($res2 == false) //Erreur lors de l’exécution de la requête
            {
            // La requête a echoué
            echo "Error: La requête a échoué \n";
            echo "Query: " . $requete2. "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit();
            }
         }
         if(!empty($_POST["email"])){
            $email=$_POST['email'];
            $requete3="Update t_profil_pro set pro_email='".$email."' where cpt_pseudo='".$_SESSION['login']."';";
            $res3 = $mysqli->query($requete3);
            if ($res3 == false) //Erreur lors de l’exécution de la requête
            {
            // La requête a echoué
            echo "Error: La requête a échoué \n";
            echo "Query: " .$requete3 . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit();
            }
         }
         header("Location:admin_accueil.php");
       
            
        $mysqli->close();
        ?>




























