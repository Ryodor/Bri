  <!DOCTYPE html>
  <html>
    <head>
      <script type="text/javascript" src="change_menu.js"></script>
      <script type="text/javascript" src="adduser.js"></script>
      <meta charset="utf-8">
       <link rel="stylesheet" href="../css/menu0.css">
          <link rel="stylesheet" href="../css/nav.css">
<link rel="stylesheet" href="../css/gestion_equipement.css">
            <link rel="stylesheet" href="../css/menu.css">

              <title>Gestion d'equipement</title>
            </head>
            <body>
<?php

     session_start();
     echo '<div id="nav2">
 <a href="#" id="admin" value="admin">'.$_SESSION["login"].'</a>
 <a href="admin.php?connexion=Deconnection" id="Deconnection2" value="Deconnection">Deconnection</a>
</div>';
     if ($_GET['connexion'] == "Deconnection")
       {

	 session_destroy();
	 echo '<script>alert("Vous allez etre deconnecter")</script>';
	 header('Refresh: 1; url=connection.php');
       }
     include "nav.php";
?>

     <?php

     if (isset($_SESSION['login']))
      {
     include 'connexion_database.php';
      if (!empty($_GET['ID']))
        $_SESSION['ID'] = $_GET['ID'];

     include 'menu.php';
            $sql = $pdo->prepare('SELECT COUNT(*) AS NUM FROM Equipments WHERE ID = :ID');
            $sql->execute(array('ID' => $_SESSION['ID']));
            $resultat = $sql->fetch();
            if (isset($_GET['Valider']))
            {

              if ($_GET['select'] === "1")
              {

                if ($resultat['NUM'] == 0)
                echo "<script>alert('le numero d\'identification n\'existe pas');</script>";
                else
                  include 'gestion_equipement_serch.php';
              }
              else if ($_GET['select'] === "2")
              {
                if ($resultat['NUM'] == 0)
                  echo '<script>creat();</script>';
                  else
                  echo "<script>alert('le numero d\'identification existe deja');</script>";
              }
              else if ($_GET['select'] === "3")
              {

                if ($resultat['NUM'] == 0)
                echo "<script>alert('le numero d\'identification n\'existe pas');</script>";
                else
                  include 'gestion_equipement_delete.php';
              }
              else if ($_GET['select'] === "4")
              {
                if ($resultat['NUM'] == 0)
                {
                  echo "<script>alert('le numero d\'identification n\'existe pas');</script>";
                }
                else {
                      include 'gestion_equipement_edit.php';
                }

              }
            }
              if ($_GET['select'] === "Autre")
                  include 'gestion_equipement_add_autre.php';
              else if ($_GET['select'] === "Corde"){
                    include 'gestion_equipement_add_Corde.php';
                  }
              if ($_GET['Valider3'] === "Ajoute")
              include 'gestion_equipement_add_autre2.php';
              else if ($_GET['Valider4'] === "Ajoute")
              include 'gestion_equipement_add_Corde2.php';
              if ($_GET['Valider'] === "Supprime")
                include 'gestion_equipement_delete2.php';
              if ($_GET['Valider'] === "modif")
                {
                  include 'gestion_equipement_edit2.php';
                }
}
else {
  echo '<script>alert("VOUS AVEZ PAS LE DROITS D\'ACCES A CETTE PAGE, Vous allez etre diriger vers la page connexion")</script>';
  header('Refresh: 1; url=connection.php');
}
            ?>
</center>
    </body>
    </html>

