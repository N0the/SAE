<?php

$page_title = 'Notre_histoire';
ob_start();
require_once 'app/view/notre_histoire.view.php';
$content=ob_get_clean();
require_once "app/view/common/layout.php";
?>