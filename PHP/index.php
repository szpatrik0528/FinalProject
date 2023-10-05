<?php 
header('Content-Type: text/html; charset=utf-8');
$menuItem = filter_input(INPUT_GET, "menuItem", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
var_dump($menuItem);
require_once ('menu.php');
require_once('head.php');
require_once('body.php');
?>
<link rel="stylesheet" href="main.css"/>
<script src="main.js">