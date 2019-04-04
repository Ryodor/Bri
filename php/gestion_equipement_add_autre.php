<?php
echo '
<div class="wrapper">
<form methode="GET">
<div class="table">
<div class="row header">
<div class="cell">
Nom d\'equipement
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
<label>
<span class="custom-dropdown custom-dropdown--white">
   <select name="Nom" class="custom-dropdown__select custom-dropdown__select--white">
       <option value="HERNAIS">HERNAIS</option>
       <option value="EQUIPMENTS DIVERS">EQUIPMENTS DIVERS</option>
       <option value="CASQUE">CASQUE</option>
        <option value="EXPRESSE ET ANNEAU">EXPRESSE ET ANNEAU</option>
        <option value="EQUIPMENTS METALIQUES">EQUIPMENTS METALIQUES</option>
   </select>
</span>
</label>
</div>
<div class="cell">
<input type="text" name="type" class="input" required>
</div>
<div class="cell">
<input type="text" name="modele" class="input" required>
</div>
<div class="cell">
<input type="text" name="fabricant" class="input" required>
</div>
</div>

</div>

<div class="table">

<div class="row header green">
<div class="cell">
Numero d\'identification
</div>
<div class="cell">
Login de Proprietaire
</div>
<div class="cell">
Numero series
</div>
<div class="cell">
Signe distinctif
</div>
<div class="cell">
Lot
</div>
</div>

<div class="row">
<div class="cell">
'.$_SESSION['ID'].'
</div>
<div class="cell">
<input type="text" name="login" class="input" required>
</div>
<div class="cell">
<input type="number" name="Numero_serie" class="input" required>
</div>
<div class="cell">
<input type="text" name="Signe_distanctif" class="input" required>
</div>
<div class="cell">
<input type="text" name="nom_lot" class="input" required>
</div>
</div>
</div>

<div class="table">

<div class="row header blue">
<div class="cell">
Frequence de controle
</div>
<div class="cell">
Date D\'achat
</div>
<div class="cell">
Date de Fabrication
</div>
<div class="cell">
Date de fin de vie
</div>
<div class="cell">
Date de 1ere utiliation
</div>
</div>

<div class="row">
<div class="cell">
<input type="text" name="controle" class="input" required>
</div>
<div class="cell">
<input type="date" name="date1" class="input" required>
</div>
<div class="cell">
<input type="date" name="date2" class="input" required>
</div>
<div class="cell">
<input type="date" name="date3" class="input" required>
</div>
<div class="cell">
<input type="date" name="date4" class="input" required>
</div>
</div>
</div>
<input class="button" name="Valider3" type="submit" value="Ajoute">
</form>
</div>
';
  ?>
