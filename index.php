<?php

$_SESSION['prenom'] = 'Anne';
$_SESSION['nom'] = 'Dupin';
$_SESSION['age'] = 29;
echo $_SESSION['prenom'] = 'Anne';
echo '<td>'.'<br>'; 
echo $_SESSION['nom'] = 'Dupin';
?>

<?php 

setcookie('pseudo', '12345', time() + 365*24*3600, null, null, false, true);
setcookie('login', 'ASMR_ANSI', time() + 365*24*3600, null, null, false, true); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 7</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Partie 7 - Descodeuses - PHP</h1>

<h2>Exercice 1</h2>
<p>Sur une même page, affichez votre user_agent, l'adresse ip de votre serveur et le nom de votre serveur.</p>
<?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$browser = get_browser(null, true);
print_r($browser);
?>

<?php  echo '<td>'.'<br>';?>

<?php
 echo 'L adresse IP de l utilisateur est : '.$_SERVER['REMOTE_ADDR'];
?>

<?php  echo '<td>'.'<br>';?>

<?php
  function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }
  echo 'L\'adresse IP de l\'utilisateur est : '.getIp();
?>

<?php  echo '<td>'.'<br>';?>

 <?php
echo gethostname(); // doit afficher i.e : sandie

?>  

<h2>Exercice 2</h2>
<p>Créez deux variables de session (nom, prénom). Affichez les sur la même page.</p>


<h2>Exercice 3</h3>
<p>Créez trois variables de session (nom, prénom et âge). Au clic sur un lien, affichez l'âge sur une autre page.</p>
<?= 'Je suis '. $_SESSION['nom'].' '.$_SESSION['prenom'].' '.'.';
echo '<td>'.'<br>';
?>
                  
<a href="page1.php">Mon âge est :</a>

<h2>Exercice 4</h2>
<p>Créez un formulaire demandant un pseudo et mot de passe. Au clic sur le bouton "envoyer", affichez le pseudo et mot de passe sur une autre page.</p>


              <form class="" method="post" action="page4.php">
                <label for="pseudo">Entrez un pseudo :</label>
                <input type="text" name="pseudo" id="pseudo">
                <label for="password">Entrez un mot de passe:</label>
                <input type="password" name="password" id="password">
                  <button type="submit">Envoyer</button>
              </form>        



<h2>Exercice 5</h2>
<p>Intialisez deux cookies : pseudo et login. Créez deux champs afin de donner une valeur aux cookies. Afficher ces cookie sur la même page.</p>

<h3>Login</h3>
<p>Ton pseudo est <?php echo $_COOKIE['pseudo']; ?>.</p>
<p>Ton login est <?php echo $_COOKIE['login'];?> .</p>


<h2>Exercice 6</h2>
<p>Intialisez deux cookies : pseudo et login. Créez deux champs afin de donner une valeur aux cookies. Afficher ces cookie sur une autre page.</p>

<h3>Login</h3>
<form class="" method="post" action="page6.php">
                  <button type="submit">Go Cookies</button>
              </form>   

</body>
</html>