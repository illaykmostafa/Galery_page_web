
<?php
session_start();

if(!empty( $_POST["email"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) &&!empty( $_POST["id"]) )
{
$id=htmlspecialchars($_POST['id']);
$email=htmlspecialchars($_POST['email']);
$nom=htmlspecialchars($_POST['nom']);
$prenom=htmlspecialchars($_POST['prenom']);
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
        $requete="insert into t_visiteur_vis values (NULL,md5('".$id."'),Now(),'".$nom."','".$prenom."','".$email."','".$_SESSION['login']."');";
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
            else{ header("Location:admin_tickets.php");}
            
        $mysqli->close(); 
         }
          
         else{
             echo"il ya des champs vide!!!";
             echo "<ul class='portfolio-filter text-center list-inline mtb40 text-uppercase'>";       
                            echo"<li><a href='admin_tickets.php' data-filter='*'> Retour</a></li> ";
                            echo "</ul>";
         }






     ?>