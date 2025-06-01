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
echo ("Connexion BDD réussie !");

//Préparation de la requête récupérant tous les profils
$requete="SELECT vis_nom,vis_prenom FROM t_commentaire_cmt
join t_visiteur_vis USING(vis_num);";
//Affichage de la requête préparée
echo ($requete);
//==========================requete d'inseration======================================================
/*$requete2="insert into t_compte_cpt values('star10',MD5('tux1234'));";
echo($requete2);
$result2=$mysqli->query($requete2);//Exécution de la requête
if ($result2 == false) //Erreur d’exécution de la requête
{ // La requête a echoué
 echo "Error: La requête a echoué \n";
 echo "Errno: " . $mysqli->errno . "\n";
 echo "Error: " . $mysqli->error . "\n";
 exit();
}
else //Exécution de la requête réussie
{
echo "<br />";
echo "Insertion réussie" . "\n";
echo "<br />";
}*/


//========================================================================================================================

//Préparation de la requête récupérant tous les profils
$requete="SELECT vis_nom,vis_prenom FROM t_commentaire_cmt
join t_visiteur_vis USING(vis_num);";
//Affichage de la requête préparée
echo ($requete);


$result1 = $mysqli->query($requete);
if ($result1 == false) //Erreur lors de l’exécution de la requête
{ // La requête a echoué
 echo "Error: La requête a echoué \n";
 echo "Errno: " . $mysqli->errno . "\n";
 echo "Error: " . $mysqli->error . "\n";
 exit();
}
else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
{
echo "<br />";
echo($result1->num_rows); //Donne le bon nombre de lignes récupérées
 echo "<br />";
 echo "<table>";


 //affichage de la requete de nom et prenom qui on mit un commentaire 
 /*while ($actu = $result1->fetch_assoc())
 {
	 
   echo "<tr>";
  echo ("<td>".$actu['vis_nom'] . "</td> <td>" . $actu['vis_prenom']  . "</td>");
  //echo ("<td>" . $actu['cpt_pseudo'] . "</td><td>" . $actu['act_date_pub']. "</td>");
  echo "</tr >";
 
 }
  echo "</table>";*/
}
//Ferme la connexion avec la base MariaDB

//=============================== affiche de la table de la configuration==========================================
$requete3="select * from t_commentaire_cmt";
echo($requete3);
$res=$mysqli->query($requete3);

if ($res == false) //Erreur lors de l’exécution de la requête
{ // La requête a echoué
 echo "Error: La requête a echoué \n";
 echo "Errno: " . $mysqli->errno . "\n";
 echo "Error: " . $mysqli->error . "\n";
 exit();
}
else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
{
echo "<br />";
echo($res->num_rows); //Donne le bon nombre de lignes récupérées
 echo "<br />";
 
 
 echo "<table>";
							echo "<tr>";
							echo "<td>Numero d'actualite</td>";
							echo "<td>  Titre</td>";
							echo "<td>  Texte</td>";
							echo "<td>  date de publication</td>";
							echo "<td>  pseudo</td>";
							
							echo "</tr>";

							//de table actualite
							while ($act = $res->fetch_assoc())
							{
								
							echo "<tr>";
							echo ("<td>".$act['act_num'] . "</td> <td>" . $act['act_titre']  . "</td>");
							echo ("<td>" . $act['act_txt'] . "</td><td>" . $act['act_date_pub']. "</td> ");
							echo("<td>" .   $act['cpt_pseudo']  ."</td>");
							echo "</tr >";
							
							}
							}
							echo "</table>";
$mysqli->close(); 

?>