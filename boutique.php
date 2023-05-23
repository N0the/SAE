<?php
session_start();

require_once 'config.php';
require_once 'app\model\databaseConnection.php';

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

$databaseConnection = getDatabaseConnection();



$page_title = 'Boutique';
