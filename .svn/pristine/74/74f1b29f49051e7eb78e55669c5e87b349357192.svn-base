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

            <title>Historique des Controles</title>
          </head>
          <body>
            <?php
            include 'connexion_database.php';
            session_start();
             if (isset($_SESSION['login']))
             {
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
               include "nav_controller.php";
               include 'serch_controller.php';
               $sql = $pdo->prepare('SELECT *,COUNT(*) AS NUM FROM Equipments AS EQU
               JOIN Details AS DET ON EQU.ID = DET.ID_Equipment WHERE EQU.ID = :ID');
               $sql->execute(array('ID' => $_GET['ID']));
               $resultat1 = $sql->fetch();
               if (isset($_GET['Valider']))
               {
                 if ($resultat1['NUM'] == 0)
                 echo "<script>alert('le numero d\'identification n\'existe pas');</script>";
                 else {
                    $i = 0;
                   if ($resultat1['tool'] == "CORDE")
                   {
                     $sql = $pdo->prepare('SELECT * FROM Equipments AS EQU
                     JOIN Controle AS CON ON EQU.ID = CON.ID_Equipment
                     JOIN Etat_Corde AS ETC ON CON.ID_Etat_Corde = ETC.ID WHERE EQU.ID = :ID');
                     $sql->execute(array('ID' => $_GET['ID']));
                     while ($resultat = $sql->fetch())
                     {
                       if ($i == 0)
                       {
                         echo '<div class="wrapper">
                         <div class="table">
                         <div class="row header">
                         <div class="cell">
                         Nom d\'equipement
                         </div>
                         <div class="cell">
                         Numero D\'identification
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
                         '.$resultat1['tool'].'
                         </div>
                         <div class="cell">
                         '.$_GET['ID'].'
                         </div>
                         <div class="cell">
                         '.$resultat1['type'].'
                         </div>
                         <div class="cell">
                         '.$resultat1['model'].'
                         </div>
                         <div class="cell">
                         '.$resultat1['maker'].'
                         </div>
                         </div>
                         </div> <div class="table">
                          <div class="row header green">
                          <div class="cell">
                          Login de Controleur
                          </div>
                          <div class="cell">
                          Signe d\'usures
                          </div>
                          <div class="cell">
                          Brulures
                          </div>
                          <div class="cell">
                          Coupures
                          </div>
                          <div class="cell">
                          Zone pelucheuses
                          </div>
                          <div class="cell">
                          Etat de l\'ame
                          </div>
                          <div class="cell">
                          Date de controle
                          </div>
                          <div class="cell">
                          Remarque de Controleur
                          </div>
                          </div>';
                       }
                   echo '

                   <div class="row">
                   <div class="cell">
                   '.$resultat['controller_name'].'
                   </div>
                   <div class="cell">
                   '.$resultat['Signe_dusuers'].'
                   </div>
                   <div class="cell">
                   '.$resultat['brulures'].'
                   </div>
                   <div class="cell">
                   '.$resultat['coupures'].'
                   </div>
                   <div class="cell">
                   '.$resultat['zone'].'
                   </div>
                   <div class="cell">
                   '.$resultat['etat'].'
                   </div>
                   <div class="cell">
                   '.$resultat['date_control'].'
                   </div>
                   <div class="cell">
                   <p>'.$resultat['Remarque_controle'].'</p>
                   </div>
                   </div>
';
                   $i++;
                   }
                   echo '</div></div>';
                   }
                   else if ($resultat1['tool'] == "HERNAIS")
                   {
                     $sql = $pdo->prepare('SELECT * FROM Equipments AS EQU
                     JOIN Controle AS CON ON EQU.ID = CON.ID_Equipment
                     JOIN Etat_harnais AS ETC ON CON.ID_Etat_harnais = ETC.ID WHERE EQU.ID = :ID');
                     $sql->execute(array('ID' => $_GET['ID']));
                     while ($resultat = $sql->fetch())
                     {
                       if ($i == 0)
                       {
                         echo '<div class="wrapper">
                         <div class="table">

                         <div class="row header">
                         <div class="cell">
                         Nom d\'equipement
                         </div>
                         <div class="cell">
                         Numero D\'identification
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
                         '.$resultat1['tool'].'
                         </div>
                         <div class="cell">
                         '.$_GET['ID'].'
                         </div>
                         <div class="cell">
                         '.$resultat1['type'].'
                         </div>
                         <div class="cell">
                         '.$resultat1['model'].'
                         </div>
                         <div class="cell">
                         '.$resultat1['maker'].'
                         </div>
                         </div>
                         </div>
                         <div class="table">
                                <div class="row header green">
                                <div class="cell">
                                Login de Controleur
                                </div>
                                <div class="cell">
                                Etat sangles
                                </div>
                                <div class="cell">
                                Etat coutures
                                </div>
                                <div class="cell">
                                Etat boucles
                                </div>
                                <div class="cell">
                                Etat points encordement
                                </div>
                                <div class="cell">
                                Etat element conforts
                                </div>
                                <div class="cell">
                                Date de Controle
                                </div>
                                <div class="cell">
                                Remarque de Controleur
                                </div>
                                </div>';
                       }
                     echo '

                     <div class="row">
                     <div class="cell">
                     '.$resultat['controller_name'].'
                     </div>
                     <div class="cell">
                     '.$resultat['Etat_sangles'].'
                     </div>
                     <div class="cell">
                     '.$resultat['Etat_coutuers'].'
                     </div>
                     <div class="cell">
                     '.$resultat['Etat_boucles'].'
                     </div>
                     <div class="cell">
                     '.$resultat['Etat_points_encordement'].'
                     </div>
                     <div class="cell">
                     '.$resultat['Etat_element_conforts'].'
                     </div>
                     <div class="cell">
                     '.$resultat['date_control'].'
                     </div>
                     <div class="cell">
                     <p>'.$resultat['Remarque_controle'].'</p>
                     </div>
                     </div>
                     ';
                     $i++;
                     }
                     echo '</div></div>';
                   }
                     else
                     {
                       $sql = $pdo->prepare('SELECT * FROM Equipments AS EQU
                       JOIN Controle AS CON ON EQU.ID = CON.ID_Equipment
                       JOIN Etat_Autre AS ETC ON CON.ID_Etat_Autre = ETC.ID WHERE EQU.ID = :ID');
                       $sql->execute(array('ID' => $_GET['ID']));
                       while ($resultat = $sql->fetch())
                       {
                         if ($i == 0)
                         {
                           echo '<div class="wrapper">
                           <div class="table">
                           <div class="row header">
                           <div class="cell">
                           Nom d\'equipement
                           </div>
                           <div class="cell">
                           Numero d\'identification
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
                           '.$resultat1['tool'].'
                           </div>
                           <div class="cell">
                           '.$_GET['ID'].'
                           </div>
                           <div class="cell">
                           '.$resultat1['type'].'
                           </div>
                           <div class="cell">
                           '.$resultat1['model'].'
                           </div>
                           <div class="cell">
                           '.$resultat1['maker'].'
                           </div>
                           </div>
                           </div>
                           <div class="table">
                           <div class="row header green">
                           <div class="cell">
                           Login de Controleur
                           </div>
                           <div class="cell">
                           Etat de securite
                           </div>
                           <div class="cell">
                           Etat du fonctionnement
                           </div>
                           <div class="cell">
                           Date de Controle
                           </div>
                           <div class="cell">
                           Remarques de Controleur
                           </div>
                           </div>';
                         }
                       echo '

                       <div class="row">
                       <div class="cell">
                       '.$resultat['controller_name'].'
                       </div>
                       <div class="cell">
                       '.$resultat['Etat_1'].'
                       </div>
                       <div class="cell">
                       '.$resultat['Etat_2'].'
                       </div>
                       <div class="cell">
                       '.$resultat['date_control'].'
                       </div>
                       <div class="cell">
                       <p>'.$resultat['Remarque_controle'].'</p>
                       </div>
                       </div>
                       ';
                       $i++;
                     }
                     echo '</div></div>';
                   }
                   if ($i == 0)
                   {
                      echo '<script>alert("CET EQUIPEMENTS N\'A PAS ETE ENCORE CONTROLE")</script>';
                   }
                 }
               }
             }
               else
               {
                 echo '<script>alert("VOUS AVEZ PAS LE DROITS D\'ACCES A CETTE PAGE ,Vous allez etre rediriger vers la page connexion")</script>';
                 header('Refresh: 1; url=connection.php');
               }
?>
</center>
    </body>
    </html>
