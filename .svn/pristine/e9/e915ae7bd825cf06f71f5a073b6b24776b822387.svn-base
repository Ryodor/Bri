<?php
include 'connexion_database.php';
if (isset($_GET['ID']))
$_SESSION['ID'] = $_GET['ID'];
$sql = $pdo->prepare('DELETE FROM Lot_Equipments WHERE ID_Equipment = :ID');
$sql->execute(array('ID' => $_SESSION['ID']));
$sql = $pdo->prepare('DELETE FROM Details WHERE ID_Equipment = :ID');
$sql->execute(array('ID' => $_SESSION['ID']));
$sql = $pdo->prepare('DELETE FROM Proprietaire_Equipment WHERE ID_Equipment = :ID');
$sql->execute(array('ID' => $_SESSION['ID']));
$sql = $pdo->prepare('DELETE FROM Controle WHERE ID_Equipment = :ID');
$sql->execute(array('ID' => $_SESSION['ID']));
$sql = $pdo->prepare('DELETE FROM Equipments WHERE ID = :ID');
$sql->execute(array('ID' => $_SESSION['ID']));
echo "<script>alert('L\'EPI A ETE BIEN SUPPRIMER');</script>";
header('Refresh: 0; url=gestionequipement.php');
?>
