<?php ob_start(); // Make sure you put this in line 1 with no space

session_start();
// session_destroy();

define("DS", DIRECTORY_SEPARATOR);
define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");
defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", __DIR__ . DS . "uploads");

define("DB_HOST", "127.0.0.1");
define("DB_USER", "Mszauer_ECOM");
define("DB_PASS", "*****");
define("DB_NAME", "ECOM");
define("DB_PORT", "3306");
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

require_once("functions.php");
require_once("cart.php");


 ?>