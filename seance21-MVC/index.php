<?php
require_once('config/config.php');
require_once('lib/core.php');

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";



$controller = isset($_REQUEST['controller']) ? safe($_REQUEST['controller']) : $config['default_controller'];


echo $controller;


// $function = 