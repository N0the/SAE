<?php
session_start();
require_once 'app/model/boutique.model.php';
require_once 'config.php';
require_once 'app/model/databaseConnection.php';

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

$databaseConnection = getDatabaseConnection();

$toutes_bieres=getBiere($databaseConnection);

$page_title = 'Boutique';
ob_start();
require_once 'app/view/boutique.view.php';
$content=ob_get_clean();
require_once "app/view/common/layout.php";