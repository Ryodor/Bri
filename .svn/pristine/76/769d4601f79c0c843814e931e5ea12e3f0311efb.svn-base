<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/menu0.css">
       <link rel="stylesheet" href="../css/nav.css">
<link rel="stylesheet" href="../css/gestion_equipement.css">
         <link rel="stylesheet" href="../css/menu.css">
            <title>Alerte de vie</title>
          </head>
          <body>
  <?php
   session_start();

echo '<div id="nav2">
 <a href="#" id="admin" value="admin">'.$_SESSION["login"].'</a>
 <a href="admin.php?connexion=Deconnection" id="Deconnection2" value="Deconnection">Deconnection</a>
</div>';
if ($_GET['connexion'] == "Deconnection")
  {
    session_destroy();
    echo '<script>alert("Vous allez etre deconnecter")</script>';
    header('Refresh: 1; url=connection.php');
  }
   include 'nav.php';
echo "<div class='menualert'><h3>Alerte des equipements dont la durée de vie est inférieur 15 jours</h3></div>";

include 'connexion_database.php';
$sql1 = $pdo->prepare('SELECT *,DATEDIFF(date_end,NOW()) AS DAT
FROM Details AS DET
JOIN Equipments AS EQU
ON EQU.ID = DET.ID_Equipment
JOIN Proprietaire_Equipment AS PRO ON DET.ID_Equipment = PRO.ID_Equipment
JOIN Users AS USR ON USR.ID = PRO.ID_User
WHERE DATEDIFF(date_end,NOW()) < 15 ORDER BY DAT;');
$sql1->execute();
$i = 0;
while ($resultat1 = $sql1->fetch())
{
  if ($i == 0)
  {
  echo '<div class="wrapper">
  <div class="table">
  <div class="row header">
  <div class="cell">
  Nom d\'equipement
  </div>
  <div class="cell">
  Login de Proprietaire
  </div>
  <div class="cell">
  Numero d\'identification
  </div>
  <div class="cell">
  Fin de vie
  </div>
  </div>';
}
echo '
  <div class="row">
  <div class="cell">
  '.$resultat1['tool'].'
  </div>
  <div class="cell">
  '.$resultat1['logi_n'].'
  </div>
  <div class="cell">
  '.$resultat1['ID_Equipment'].'
  </div>
  <div class="cell">
 dans '.$resultat1['DAT'].' jours
  </div>
  </div>

';
$i++;
}
echo '</div></div>';
include "footer2.php";
?>

