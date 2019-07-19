<?php
/**
 * Created by Mahdi Hamdi.
 * User: M4hdi
 * Date: 7/18/2019
 * MVC FreamWork
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define("LIB_DIR" , ROOT.DS.'library');
define("APP_DIR" , ROOT.DS.'app');
define("APP_CON" , ROOT.DS.'app'.DS.'controller');
error_reporting(E_ALL - E_NOTICE);

$url = $_GET['url'];
include LIB_DIR.DS.'Load.php';
spl_autoload_register(array('Load', 'autoload'));

Router::route($url);


?>