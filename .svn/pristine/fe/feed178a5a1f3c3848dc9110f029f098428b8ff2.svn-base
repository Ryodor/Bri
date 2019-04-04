<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <link rel="stylesheet" href="../css/nav.css">
      <link rel="stylesheet" href="../css/admin.css">
       <title>Page d'accueil</title>
     </head>
     <body>
<?php
session_start();

if (isset($_SESSION['login']))
{
include "nav.php";
echo '<div id="nav">
 <a href="#" id="admin" value="admin">'.$_SESSION["login"].'</a>
 <a href="admin.php?connexion=Deconnection" id="Deconnection" value="Deconnection">Deconnection</a>
</div>';
if ($_GET['connexion'] == "Deconnection")
{
  session_destroy();
  echo '<script>alert("Vous allez etre deconnecter")</script>';
  header('Refresh: 0; url=connection.php');
}
}
else {
  echo '<script>alert("VOUS AVEZ PAS LE DROIS ACCER A CETTE PAGE ,Vous allez etre diriger ver la page connexion")</script>';
  header('Refresh: 1; url=connection.php');
}
 include "footer.php"; ?>
