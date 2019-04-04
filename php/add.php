
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
              <link rel="stylesheet" href="../css/gestion_users.css">
                   <link rel="stylesheet" href="../css/nav.css">
                      <link rel="stylesheet" href="../css/menu2.css">
               <title>Gestion des Users</title>
             </head>
             <body>

   <?php include "nav.php";
   session_start();
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
   ?>


         <div class="menu">
           <h1> Recherche user </h1>
        <form methode="GET">
        <input class="recherche" name="rechercher" type="text" placeholder="Recherche"/>
      <input class="button" name="valider" type="submit" value="Valider">
   <a href="add.php" <button class="button" type="button">Ajouter</button></a>
   </form>
      </div>

   <div class="table">
<form methode="GET">
<table><tr><th>Login</th><th>Password</th><th>Nom</th><th>Prenom</th><th>Date de naissance</th><th>Adresse</th><th>Code postale</th><th>Ville</th><th>Rôle</th><th></th></tr><tr><td><input class="input" placeholder="Entrer le login" name="input1" type="text" required></input></td><td><input placeholder="Entrer le Password" class="input" name="input2" type="text" required></input></td><td><input placeholder="Entrer le nom" class="input" name="input3" type="text" required></input></td><td><input placeholder="Entrer le prenom" class="input" name="input4" type="text" required></input></td><td><input class="input" name="input5" type="date" required></input></td><td><input placeholder="Entrer l'Adresse" class="input" name="input6" type="text" required></input></td><td><input placeholder="Entrer le code postale" class="input" name="input7" type="text" pattern="^[0-9]{5}$" title="Ex: 75000" required></input></td><td><input placeholder="Entrer la ville" class="input" name="input8" type="text" required></input></td><td><select name="select" class="custom-dropdown__select custom-dropdown__select--white">
<optgroup label="Rôle">
       <option value="2">Controleur</option>
       <option value="3">Proprietaire</option>
   <option value="1">Admin</option>
   </optgroup>
   </select></td><td><input class="button" name="valider2" type="submit" value="Valider"></td></tr></table>
</form>
   <?php addus(); ?>
    </div>
<?php include "footer.php" ?>

      <?php
   function addus() {
   include('codb.php');
   if (isset($_GET['valider2']))
    {
       if (isset($_GET['input1']) && isset($_GET['input2']) && isset($_GET['input3']) && isset($_GET['input4']) && isset($_GET['input5']) && isset($_GET['input6']) && isset($_GET['input7']) && isset($_GET['input8']) && isset($_GET['select'])) {
	 if ($_GET['input1'] != NULL && $_GET['input2'] != NULL && $_GET['input3'] != NULL && $_GET['input4'] != NULL && $_GET['input5'] != NULL && $_GET['input6'] != NULL && $_GET['input7'] != NULL && $_GET['input8'] != NULL &&$_GET['select']) {
	   $req = $co->prepare("INSERT INTO `Users`(`logi_n`, `pass_word`, `first_name`, `second_name`, `date_birthday`, `address`, `Code_postale`, `Ville`, `date_registration`, `date_last_connection`, `Role`) VALUES (?,MD5(?),?,?,?,?,?,?,NOW(),NOW(),?)");
	   $req->execute([$_GET['input1'],$_GET['input2'],$_GET['input3'],$_GET['input4'],$_GET['input5'],$_GET['input6'],$_GET['input7'],$_GET['input8'],$_GET['select']]);

	   echo '<script>alert("User enregistrée")</script>;';
	 }
	 else
	   echo '<script>alert("Veuillez remplir tous les champs")</script>;';
       }
   }
 }
   ?>
