<?php
session_start();

if (!isset($_SESSION['nombreArticlesPanier']) || empty($_SESSION['nombreArticlesPanier'])) {
    $_SESSION['nombreArticlesPanier'] = 1;
}
if (!isset($_SESSION['hdd'])) {
    $_SESSION['hdd'] = 0;
}
if (!isset($_SESSION['ram'])) {
    $_SESSION['ram'] = 0;
}
if (!isset($_SESSION['screen'])) {
    $_SESSION['screen'] = 0;
}
if (!isset($_SESSION['computerMouse'])) {
    $_SESSION['computerMouse'] = 0;
}

if (isset($_GET['hdd']) && $_GET['hdd'] == 1) {
    $_SESSION['hdd']++;
}
if (isset($_GET['ram']) && $_GET['ram'] == 1) {
    $_SESSION['ram']++;
}
if (isset($_GET['screen']) && $_GET['screen'] == 1) {
    $_SESSION['screen']++;
}
if (isset($_GET['computerMouse']) && $_GET['computerMouse'] == 1) {
    $_SESSION['computerMouse']++;
}

$_SESSION["quantiteTotal"] = ($_SESSION['hdd']) + ($_SESSION['ram']) + ($_SESSION['screen']) + ($_SESSION['computerMouse']);

$_SESSION["totalCommande"] = ($_SESSION['hdd'] * 80) + ($_SESSION['ram'] * 75) + ($_SESSION['screen'] * 120) + ($_SESSION['computerMouse'] * 50);

if (isset($_GET['valider']) && $_GET['valider'] == 1) {
    $_SESSION['commande'] = "<h2>Commande validée pour " . $_SESSION['quantiteTotal'] . " article(s). <br> Montant total : " . $_SESSION["totalCommande"] . " €.</h2>";
    $_SESSION['nombreArticlesPanier'] = 0;
    $_SESSION["totalCommande"] = 0;
    $_SESSION['hdd'] = 0;
    $_SESSION['ram'] = 0;
    $_SESSION['screen'] = 0;
    $_SESSION['computerMouse'] = 0;
    $_SESSION['totalPanier'] = 0;
    header('Location: panier.php#afterValidate');
} else {
    header('Location: panier.php#articles');
}

if (isset($_GET['vider']) && $_GET['vider'] == 1) {
    $_SESSION['nombreArticlesPanier'] = 0;
    $_SESSION['hdd'] = 0;
    $_SESSION['ram'] = 0;
    $_SESSION['screen'] = 0;
    $_SESSION['computerMouse'] = 0;
    $_SESSION['totalPanier'] = 0;
    unset($_SESSION['commande']);
}
