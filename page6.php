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

<h2>Ex6</h2>


<?php
session_start();
if(isset($_POST['pseudo']) && isset($_POST['login'])){
$_SESSION['pseudo'] = $_POST['pseudo'];
$_SESSION['login'] = $_POST['login'];

}
?>

<p>Ton pseudo est <?= $_COOKIE['pseudo']; ?></p>
<p>Ton login est <?= $_COOKIE['login'];  ?></p>


<a href="index.php">BACK</a>
</body>
</html>