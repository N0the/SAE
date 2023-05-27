<?php
session_start();
ob_start();
$page_title = 'Contact';

require_once "config.php";
require_once 'app/view/contact.view.php';
$content = ob_get_clean();
require_once "app/view/common/layout.php";

?>