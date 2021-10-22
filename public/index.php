<?php
include_once("../config/config.php");
include_once (DIR_BASE."app/Controller.php");

$page = $_GET['page'] ?? 'inicio';
$action = $_GET['action'] ?? 'index';

 if ($page == 'inicio' ){
    $inicioController = new InicioController();
    $inicioController-> runAction($action);
} else if ($page == 'contacto' ){
    $contactoController = new ContactoController();
    $contactoController-> runAction($action);
} else if ($page == 'qsm' ){
    $quienesomosController = new QuienesSomosController();
    $quienesomosController-> runAction($action);
}else if ($page == 'tienda' ){
    $tiendaController = new TiendaController();
    $tiendaController-> runAction($action);
}else{
    require_once (DIR_BASE."public/404.html");
}