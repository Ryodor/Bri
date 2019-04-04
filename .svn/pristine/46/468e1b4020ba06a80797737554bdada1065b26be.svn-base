<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="change_menu.js"></script>
    <script type="text/javascript" src="adduser.js"></script>
    <meta charset="utf-8">
     <link rel="stylesheet" href="../css/menu0.css">
        <link rel="stylesheet" href="../css/nav_controller.css">
           <link rel="stylesheet" href="../css/controlle.css">
          <link rel="stylesheet" href="../css/menu.css">

            <title>Gestion des Controle</title>
          </head>
          <body>

   <?php
   session_start();
echo '<div id="navcontrolle">
 <a href="#" id="admin" value="admin">'.$_SESSION["login"].'</a>
 <a href="admin.php?connexion=Deconnection" id="Deconnection" value="Deconnection">Deconnection</a>
</div>';
if ($_GET['connexion'] == "Deconnection")
  {
    session_destroy();
    echo '<script>alert("Vous allez etre deconnecter")</script>';
    header('Refresh: 0; url=connection.php');
  }
if (isset($_SESSION['login']))
    {
   include 'connexion_database.php';

    if (!empty($_GET['ID']))
      $_SESSION['ID'] = $_GET['ID'];
   include "nav_controller.php";
   include 'serch_controller.php';
          $sql = $pdo->prepare('SELECT COUNT(*) AS NUM FROM Equipments WHERE ID = :ID');
          $sql->execute(array('ID' => $_SESSION['ID']));
          $resultat = $sql->fetch();
          if (isset($_GET['Valider']))
          {
              if ($resultat['NUM'] == 0)
              echo "<script>alert('le numero d\'identification n\'existe pas');</script>";
              else
              {
                include 'gestion_controller_EPI_result.php';
              }
          }
          if ($_GET['Etat'] == "Valider")
          {
            if ($_GET['nom_epi'] == "CORDE")
            {
              $sql = $pdo->prepare('INSERT INTO Etat_Corde (Signe_dusuers,brulures,coupures,zone,etat)
                VALUE (:etat1,:etat2,:etat3,:etat4,:etat5)');
                $sql->execute(array('etat1' => $_GET['etat1'],
                'etat2' => $_GET['etat2'],
                'etat3' => $_GET['etat3'],
                'etat4' => $_GET['etat4'],
                'etat5' => $_GET['etat5']));
                $sql = $pdo->prepare('SELECT ID FROM Etat_Corde WHERE zone = :zone ORDER BY ID DESC LIMIT 1');
                $sql->execute(array('zone' => $_GET['etat4']));
                $resultat1 = $sql->fetch();
              $sql = $pdo->prepare('INSERT INTO Controle (ID_equipment, controller_name, date_control ,
                Remarque_controle,Date_next_controle,Etat_name,ID_Etat_Corde)
              VALUE (:ID , :nom, :date1 ,:remarque, :date2,:Etat_name,:ID_Etat_Corde)');
              $sql->execute(array('ID' => $_SESSION['ID'],
              'nom' => $_SESSION['login'],
              'date1' => $_GET['datenow'],
              'remarque' => $_GET['Remarques'],
              'date2' => $_GET['date1'],
                'ID_Etat_Corde' => $resultat1['ID'],
              'Etat_name' => $_GET['etat6']));
                echo '<script>alert("VOTRE CONTROLE A BIEN ETE RENGESTRER")</script>';
                header('Refresh: 0; url=gestion_controller_EPI_display.php');
            }
            else if ($_GET['nom_epi'] == "HERNAIS")
            {
                $sql = $pdo->prepare('INSERT INTO Etat_harnais (Etat_sangles,Etat_coutuers,
                Etat_boucles,Etat_points_encordement,Etat_element_conforts)
                VALUE (:etat1,:etat2,:etat3,:etat4,:etat5)');
                $sql->execute(array('etat1' => $_GET['etat1'],
                'etat2' => $_GET['etat2'],
                'etat3' => $_GET['etat3'],
                'etat4' => $_GET['etat4'],
                'etat5' => $_GET['etat5']));
                $sql = $pdo->prepare('SELECT ID FROM Etat_harnais WHERE Etat_sangles = :etat1 ORDER BY ID DESC LIMIT 1');
                $sql->execute(array('etat1' => $_GET['etat1']));
                $resultat1 = $sql->fetch();
              $sql = $pdo->prepare('INSERT INTO Controle (ID_equipment, controller_name, date_control ,
                Remarque_controle,Date_next_controle,Etat_name,ID_Etat_harnais)
              VALUE (:ID , :nom, :date1 ,:remarque, :date2,:Etat_name,:Etat_harnais)');
              $sql->execute(array('ID' => $_SESSION['ID'],
              'nom' => $_SESSION['login'],
              'date1' => $_GET['datenow'],
              'remarque' => $_GET['Remarques'],
              'date2' => $_GET['date1'],
                'Etat_harnais' => $resultat1['ID'],
              'Etat_name' => $_GET['etat6']));
                echo '<script>alert("VOTRE CONTROLE A BIEN ETE RENGESTRER")</script>';
                header('Refresh: 0; url=gestion_controller_EPI_display.php');
            }
            else {
              $sql = $pdo->prepare('INSERT INTO Etat_Autre (Etat_1,Etat_2)
                VALUE (:etat1,:etat2)');
                $sql->execute(array('etat1' => $_GET['etat1'],
                'etat2' => $_GET['etat2']));
                $sql = $pdo->prepare('SELECT ID FROM Etat_Autre WHERE Etat_1 = :etat1 ORDER BY ID DESC LIMIT 1');
                $sql->execute(array('etat1' => $_GET['etat1']));
                $resultat1 = $sql->fetch();
              $sql = $pdo->prepare('INSERT INTO Controle (ID_equipment, controller_name, date_control,
                Remarque_controle,Date_next_controle,Etat_name,ID_Etat_autre)
              VALUE (:ID , :nom, :date1 ,:remarque, :date2,:Etat_name,:Etat_autre)');
              $sql->execute(array('ID' => $_SESSION['ID'],
              'nom' => $_SESSION['login'],
              'date1' => $_GET['datenow'],
              'remarque' => $_GET['Remarques'],
              'date2' => $_GET['date1'],
                'Etat_autre' => $resultat1['ID'],
              'Etat_name' => $_GET['etat3']));
                echo '<script>alert("VOTRE CONTROLE A BIEN ETE RENGESTRER")</script>';
                header('Refresh: 0; url=gestion_controller_EPI_display.php');
                }

            }
          }
else {
echo '<script>alert("VOUS AVEZ PAS LE DROITS D\'ACCES A CETTE PAGE ,Vous allez etre rediriger vers la page connexion")</script>';
header('Refresh: 0; url=connection.php');
}
?>
</center>
    </body>
    </html>
