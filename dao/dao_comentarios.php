<?php

function guardarComentario($datos = array()){
    $comentarios = obtenerComentarios(); 
    $comentarios[date('Ymdhisu')] = array(
        'id' => date('Ymdhisu'),
        'nombre' => $datos['nombre'],
        'comentario' => $datos['comentario'],
        'producto' => $datos['producto'],
        'email'=> $datos['email'],
        'fecha' => date('d-m-Y H:i:s')
    ); 
    $fp = fopen('array/comentarios.json','w');
    fwrite($fp, json_encode($comentarios));
    fclose($fp);

}

function obtenerComentarios(){
    if(file_exists(DIR_BASE.'array/comentarios.json')){ 
        $comentarios = json_decode(file_get_contents(DIR_BASE.'array/comentarios.json'),TRUE);	
    }else{
        $comentarios = array();
    }

    return $comentarios;

}

function obtenerComentario($id){
    $comentarios = obtenerComentarios();  
    return $comentarios[$id];

}

function modificarComentario($datos = array(), $id){
    $comentarios = obtenerComentarios(); 
    $comentarios[$id] = array(
        'nombre' => $datos['nombre'],
        'comentario' => $datos['comentario'],
        'producto' => $datos['producto'],
    );
    $fp = fopen(DIR_BASE.'array/comentarios.json','w');
    fwrite($fp, json_encode($comentarios));
    fclose($fp);
}

function borrarComentario($nombre){
    $comentarios = obtenerComentarios(); 
    unset($comentarios[$nombre]);
    $fp = fopen(DIR_BASE.'array/comentarios.json','w');
    fwrite($fp, json_encode($comentarios));
    fclose($fp);
}