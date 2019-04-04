<?php
try
{
  include 'codb.php';
    $found = ('SELECT * FROM Roles JOIN Users WHERE Users.Role = Roles.ID AND
      (logi_n LIKE \'%'.$_GET['rechercher'].'%\' OR first_name LIKE \'%'.$_GET['rechercher'].'%\'OR second_name LIKE \'%'.$_GET['rechercher'].'%\')');
    $req = $co->prepare($found);
    $req->execute();
    $recherche = $req->fetchall(PDO::FETCH_ASSOC);
    if ($_GET['rechercher'] != NULL && $recherche != NULL) {
      $s = 0;
      echo "<form methode='GET'><table><tr>
      <th>Login</th><th>Nom</th><th>Prenom</th>
      <th>Date de naissance</th><th>Adresse</th>
               <th>Code postale</th><th>Ville</th>
               <th>Rôle</th></th><th>Supprimer</th><th>Modifier</th></tr>";

		     While ($s < sizeof($recherche)) {

		       echo "<tr id='$s'><td class=\"name\">", $recherche[$s]['logi_n'],"</td><td class=\"name\">",
           $recherche[$s]['first_name'],"</td><td class=\"name\">",
           $recherche[$s]['second_name'], "</td><td>",
           $recherche[$s]['date_birthday'],"</td><td class=\"name\">",
           $recherche[$s]['address'],"</td><td>", $recherche[$s]['Code_postale'],"</td><td>",
           $recherche[$s]['Ville'],"</td><td class=\"name\">",
           $recherche[$s]['name'],"</td><td><a href=deluser.php?user=",
           $recherche[$s]['ID'],"><input type=button class=\"button\" value=X></a></td>
           <td id='$s'><a class='button' value='valider' onclick='modifier($s)'>Modifier</a></td></tr>";
	$s++;
      }
      echo "</table></form>";
    }
    else {

      $req = $co->prepare('SELECT *,Users.ID AS IDD FROM `Roles` JOIN Users WHERE Users.Role = Roles.ID');
      $ex = $req->execute();
      echo "<form methode='GET'><table><tr><th>Login</th>
      <th>Nom</th><th>Prenom</th><th>Date de naissance</th>
      <th>Adresse</th><th>Code postale</th><th>Ville</th>
      <th>Rôle</th></th><th>Supprimer</th><th>Modifier</th></tr>";
      $resultat = $req->fetchall(PDO::FETCH_ASSOC);
      $i = 1;
    }

    While ($i < sizeof($resultat))
    {
      if ($resultat[$i]['logi_n'] != "Admin")
      {
	echo "<tr id='$i' ><td>", $resultat[$i]['logi_n'],"</td><td >",
	  $resultat[$i]['first_name'],"</td><td  class=\"name\">",
	  $resultat[$i]['second_name'], "</td><td >",
	  $resultat[$i]['date_birthday'],"</td><td >",
	  $resultat[$i]['address'],"</td><td>",
	  $resultat[$i]['Code_postale'],"</td><td>",
	  $resultat[$i]['Ville'],"</td><td>", $resultat[$i]['name'],"</td><td><a href=deluser.php?user=",
	  $resultat[$i]['ID'],"><input type=button class=\"button\" value=X></a></td>
    <td><a class='button' value='valider' onclick='modifier($i);')'>Modifier</a></td>
    </tr>";
      }
      $i++;
    }
    echo "</table></form>";
  }
catch(PDOException $e)
{
  echo $e->getMessage();
  die();
}


   ?>
