<?php

$page_title = 'Evenement';
ob_start();
require_once 'app/view/evenement.view.php';
$content=ob_get_clean();
require_once "app/view/common/layout.php";
?>