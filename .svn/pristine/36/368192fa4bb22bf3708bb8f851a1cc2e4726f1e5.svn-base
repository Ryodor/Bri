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

echo '
<div class="wrapper">
<form methode="GET">
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
'.$resultat['tool'].'</br>
<label>
<span class="custom-dropdown custom-dropdown--white">
   <select name="tool" class="custom-dropdown__select custom-dropdown__select--white">
       <option value="CORDE">CORDE</option>
       <option value="HERNAIS">HERNAIS</option>
       <option value="EQUIPMENTS DIVERS">EQUIPMENTS DIVERS</option>
       <option value="CASQUE">CASQUE</option>
        <option value="EXPRESSE ET ANNEAU">EXPRESSE ET ANNEAU</option>
        <option value="EQUIPMENTS METALIQUES">EQUIPMENTS METALIQUES</option>
   </select>
</span>
</label>
</div>
<div class="cell">
'.$resultat['type'].'<br/>
<input class="button" type="submit" name="type" id="2" onclick="modif(2)"/>
</div>
<div class="cell">
'.$resultat['model'].'<br/>
<input class="button" type="submit" name="modele" id="3" onclick="modif(3)"/>
</div>
<div class="cell">
'.$resultat['maker'].'<br/>
<input class="button" type="submit" name="fabricant" id="4" onclick="modif(4)"/>
</div>
</div>
</div>

<div class="table">

<div class="row header green">
<div class="cell">
Numero d\'identification
</div>
<div class="cell">
Login de Proprietaire
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
</div>

<div class="row">
<div class="cell">
'.$resultat['ID_Equipment'].'<br/>
</div>
<div class="cell">
'.$resultat['logi_n'].'<br/>
<input class="button" type="submit" name="login" id="5" onclick="modif(5)"/>
<input type=hidden name="login2" value='.$resultat['logi_n'].'>
<input type=hidden name="ID2" value='.$resultat['ID'].'>
</div>
<div class="cell">
'.$resultat['serial_maker'].'<br/>
<input class="button" type="submit" name="numero_serie" id="6" onclick="modif(6)"/>
</div>
<div class="cell">
'.$resultat['Signe_distanctif'].'<br/>
<input class="button" name="signe_distanctif" type="submit" name="signe_distanctif" id="7" onclick="modif(7)"/>
</div>
<div class="cell">
'.$resultat['name'].'<br/>
<input class="button" name="nom_lot" type="submit" name="nom_lot" id="8" onclick="modif(8)"/>
</div>
</div>
</div>

<div class="table">

<div class="row header blue">
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
Date de 1ere utiliation
</div>
</div>

<div class="row">
<div class="cell">
'.$resultat['buy_date'].'<br/>
<input class="button" name="date1" type="submit" name="date1" id="14" onclick="modif(14)"/>
</div>
<div class="cell">
'.$resultat['date_of_manufacture'].'<br/>
<input class="button" name="date2" type="submit" name="date2" id="15" onclick="modif(15)"/>
</div>
<div class="cell">
'.$resultat['date_end'].'<br/>
<input class="button" name="date3" type="submit" name="date3" id="16" onclick="modif(16)"/>
</div>
<div class="cell">
'.$resultat['date_commissioning'].'<br/>
<input class="button" name="date4" type="submit" name="date4" id="17" onclick="modif(17)"/>
</div>
</div>
</div>
<input class="button" type="submit" name="Valider"  value="modif">
</form>
</div>
';
}
else  {
$sql = $pdo->prepare('SELECT * FROM Equipments AS EQU
JOIN Details AS DET ON DET.ID_equipment = EQU.ID
JOIN Proprietaire_Equipment AS PRO ON PRO.ID_Equipment=EQU.ID
JOIN Users AS USR ON USR.ID = PRO.ID_User
WHERE EQU.ID = :ID');
$sql->execute(array('ID' => $_GET['ID']));
$resultat = $sql->fetch();
$sql1 = $pdo->prepare('SELECT COUNT(*) AS QUA FROM Lot_Equipments WHERE ID_Lot = :ID_LOT');
$sql1->execute(array('ID_LOT' => $resultat['LOT_ID']));
$resultat1 = $sql1->fetch();
echo '
<div class="wrapper">
<form methode="GET">
<div class="table">
<div class="row header">
<div class="cell">
Nom d\'equipement
</div>
<div class="cell">
Login de Proprietaire
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
'.$resultat['logi_n'].'<br/>
<input class="button" name="login1" type="submit" id="2" onclick="modif(2)"/>
<input type=hidden name="login2" value='.$resultat['logi_n'].'>
<input type=hidden name="ID2" value='.$resultat['ID'].'>
</div>
<div class="cell">
'.$resultat['type'].'<br/>
<input class="button" name="type" type="submit" id="3" onclick="modif(3)"/>
</div>
<div class="cell">
'.$resultat['model'].'<br/>
<input class="button" name="modele" type="submit" id="4" onclick="modif(4)"/>
</div>
<div class="cell">
'.$resultat['maker'].'<br/>
<input class="button" name="fabricant" type="submit" id="5" onclick="modif(5)"/>
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
'.$resultat['ID_Equipment'].'<br/>
</div>
<div class="cell">
'.$resultat['serial_maker'].'<br/>
<input class="button" name="numero_serie" type="submit" id="6" onclick="modif(6)"/>
</div>
<div class="cell">
'.$resultat['Color'].'<br/>
<input  class="button" name="color" type="submit" id="7" onclick="modif(7)"/>
</div>
<div class="cell">
'.$resultat['Longuer'].'<br/>
<input  class="button" name="longueur" type="submit" id="8" onclick="modif(8)"/>
</div>
<div class="cell">
Pas de lot pour les cordes
</div>
</div>
</div>
<div class="table">

<div class="row header blue">
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
Date de 1ere utiliation
</div>
</div>

<div class="row">
<div class="cell">
'.$resultat['buy_date'].'<br/>
<input class="button" name="date1" type="submit" id="13" onclick="modif(13)"/>
</div>
<div class="cell">
'.$resultat['date_of_manufacture'].'<br/>
<input class="button" name="date2" type="submit" id="14" onclick="modif(14)"/>
</div>
<div class="cell">
'.$resultat['date_end'].'<br/>
<input class="button" name="date3" type="submit" id="15" onclick="modif(15)"/>
</div>
<div class="cell">
'.$resultat['date_commissioning'].'<br/>
<input class="button" name="date4" type="submit" id="16" onclick="modif(16)"/>
</div>
</div>
</div>
<input class="button" name="Valider" type="submit" value="modif">
</form>
</div>
';
}
?>
