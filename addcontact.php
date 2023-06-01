<?php
session_start();
require_once "config.php";
ob_start();
$messagevalidation="Votre message a bien été envoyé !!!";

$_SESSION ['success'] = true;

header("location:". URL . "contact.php");
exit;

insertNewContact($POST['surname'], $_POST['name'], $_POST['email'], $_POST['message']);


?>