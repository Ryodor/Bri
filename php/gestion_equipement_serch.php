<?php
include 'connexion_database.php';
$sql = $pdo->prepare('SELECT *,LOT.ID AS LOT_ID FROM Equipments AS EQU
  JOIN Details AS DET ON DET.ID_equipment = EQU.ID
  JOIN Proprietaire_Equipment AS PRO ON PRO.ID_Equipment=EQU.ID
  JOIN Users AS USR ON USR.ID = PRO.ID_User
  JOIN Lot_Equipments AS LOE ON LOE.ID_Equipment = EQU.ID
  JOIN Lot AS LOT ON LOT.ID = LOE.ID_Lot
  WHERE EQU.ID = :ID');
 $sql->execute(array('ID' => $_GET['ID']));
if ($resultat = $sql->fetch())
{
$sql1 = $pdo->prepare('SELECT COUNT(*) AS QUA FROM Lot_Equipments WHERE ID_Lot = :ID_LOT');
$sql1->execute(array('ID_LOT' => $resultat['LOT_ID']));
$resultat1 = $sql1->fetch();
echo '
<div class="wrapper">
<div class="table">

<div class="row header">
<div class="cell">
Nom d\'equipement
</div>
<div class="cell">
Type
</div>
<div class="cell">
Modele
</div>
<div class="cell">
Fabricant
</div>
</div>

<div class="row">
<div class="cell">
'.$resultat['tool'].'
</div>
<div class="cell">
'.$resultat['type'].'
</div>
<div class="cell">
'.$resultat['model'].'
</div>
<div class="cell">
'.$resultat['maker'].'
</div>
</div>

</div>

<div class="table">

<div class="row header green">
<div class="cell">
Numero d\'identification
</div>
<div class="cell">
Numero series
</div>
<div class="cell">
Signe distinctif
</div>
<div class="cell">
Lot
</div>
<div class="cell">
Nombre de pieces
</div>
</div>

<div class="row">
<div class="cell">
'.$resultat['ID_Equipment'].'
</div>
<div class="cell">
'.$resultat['serial_maker'].'
</div>
<div class="cell">
'.$resultat['Signe_distanctif'].'
</div>
<div class="cell">
'.$resultat['name'].'
</div>
<div class="cell">
'.$resultat1['QUA'].'
</div>
</div>
</div>

<div class="table">

<div class="row header blue">
<div class="cell">
Login de Proprietaire
</div>
<div class="cell">
Adresse
</div>
<div class="cell">
Code Postal
</div>
<div class="cell">
Vile
</div>
</div>

<div class="row">
<div class="cell">
'.$resultat['logi_n'].'
</div>
<div class="cell">
'.$resultat['address'].'
</div>
<div class="cell">
'.$resultat['Code_postale'].'
</div>
<div class="cell">
'.$resultat['Ville'].'
</div>
</div>
</div>
<div class="table">

<div class="row header">
<div class="cell">
Date D\'achat
</div>
<div class="cell">
Date de Fabrication
</div>
<div class="cell">
Date de fin de vie
</div>
<div class="cell">
Date de 1ere utilisation
</div>
</div>

<div class="row">
<div class="cell">
'.$resultat['buy_date'].'
</div>
<div class="cell">
'.$resultat['date_of_manufacture'].'
</div>
<div class="cell">
'.$resultat['date_end'].'
</div>
<div class="cell">
'.$resultat['date_commissioning'].'
</div>
</div>
</div>
'; include 'Etat_display.php';
echo '</div>';
}
else  {
$sql = $pdo->prepare('SELECT * FROM Equipments AS EQU
JOIN Details AS DET ON DET.ID_equipment = EQU.ID
JOIN Proprietaire_Equipment AS PRO ON PRO.ID_Equipment=EQU.ID
JOIN Users AS USR ON USR.ID = PRO.ID_User
WHERE EQU.ID = :ID');
$sql->execute(array('ID' => $_GET['ID']));
$resultat = $sql->fetch();
echo '
<div class="wrapper">
<div class="table">

<div class="row header">
<div class="cell">
Nom d\'equipement
</div>
<div class="cell">
Type
</div>
<div class="cell">
Modele
</div>
<div class="cell">
Fabricant
</div>
</div>

<div class="row">
<div class="cell">
'.$resultat['tool'].'
</div>
<div class="cell">
'.$resultat['type'].'
</div>
<div class="cell">
'.$resultat['model'].'
</div>
<div class="cell">
'.$resultat['maker'].'
</div>
</div>

</div>

<div class="table">

<div class="row header green">
<div class="cell">
Numero d\'identification
</div>
<div class="cell">
Numero series
</div>
<div class="cell">
Couleur
</div>
<div class="cell">
Longueur
</div>
<div class="cell">
Lot
</div>
</div>

<div class="row">
<div class="cell">
'.$resultat['ID_Equipment'].'
</div>
<div class="cell">
'.$resultat['serial_maker'].'
</div>
<div class="cell">
'.$resultat['Color'].'
</div>
<div class="cell">
'.$resultat['Longuer'].'
</div>
<div class="cell">
Pas de lot
</div>
</div>
</div>

<div class="table">

<div class="row header blue">
<div class="cell">
Login de Proprietaire
</div>
<div class="cell">
Adresse
</div>
<div class="cell">
Code Postal
</div>
<div class="cell">
Ville
</div>
</div>

<div class="row">
<div class="cell">
'.$resultat['logi_n'].'
</div>
<div class="cell">
'.$resultat['address'].'
</div>
<div class="cell">
'.$resultat['Code_postale'].'
</div>
<div class="cell">
'.$resultat['Ville'].'
</div>
</div>
</div>
<div class="table">

<div class="row header">
<div class="cell">
Date D\'achat
</div>
<div class="cell">
Date de Fabrication
</div>
<div class="cell">
Date de fin de vie
</div>
<div class="cell">
Date de 1ere utilisation
</div>
</div>

<div class="row">
<div class="cell">
'.$resultat['buy_date'].'
</div>
<div class="cell">
'.$resultat['date_of_manufacture'].'
</div>
<div class="cell">
'.$resultat['date_end'].'
</div>
<div class="cell">
'.$resultat['date_commissioning'].'
</div>
</div>
</div>
';
include 'Etat_display.php';
}
?>
</div>
