
 <?php
                    
                    
                    if(!empty($_POST["pseudo"]) && !empty($_POST["mdp"]) &&!empty( $_POST["email"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) &&!empty( $_POST["cmdp"]) ){
                    
                    
                    
                    
                    
                    $id=htmlspecialchars($_POST['pseudo']);
                    $mdp=htmlspecialchars($_POST['mdp']);
                    $email=htmlspecialchars($_POST['email']);
                    $nom=htmlspecialchars($_POST['nom']);
                    $prenom=htmlspecialchars($_POST['prenom']);
                    $cmdp=htmlspecialchars($_POST['cmdp']);
                    $mysqli=new mysqli('localhost','zillaykmo','qrpztgds','zfl2-zillaykmo');
                    if(strcmp($mdp ,$cmdp)==0){
            

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
                                $sql="INSERT INTO t_compte_cpt VALUES('" .$id. "', MD5('" .$mdp. "')) ;";
                                $req="INSERT INTO t_profil_pro VALUES('" .$id. "','" .$nom. "','".$prenom."','".$email."','D','O',NOW());";
                                $del="DELETE from t_compte_cpt where cpt_pseudo='$id' ;";
                                // Affichage de la requête constituée pour vérification
                                echo($sql);
                                //Exécution de la requête d'ajout d'un compte dans la table des comptes
                                $result3 = $mysqli->query($sql);
                                if ($result3 == false) //Erreur lors de l’exécution de la requête
                                {
                                // La requête a echoué
                                echo "Error: La requête a échoué \n";
                                echo "Query: " . $sql . "\n";
                                echo "Errno: " . $mysqli->errno . "\n";
                                echo "Error: " . $mysqli->error . "\n";
                                exit();
                                }
                                else //Requête réussie
                                {
                                echo "<br />";
                                echo "Insert compte réussie !" . "\n";
                                //Inseration de profil 
                                $result2 = $mysqli->query($req);  
                                if ($result2== false) //Erreur lors de l’exécution de la requête
                                {
                                // La requête a echoué
                                $result1 = $mysqli->query($del); //delete de compte
                                echo "Error: La requête a échoué \n";
                                echo "Query: " . $sql . "\n";
                                echo "Errno: " . $mysqli->errno . "\n";
                                echo "Error: " . $mysqli->error . "\n";
                                
                                exit();
                                }
                                else{
                                    echo "<br />";
                                    echo "Insert profil  réussie !" . "\n";
                                    echo"<li><a href='inscription.php' data-filter='*'> Retour</a></li> ";
                                    echo "</ul>";} }
                                //Ferme la connexion avec la base MariaDB
                                $mysqli->close();}
                                else{
                                    echo("Les mots de passe sont differents!!");
                                    echo "<ul class='portfolio-filter text-center list-inline mtb40 text-uppercase'>";       
                                    echo"<li><a href='inscription.php' data-filter='*'> Retour</a></li> ";
                                    echo "</ul>";
                                    
                                }
                            
                            
                            }
                            else{
                                echo("il ya des champs  vide !!");
                                echo "<ul class='portfolio-filter text-center list-inline mtb40 text-uppercase'>";       
                            echo"<li><a href='inscription.php' data-filter='*'> Retour</a></li> ";
                            echo "</ul>";
                                
                            }
                                                    ?>