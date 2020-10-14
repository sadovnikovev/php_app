<?php
define('ROOT', __DIR__);
require_once ROOT.'/core/router.php';
require_once ROOT.'/core/db.php';
require_once ROOT.'/core/smarty.php';
require_once ROOT.'/core/ErrorLights.php';

ErrorLights::getConnection();
DB::getConnection();

$smarty = new MySmarty;
$smarty->connectDir();

$router=new Router();
$router->run();
?>
