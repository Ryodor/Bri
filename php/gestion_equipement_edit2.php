<?php
include 'connexion_database.php';
session_start();
$i = 0;
$sql = $pdo->prepare("SELECT *,COUNT(*) AS NUM FROM Users WHERE logi_n = :ID AND ROLE = 3");
if (isset($_GET['login1']))
$login = $_GET['login1'];
else
$login = $_GET['login2'];
echo $login;
$sql->execute(array('ID' => $login));
$resultat1 = $sql->fetch();

if ($resultat1['NUM'] != 0)
{
if (isset($_GET['tool']))
{
  $sql = $pdo->prepare('UPDATE Equipments SET tool = :tool WHERE ID = :ID');
  $sql->execute(array('ID' => $_SESSION['ID'],
  'tool' => $_GET['tool']));
  $i = 1;
}
if (isset($login))
{
  $sql = $pdo->prepare('SELECT COUNT(*) AS NUM FROM Proprietaire_Equipment WHERE ID_User = :ID_User AND ID_Equipment = :ID;');
  $sql->execute(array('ID_User' => $_GET['ID2'],
  'ID' => $_SESSION['ID']));
  $resultat = $sql->fetch();
  if($resultat['NUM'] != 0)
  {
    $sql = $pdo->prepare('UPDATE Proprietaire_Equipment SET ID_User = :ID_User WHERE ID_Equipment = :ID');
    $sql->execute(array('ID_User' => $resultat1['ID'],
    'ID' => $_SESSION['ID']));
  }
  $i = 1;
}
if (isset($_GET['nom_lot']))
{
  $sql = $pdo->prepare('SELECT COUNT(*) AS NUM FROM Lot WHERE name = :nom_lot;');
  $sql->execute(array('nom_lot' => $_GET['nom_lot']));
  $resultat = $sql->fetch();
  if($resultat['NUM'] != 0)
  {
    $sql = $pdo->prepare('INSERT INTO Lot_Equipments (ID_Equipment,ID_Lot)
    VALUE (:ID_Equipment,:ID_lot)');
    $sql->execute(array('ID_Equipment' => $_SESSION['ID'],
    'ID' => $resultat['ID']));
  }
  else {
    $sql = $pdo->prepare('INSERT INTO Lot (name)
    VALUE (:name)');
    $sql->execute(array('name' => $_GET['nom_lot']));
    $sql = $pdo->prepare('SELECT COUNT(*) AS NUM FROM Lot WHERE name = :nom_lot;');
    $sql->execute(array('nom_lot' => $_GET['nom_lot']));
    $resultat = $sql->fetch();
    $sql = $pdo->prepare('INSERT INTO Lot_Equipments (ID_Equipment,ID_Lot)
    VALUE (:ID_Equipment,:ID_lot)');
    $sql->execute(array('ID_Equipment' => $_SESSION['ID'],
    'ID' => $resultat['ID']));
  }
}
if (isset($_GET['type']))
{
  $sql = $pdo->prepare('UPDATE Equipments SET type = :type WHERE ID = :ID');
  $sql->execute(array('ID' => $_SESSION['ID'],
  'type' => $_GET['type']));
  $i = 1;
}
if (isset($_GET['modele']))
{
  $sql = $pdo->prepare('UPDATE Details SET model = :model WHERE ID_Equipment = :ID');
  $sql->execute(array('ID' => $_SESSION['ID'],
  'model' => $_GET['modele']));
  $i = 1;
}
if (isset($_GET['fabricant']))
{
  $sql = $pdo->prepare('UPDATE Details SET maker = :maker WHERE ID_Equipment = :ID');
  $sql->execute(array('ID' => $_SESSION['ID'],
  'maker' => $_GET['fabricant']));
  $i = 1;
}
if (isset($_GET['numero_serie']))
{
  $sql = $pdo->prepare('UPDATE Details SET serial_maker = :serial_maker WHERE ID_Equipment = :ID');
  $sql->execute(array('ID' => $_SESSION['ID'],
  'serial_maker' => $_GET['numero_serie']));
  $i = 1;
}
if (isset($_GET['color']))
{
  $sql = $pdo->prepare('UPDATE Details SET serial_maker = :serial_maker WHERE ID_Equipment = :ID');
  $sql->execute(array('ID' => $_SESSION['ID'],
  'serial_maker' => $_GET['numero_serie']));
  $i = 1;
}
if (isset($_GET['longueur']))
{
  $sql = $pdo->prepare('UPDATE Details SET Longuer = :Longueur WHERE ID_Equipment = :ID');
  $sql->execute(array('ID' => $_SESSION['ID'],
  'Longueur' => $_GET['longueur']));
  $i = 1;
}
if (isset($_GET['signe_distanctif']))
{
  $sql = $pdo->prepare('UPDATE Details SET Signe_distanctif = :Signe_distanctif WHERE ID_Equipment = :ID');
  $sql->execute(array('ID' => $_SESSION['ID'],
  'Signe_distanctif' => $_GET['signe_distanctif']));
  $i = 1;
}
if (isset($_GET['date1']))
{
  $sql = $pdo->prepare('UPDATE Details SET buy_date = :date1 WHERE ID_Equipment = :ID');
  $sql->execute(array('ID' => $_SESSION['ID'],
  'date1' => $_GET['date1']));
  $i = 1;
}
if (isset($_GET['date2']))
{
  $sql = $pdo->prepare('UPDATE Details SET date_of_manufacture = :date2 WHERE ID_Equipment = :ID');
  $sql->execute(array('ID' => $_SESSION['ID'],
  'date2' => $_GET['date2']));
  $i = 1;
}
if (isset($_GET['date3']))
{
  $sql = $pdo->prepare('UPDATE Details SET date_end = :date3 WHERE ID_Equipment = :ID');
  $sql->execute(array('ID' => $_SESSION['ID'],
  'date3' => $_GET['date3']));
  $i = 1;
}
if (isset($_GET['date4']))
{
  $sql = $pdo->prepare('UPDATE Details SET date_commissioning = :date4 WHERE ID_Equipment = :ID');
  $sql->execute(array('ID' => $_SESSION['ID'],
  'date4' => $_GET['date4']));
  $i = 1;
}
if ($i == 1)
echo "<script>alert('VOTRE MODIFICATION A BIEN ETE ENREGISTRER');</script>";
//header('Refresh: 0; url=gestionequipement.php');
}
else {
  echo "<script>alert('Le login de Proprietaire n\'existe pas');</script>";
}
?>
