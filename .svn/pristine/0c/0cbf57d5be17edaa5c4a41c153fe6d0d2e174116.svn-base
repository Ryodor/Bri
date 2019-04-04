<?php
 include 'connexion_database.php';
if ($resultat['tool'] == "CORDE")
{
  $sql = $pdo->prepare('SELECT * FROM Equipments AS EQU
    JOIN Details AS DET ON EQU.ID = DET.ID_Equipment
  JOIN Controle AS CON ON EQU.ID = CON.ID_Equipment
  JOIN Etat_Corde AS ETC ON CON.ID_Etat_Corde = ETC.ID WHERE EQU.ID = :ID ORDER BY CON.ID_Etat_Corde DESC LIMIT 1');
  $sql->execute(array('ID' => $_GET['ID']));
  if ($resultat = $sql->fetch())
  {
echo '<h3>Dernier Controle : '.$resultat['date_control'].'</h3>
<div class="table">

<div class="row header green">
<div class="cell">
Signe dusuers
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
Etat
</div>
<div class="cell">
Remarque de Controle
</div>
</div>

<div class="row">
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
'; if ($resultat['Etat_name'] == "Rebus")
{
  echo ''.$resultat['Etat_name'].'<br><br>
  <a class="button" href="gestion_equipement_delete2.php?ID='.$_GET['ID'].'">Supprimer</a>';
}
else {
  echo ''.$resultat['Etat_name'].'';
}
echo '
</div>
<div class="cell">
<p>'.$resultat['Remarque_controle'].'<p>
</div>
</div>
</div>';
}
}
else if ($resultat['tool'] == "HERNAIS")
{
  echo "2";
  $sql = $pdo->prepare('SELECT * FROM Equipments AS EQU
  JOIN Details AS DET ON EQU.ID = DET.ID_Equipment
  JOIN Controle AS CON ON EQU.ID = CON.ID_Equipment
  JOIN Etat_harnais AS ETC ON CON.ID_Etat_harnais = ETC.ID WHERE EQU.ID = :ID ORDER BY CON.ID_Etat_harnais DESC LIMIT 1');
  $sql->execute(array('ID' => $_GET['ID']));
  if ($resultat = $sql->fetch())
  {
  echo '<h3>Dernier Controle : '.$resultat['date_control'].'</h3>
  <div class="table">
  <div class="row header green">
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
  Etat
  </div>
  <div class="cell">
  Remarque de Controle
  </div>
  </div>

  <div class="row">
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
  '; if ($resultat['Etat_name'] == "Rebus")
  {
    echo ''.$resultat['Etat_name'].'<br><br>
    <a class="button" href="gestion_equipement_delete2.php?ID='.$_GET['ID'].'">Supprimer</a>';
  }
  else {
    echo ''.$resultat['Etat_name'].'';
  }
  echo '
  </div>
  <div class="cell">
  <p>'.$resultat['Remarque_controle'].'<p>
  </div>
  </div>
  </div>';
  }
}
  else
  {
    echo '3';
    $sql = $pdo->prepare('SELECT * FROM Equipments AS EQU
      JOIN Details AS DET ON EQU.ID = DET.ID_Equipment
    JOIN Controle AS CON ON EQU.ID = CON.ID_Equipment
    JOIN Etat_Autre AS ETC ON CON.ID_Etat_Autre = ETC.ID WHERE EQU.ID = :ID ORDER BY CON.ID_Etat_Autre DESC LIMIT 1');
    $sql->execute(array('ID' => $_GET['ID']));
    if ($resultat = $sql->fetch())
    {
    echo '<h3>Dernier Controle : '.$resultat['date_control'].'</h3>
    <div class="table">

    <div class="row header green">
    <div class="cell">
    Etat de securite
    </div>
    <div class="cell">
    Etat du fonctionnement
    </div>
    <div class="cell">
    Etat
    </div>
    <div class="cell">
    Remarque de Controle
    </div>
    </div>

    <div class="row">
    <div class="cell">
    '.$resultat['Etat_1'].'
    </div>
    <div class="cell">
    '.$resultat['Etat_2'].'
    </div>
    <div class="cell">
    '; if ($resultat['Etat_name'] == "Rebus")
    {
      echo ''.$resultat['Etat_name'].'<br><br>
      <a class="button" href="gestion_equipement_delete2.php?ID='.$_GET['ID'].'">Supprimer</a>';
    }
    else {
      echo ''.$resultat['Etat_name'].'';
    }
    echo '
    </div>
    <div class="cell">
    <p>'.$resultat['Remarque_controle'].'<p>
    </div>
    </div>
    </div>';
  }
}
?>
