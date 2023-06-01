<?php
require_once 'config.php';

$page_title = 'Accueil';
ob_start();
require_once 'app/view/main.view.php';
$content=ob_get_clean();
require_once "app/view/common/layout.php";
?>