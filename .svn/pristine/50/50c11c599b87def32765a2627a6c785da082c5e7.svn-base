<!DOCTYPE html>
<html lang="fr">
  <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <meta charset="utf-8">
   <link rel="stylesheet" href="../css/login.css">
   <title>Page de Connexion</title>
    </head>
     <body>
<center>
     <div class="logo">
<img class="bri" src="../image/logo.png" alt="B.R.I">
<img class="etna" src="../image/image.jpeg" alt="etna">

     </div>
     <div class="connect">
<h1>Connectez-vous</h1>
  <Script>
   $(function(){
       var $form_inputs =   $('form input');
       var $rainbow_and_border = $('.rain, .border');
       $form_inputs.bind('focus', function(){
	   $rainbow_and_border.addClass('end').removeClass('unfocus start');
	 });
       $form_inputs.bind('blur', function(){
	   $rainbow_and_border.addClass('unfocus start').removeClass('end');
	 });
       $form_inputs.first().delay(800).queue(function() {
	   $(this).focus();
	 });
     });
  </script>
      <div class="rain">
         <div class="border start">
             <form method="POST"><br>
                   <label for="login">Login</label>
                   <input name="login" type="text" required/>
                   <label for="mdp">Mot de passe</label>
                   <input name="mdp" type="password"/>
                   <input type="submit" name="connecter" value="Se connecter" required/>
              </form>
           </div>
        </div>
      </div>
       <div class="connection">
	 <?php connexion(); ?>
          </div>
   <?php include "footer.php"; ?>
   

<?php
   function connexion() {
   if (isset($_POST['connecter'])) {
	 include('connexion_database.php');
	 $pass_hash = md5($_POST['mdp']);
	 $req = $pdo->prepare('SELECT * FROM Users WHERE logi_n = ?');
	 $req->execute([$_POST['login']]);
	 $resultat = $req->fetch();
      	 if ($_POST['login'] != NULL && $_POST['mdp'] != NULL) {
	   if ($resultat['logi_n'] == $_POST['login'] && ($resultat['Role'] == 2 || $resultat['Role'] == 1)) {
	     if ($resultat['pass_word'] === $pass_hash) {
         session_start();
	       $_SESSION['login'] = $resultat['logi_n'];
         $_SESSION['Role'] = $resultat['Role'];
         if ($resultat['logi_n'] === "Admin")
         {
           echo '<script>alert("Vous allez etre diriger vers la page d\'admin")</script>';
           header('Refresh: 0; url=adminalert.php');
         }
         else {
           echo '<script>alert("Vous allez etre diriger vers la page de controleur")</script>';
           header('Refresh: 0; url=controller.php');
         }
	     }
	     else {
	       echo '<script>alert("Mot de passe incorrect.")</script>';
	     }
	   }
	   else {

	     echo '<script>alert("Login incorrect.")</script>';
	   }
	 }
	 else {
	   echo '<script>alert("Veuillez remplir tous les champs.")</script>';
	 }
       }

 }
?>
