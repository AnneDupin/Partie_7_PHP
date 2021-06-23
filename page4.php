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



<?php
session_start();
if(isset($_POST['pseudo']) && isset($_POST['password'])){
$_SESSION['password'] = $_POST['password'];
$_SESSION['pseudo'] = $_POST['pseudo'];

}
?>

<p>Le pseudo est : <?= $_SESSION['pseudo'];  ?></p>
<p>Le mot de passe  est : <?= $_SESSION['password'];  ?></p>

<a href="index.php">BACK</a>