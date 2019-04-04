<?php
session_start();
include 'connexion_database.php';
$sql = $pdo->prepare('SELECT * FROM Equipments AS EQU
  JOIN Details AS DET ON DET.ID_equipment = EQU.ID
  JOIN Proprietaire_Equipment AS PRO ON PRO.ID_Equipment=EQU.ID
  JOIN Users AS USR ON USR.ID = PRO.ID_User
  WHERE EQU.ID = :ID');
 $sql->execute(array('ID' => $_GET['ID']));
 $resultat = $sql->fetch();
 $date = date('Y-m-d');
if ($resultat['tool'] == "HERNAIS")
{
  include 'controller_display_Harnais.php';
}
else if ($resultat['tool'] == "CORDE")
{
  include 'controller_display_Corde.php';
}
else if ($resultat['tool'] == "EQUIPMENTS METALIQUES"){
  include 'controller_display_metaliques.php';
}
else if ($resultat['tool'] == "CASQUE")
include 'controller_display_casque.php';
else if ($resultat['tool'] == "EXPRESSE ET ANNEAU")
include 'controller_display_expresse_anneau.php';
else if ($resultat['tool'] == "EQUIPMENTS DIVERS")
include 'controller_display_divers.php';
  ?>
