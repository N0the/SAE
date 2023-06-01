<?php
session_start();
require_once "config.php";


if (empty($_SESSION['success']) || !$_SESSION['success']) {
    $formulaire = "app/view/formulaire.view.php";
    unset($_SESSION['success']);
}else{
    $formulaire = "app/view/validation.view.php";
    unset($_SESSION['success']);
}
$page_title = 'Contact';
ob_start();
require_once 'app/view/contact.view.php';
$content = ob_get_clean();
require_once "app/view/common/layout.php";
?>