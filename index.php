<?php 
header('Content-type: text/html; charset=utf-8');
require_once 'config/config.php';
require_once 'model/db.php';
// si no existe el controlador y la accion la carga desde el config
if(!isset($_GET["controller"])) $_GET["controller"] = constant("DEFAULT_CONTROLLER");
if(!isset($_GET["action"])) $_GET["action"] = constant("DEFAULT_ACTION");

// la ruta donde esta el controlador
$controller_path = 'controller/'.$_GET["controller"].'.php';
if(!file_exists($controller_path)) $controller_path = 'controller/'.constant("DEFAULT_CONTROLLER").'.php';

/* traer el controlador*/
require_once $controller_path;
$controllerName = $_GET["controller"].'Controller';
$controller = new $controllerName();

/* SI EXISTE LA ACCION (METODO) CARGA EL ARRAY CON LOS DATOS A MOSTRAR */
$dataToView["data"] = array();
if(method_exists($controller,$_GET["action"])) $dataToView["data"]
 = $controller->{$_GET["action"]}();


/* traer vistas */
require_once 'view/template/header.html';
require_once 'view/'.$controller->vista.'.php';
require_once 'view/template/footer.html';

?>
