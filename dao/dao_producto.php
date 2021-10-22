<?php

function daoGuardarProducto($datos = array()){
    $productos = obtenerProductos(); 
    $id=date('Ymdhisu');
    $productos[$id] = array(
        'id' => $id,
        'nombre' => $datos['nombre'],
        'disponibilidad' => isset($datos['activa'])?'TRUE':'FALSE',
        'imagen' => 'imagenes/'.$id.'/'.$datos['imagen'],
        'descripcion' => $datos['descripcion'],
        'categoria' => $datos['categoria'],
        'subcategoria' => $datos['subcategoria'],
        'precio' => $datos['precio']
    ); 
    file_put_contents(DIR_BASE.'array/producto.json',json_encode($productos));
    return $id;   
}

function obtenerProductos(){
    if(file_exists(DIR_BASE.'array/producto.json')){ 
        $producto = json_decode(file_get_contents(DIR_BASE.'array/producto.json'),TRUE);	
    }else{
        $producto = array();
    }

    return $producto;

}

function obtenerProducto($id){
    $producto = obtenerProductos();  
    return $producto[$id];

}

function daoModificarProducto($datos = array(), $id){
    
    $productos = obtenerProductos(); 
    $productos[$id] = array(
        'id' => $id,
        'nombre' => $datos['nombre'],
        'disponibilidad' => isset($datos['activa'])?'TRUE':'FALSE',
        'imagen' => 'imagenes/'.$id.'/'.$datos['imagen'],
        'descripcion' => $datos['descripcion'],
        'categoria' => $datos['categoria'],
        'subcategoria' => $datos['subcategoria'],
        'precio' => $datos['precio']
    ); 
    file_put_contents(DIR_BASE.'array/producto.json',json_encode($productos));
    return $id;   

}

function borrarProducto($id){
    $producto = obtenerProductos(); 
    unset($producto[$id]);
    $fp = fopen(DIR_BASE.'array/producto.json','w');
    fwrite($fp, json_encode($producto));
    fclose($fp);
}