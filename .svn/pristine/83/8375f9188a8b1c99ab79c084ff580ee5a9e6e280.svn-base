<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
           <link rel="stylesheet" href="../css/gestion_users.css">
              <link rel="stylesheet" href="../css/nav.css">
                 <link rel="stylesheet" href="../css/menu2.css">
                   <script type="text/javascript" src="change_menu.js"></script>
              <script type="text/javascript" src="test.js"></script>
            <title>Gestion des Users</title>
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
    header('Refresh: 1; url=connection.php');
  }
    echo '
      <div class="menu">
      <h1> Recherche user </h1>
     <form methode="GET">
     <input class="recherche" name="rechercher" type="text" placeholder="Recherche"/>
   <input class="button" name="valider" type="submit" value="Valider">
<a href="add.php" <button class="button" type="button">Ajouter</button></a>
</form>
   </div>
   <div class="table">';
       include "gestion_users2.php";
   echo '</div>
      </center>';
    if (isset($_GET['Modifier']))
    {
      $i = 0;
      if ($_GET['0'])
      {
      $up = ("UPDATE Users SET logi_n = ? WHERE logi_n = ?");
      $req = $co->prepare($up);
      $req->execute([$_GET['0'],$_GET['8']]);
      $i = 1;
     }
     if ($_GET['1'])
     {
     $up = ("UPDATE Users SET first_name = ? WHERE logi_n = ?");
     $req = $co->prepare($up);
     $req->execute([$_GET['1'],$_GET['8']]);
     $i = 1;
    }
    if ($_GET['2'])
    {
    $up = ("UPDATE Users SET second_name = ? WHERE logi_n = ?");
    $req = $co->prepare($up);
    $req->execute([$_GET['2'],$_GET['8']]);
   }
   if ($_GET['3'])
   {
   $up = ("UPDATE Users SET date_birthday =? WHERE logi_n = ?");
   $req = $co->prepare($up);
   $req->execute([$_GET['3'],$_GET['8']]);
   $i = 1;
  }
  if ($_GET['4'])
  {
  $up = ("UPDATE Users SET address =? WHERE logi_n = ?");
  $req = $co->prepare($up);
  $req->execute([$_GET['4'],$_GET['8']]);
  $i = 1;
 }
 if ($_GET['5'])
 {
 $up = ("UPDATE Users SET Code_postale =? WHERE logi_n = ?");
 $req = $co->prepare($up);
 $req->execute([$_GET['5'],$_GET['8']]);
 $i = 1;
}
if ($_GET['6'])
{
$up = ("UPDATE Users SET Ville =? WHERE logi_n = ?");
$req = $co->prepare($up);
$req->execute([$_GET['6'],$_GET['8']]);
$i = 1;
}
if ($_GET['select'])
{
$up = ("UPDATE Users SET Role =? WHERE logi_n = ?");
$req = $co->prepare($up);
$req->execute([$_GET['select'],$_GET['8']]);
$i = 1;
}

if ($i == 1)
{
  echo '<script>alert("VOS MODIFICATION ONT ETE PRISES EN COMPTES")</script>';
  header('Refresh: 0; url=gestion_users.php');
}
}
     }
      else {
        echo '<script>alert("VOUS AVEZ PAS LE DROITS D\'ACCES A CETTE PAGE, Vous allez etre rediriger vers la page connexion")</script>';
        header('Refresh: 1; url=connection.php');
      }
include "footer.php"
?>

