<?php
session_start();
require_once "config.php";

$page_title = 'Commande';
ob_start();
require_once 'app/view/commande.view.php';
$content = ob_get_clean();
require_once "app/view/common/layout.php";
?>