</head>
     <body>
 <img id="bri" src="../image/logo.png" alt="B.R.I">
       <img class="etna" src="../image/image.jpeg" alt="etna">
<nav>
<ul>
     <li><a href="adminalert.php">Accueil</a></li>
        <li><a href="gestion_users.php">Gestion des users</a></li>
        <li><a href="gestionequipement.php">Gestion des equipements</a></li>
<li><a href="alerte_controller_history2.php">Historique des controles</a></li>
    <?php
        include 'connexion_database.php';
        $sql1 = $pdo->prepare('SELECT COUNT(*) AS NUM
        FROM Details AS DET
        JOIN Equipments AS EQU
        ON EQU.ID = DET.ID_Equipment
        JOIN Proprietaire_Equipment AS PRO ON DET.ID_Equipment = PRO.ID_Equipment
        JOIN Users AS USR ON USR.ID = PRO.ID_User
        WHERE DATEDIFF(date_end,NOW()) < 30;');
        $sql1->execute();
        $resultat1 = $sql1->fetch();
        echo '<li><a href="alertevie.php">Alerte de duree de vie ('.$resultat1['NUM'].')</a></li>';?>
	  <?php
	  include 'connexion_database.php';
$sql1 = $pdo->prepare('SELECT COUNT(*) AS NUM
FROM Controle AS ctrl
        JOIN Equipments AS EQU ON ctrl.ID_Equipment = EQU.ID
        JOIN Details AS DET
        ON EQU.ID = DET.ID_Equipment
JOIN Proprietaire_Equipment AS PRO ON DET.ID_Equipment = PRO.ID_Equipment
JOIN Users AS USR ON USR.ID = PRO.ID_User
        WHERE DATEDIFF(date_next_controle,NOW()) < 30;');
$sql1->execute();
$resultat1 = $sql1->fetch();
        echo '<li><a href="alertcontrol.php">Alerte des controles ('.$resultat1['NUM'].')</a></li>';?>
      </ul>
   </nav>
<center>
