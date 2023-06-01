<?php
require_once 'app/model/boutique.model.php';
require_once 'app/model/databaseConnection.php';

if (empty($_GET['num']) || !ctype_alnum($_GET['num'])) {
    die('Aucun numéro de pokemon transmis ou numéro incorrect');
}

$databaseConnection = getDatabaseConnection();

$numBiere = $_GET['num'];
$biere=getTextBiere($databaseConnection, $numBiere);
$page_title = $_GET['num'];
ob_start();
require_once 'app/view/produit.view.php';
$content=ob_get_clean();
require_once "app/view/common/layout.php";