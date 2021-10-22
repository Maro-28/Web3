<?php

include_once(DIR_BASE.'dao/dao_producto.php');

function businessModificarProducto($datos = array(), $id){
    if(!empty($_FILES['imagen'])){
        $datos['imagen'] = $_FILES['imagen']['name'];
    }
    daoModificarProducto($datos,$id);

    if(!empty($_FILES['imagen'])){
        if(!is_dir(DIR_BASE.'imagenes/'.$id)){
            mkdir(DIR_BASE.'imagenes/'.$id);
        }
        move_uploaded_file($_FILES['imagen']['tmp_name'],DIR_BASE.'imagenes/'.$id.'/'.$_FILES['imagen']['name']);
        if(file_exists(DIR_BASE.$datos['old_imagen'])){
            unlink(DIR_BASE.$datos['old_imagen']);
        }
    }
    /**var_dump($_FILES); die();*/
}


function businessGuardarProducto($datos = array()){

    if(!empty($_FILES['imagen'])){
        $datos['imagen'] = $_FILES['imagen']['name'];
    }
    $id = daoGuardarProducto($datos);
    
    if(!empty($_FILES['imagen'])){
        if(!is_dir(DIR_BASE.'imagenes/'.$id)){
            mkdir(DIR_BASE.'imagenes/'.$id);
        }
        move_uploaded_file($_FILES['imagen']['tmp_name'],DIR_BASE.'imagenes/'.$id.'/'.$_FILES['imagen']['name']);
        
    } 


}