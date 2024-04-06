<?php
require_once dirname(__DIR__, 1) . "/libraries/autoload.php";

use Models\Produit;

$parfums = new Produit();
$currentid = $_GET['id'];

$parfums->delete($currentid);



?>
<?php
require_once __DIR__ . "/layout/head.admin.php";
require_once __DIR__ . "/layout/header.admin.php";
?>
