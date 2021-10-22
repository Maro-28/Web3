<?php
include_once (DIR_BASE."app/Controller/InicioController.php");
include_once (DIR_BASE."app/Controller/ContactoController.php");
include_once (DIR_BASE."app/Controller/QuienesSomosController.php");
include_once (DIR_BASE."app/Controller/TiendaController.php");

abstract class Controller{

    public function runAction($action){
        if(method_exists($this,$action)){
            $this-> $action();
        } else {
            require_once '../public/404.html';
        }
    }


}