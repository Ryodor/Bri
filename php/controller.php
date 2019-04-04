<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <link rel="stylesheet" href="../css/nav_controller.css">
      <link rel="stylesheet" href="../css/admin.css">
         <link rel="stylesheet" href="../css/controlle.css">
          <link rel="stylesheet" href="../css/menu0.css">
          <link rel="stylesheet" href="../css/menu.css">
       <title>Page d'accueil</title>
<?php
session_start();

if (isset($_SESSION['login']))
{
  echo '</head>
       <body>
   <img  src="../image/logo.png" alt="B.R.I">
         <img class="etna" src="../image/image.jpeg" alt="etna">
  <nav>
  <ul>
       <li><a href="controller.php">Accueil</a></li>
          <li><a href="gestion_controller_EPI_display.php">Gestion d\'EPI</a></li>
          <li><a href="alerte_Date_controller.php">Date de controle</a></li>
          <li><a href="alerte_controller_history.php">Historique</a></li>
        </ul>
     </nav>
  <center>';
echo '<div id="nav">
 <a href="#" id="admin" value="admin">'.$_SESSION["login"].'</a>
 <a href="admin.php?connexion=Deconnection" id="Deconnection" value="Deconnection">Deconnection</a>
</div>';
include 'connexion_database.php';
$sql1 = $pdo->prepare('SELECT *,DATEDIFF(date_next_controle,NOW()) AS DAT
FROM Controle AS ctrl
        JOIN Equipments AS EQU ON ctrl.ID_Equipment = EQU.ID
        JOIN Details AS DET
        ON EQU.ID = DET.ID_Equipment
JOIN Proprietaire_Equipment AS PRO ON DET.ID_Equipment = PRO.ID_Equipment
JOIN Users AS USR ON USR.ID = PRO.ID_User
        WHERE DATEDIFF(date_next_controle,NOW()) < 15;');
$sql1->execute();
$i = 0;
while ($resultat1 = $sql1->fetch())
  {
    if ($i == 0)
    {
    echo 'echo "<div class="menu"><h3>Alerte des prochains controles sous 15 jours</h3></div>";
    <div class="wrapper">
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
  Prochain controle
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
  if ($i == 0)
  echo "<div class='menu'><h3>Vous n'avez pas de controle dans les 15 jours suivants </h3></div>";
  echo '</div>
</div>';

if ($_GET['connexion'] == "Deconnection")
{
  session_destroy();
  echo '<script>alert("Vous allez etre deconnecter")</script>';
  header('Refresh: 0; url=connection.php');
}
}
else {
  echo '<script>alert("VOUS AVEZ PAS LE DROITS ACCES A CETTE PAGE \n Vous allez etre rediriger vers la page connexion")</script>';
  header('Refresh: 0; url=connection.php');
}
include "footer.php";
?>
