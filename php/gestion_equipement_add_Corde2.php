<?php
$sql = $pdo->prepare("SELECT *,COUNT(*) AS NUM FROM Users WHERE logi_n = :login AND ROLE = 3");
$sql->execute(array('login' => $_GET['login']));
$resultat1 = $sql->fetch();

if ($resultat1['ID'] != 0)
{
$sql = $pdo->prepare('INSERT INTO Equipments (ID,tool,type)
VALUE (:ID,:nom,:type)');
$sql->execute(array('ID' => $_SESSION['ID'],
'nom' => $_GET['Nom'],
'type' => $_GET['type']));
$sql = $pdo->prepare('INSERT INTO Details
(ID_Equipment,model,maker,serial_maker,Signe_distanctif,color,Longuer,buy_date,date_of_manufacture,date_end,frequency_of_control,date_commissioning)
VALUE (:ID,:model,:fabricant,:Numero_serie,"il n\'y a pas de signe",:color,:Longueur,:date1,:date2,:date3,:frequence,:date4)');
$sql->execute(array('ID' => $_SESSION['ID'],
'model' => $_GET['modele'],
'fabricant' => $_GET['fabricant'],
'Numero_serie' => $_GET['Numero_serie'],
'color' => $_GET['color'],
'Longueur' => $_GET['Longueur'],
'date1' => $_GET['date1'],
'date2' => $_GET['date2'],
'date3' => $_GET['date3'],
'date4' => $_GET['date4'],
'frequence' => $_GET['controle']));
$sql = $pdo->prepare('INSERT INTO Proprietaire_Equipment (ID_User,ID_Equipment)
VALUE (:ID_User,:ID)');
$sql->execute(array('ID_User' => $resultat1['ID'],
'ID' => $_SESSION['ID']));
echo "<script>alert('VOTRE EPI A ETE BIEN ENREGISTRER');</script>";
header('Refresh: 0; url=gestionequipement.php');
}
else {
echo "<script>alert('Le login de Proprietaire n\'existe pas');</script>";
}
?>
