<?php
session_start();
if (isset($_SESSION['login']))
{
echo '
<div class="wrapper">
<form methode="GET">
<div class="table">

<div class="row header">
<div class="cell">
Nom de Proprietaire
</div>
<div class="cell">
Numero d\'identification
</div>
<div class="cell">
Nom d\'equipement
</div>
<div class="cell">
type
</div>
</div>

<div class="row">
<div class="cell">
'.$resultat['logi_n'].'
</div>
<div class="cell">
'.$_GET['ID'].'
<input type=hidden name="numero_id" value='.$_GET['id'].'>
</div>
<div class="cell">
'.$resultat['tool'].'
<input type=hidden name="nom_epi" value='.$resultat['tool'].'>
</div>
<div class="cell">
'.$resultat['type'].'
</div>
</div>

</div>

<div class="table">

<div class="row header green">
<div class="cell">
Nom de Controleur
</div>
<div class="cell">
Date de controle
</div>
<div class="cell">
Remarques de controleur
</div>
<div class="cell">
Date de prochaine controle
</div>
</div>

<div class="row">
<div class="cell">
'.$_SESSION['login'].'
</div>
<div class="cell">
'.$date.'
<input type=hidden name="datenow" value='.$date.'>
</div>
<div class="cell">
<input type="text" name="Remarques" class="input" required></textarea>
</div>
<div class="cell">
<input type="date" name="date1" class="input" required>
</div>
</div>
</div>

<div class="table">

<div class="row header blue">
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
Zones pelucheuses
</div>
<div class="cell">
Etat de l\'ame
</div>
<div class="cell">
Etat
</div>
</div>

<div class="row">
<div class="cell">
<label>
<span class="custom-dropdown custom-dropdown--white">
   <select name="etat1" class="custom-dropdown__select custom-dropdown__select--white" required>
       <option value="RAS">RAS</option>
       <option value="Mineuers">Mineuers</option>
       <option value="Majeurs">Majeurs</option>
       <option value="Definitive">Definitive</option>
   </select>
</span>
</label>
</div>
<div class="cell">
<label>
<span class="custom-dropdown custom-dropdown--white">
   <select name="etat2" class="custom-dropdown__select custom-dropdown__select--white">
       <option value="RAS">RAS</option>
       <option value="Mineuers">Mineuers</option>
       <option value="Majeurs">Majeurs</option>
       <option value="Definitive">Definitive</option>
   </select>
</span>
</label>
</div>
<div class="cell">
<label>
<span class="custom-dropdown custom-dropdown--white">
   <select name="etat3" class="custom-dropdown__select custom-dropdown__select--white">
       <option value="RAS">RAS</option>
       <option value="Mineuers">Mineuers</option>
       <option value="Majeurs">Majeurs</option>
       <option value="Definitive">Definitive</option>
   </select>
</span>
</label>
</div>
<div class="cell">
<label>
<span class="custom-dropdown custom-dropdown--white">
   <select name="etat4" class="custom-dropdown__select custom-dropdown__select--white">
       <option value="RAS">RAS</option>
       <option value="Mineuers">Mineuers</option>
       <option value="Majeurs">Majeurs</option>
       <option value="Definitive">Definitive</option>
   </select>
</span>
</label>
</div>
<div class="cell">
<label>
<span class="custom-dropdown custom-dropdown--white">
   <select name="etat5" class="custom-dropdown__select custom-dropdown__select--white">
       <option value="RAS">RAS</option>
       <option value="une partie de l\'ame apparente">une partie de l\'ame apparente</option>
       <option value="Zone eventuelles de reptures internes">Zone eventuelles de reptures internes</option>
       <option value="Elle possede une hernaie">Elle possede une hernaie</option>
   </select>
</span>
</label>
</div>
<div class="cell">
<label>
<span class="custom-dropdown custom-dropdown--white">
   <select name="etat6" class="custom-dropdown__select custom-dropdown__select--white" required>
       <option value="Utilisable">Utilisable</option>
       <option value="Reforme">Reforme</option>
       <option value="Rebus">Rebus</option>
   </select>
</span>
</label>
</div>
</div>
</div>
<input class="button" name="Etat" type="submit" value="Valider">
</form>
</div>
';
}
else {
  echo '<script>alert("VOUS AVEZ PAS LE DROITS ACCES A CETTE PAGE \n Vous allez etre rediriger vers la page connexion")</script>';
  header('Refresh: 0; url=connection.php');
}
?>
