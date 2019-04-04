<?php

include('codb.php');
session_start();

$user = $_GET['user'];
  print_r($user);

if (isset($_GET['user'])) {
  
  $dele = "DELETE FROM Proprietaire_Equipment WHERE ID_User = ?"; 
   $req = $co->prepare($dele);
  $req->execute([$_GET["user"]]);

   $dele2 = "DELETE FROM Users WHERE ID = ?"; 
   $req = $co->prepare($dele2);
   $req->execute([$_GET["user"]]);
  
  echo '<meta http-equiv="refresh" content="0;URL=gestion_users.php">';
}


?>