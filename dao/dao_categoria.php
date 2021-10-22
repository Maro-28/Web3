<?php
 

function ObtenerCategorias(){
    if(file_exists(DIR_BASE.'array/categoria.json')){ 
        $cats = json_decode(file_get_contents(DIR_BASE.'array/categoria.json'),TRUE);	
    }else{
        $cats = array();
    }

    return $cats;

}

function borrarCategoria($id){
    $cats = ObtenerCategorias(); 
    unset($cats[$id]);
    $fp = fopen(DIR_BASE.'array/categoria.json','w');
    fwrite($fp, json_encode($cats));
    fclose($fp);
}

function daoGuardarCategoria($datos = array()){
    $cats = ObtenerCategorias(); 
    $id=date('Ymdhisu');
    $cats[$id] = array(
        'id' => $id,
        'categoria' => $datos['nombre'],
    ); 
    file_put_contents(DIR_BASE.'array/categoria.json',json_encode($cats));
    return $id;   
}