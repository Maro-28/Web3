<?php

function obtenerSubsubcategoria(){
    if(file_exists(DIR_BASE.'array/subCategoria.json')){ 
        $subcategoria = json_decode(file_get_contents(DIR_BASE.'array/subCategoria.json'),TRUE);	
    }else{
        $subcategoria = array();
    }

    return $subcategoria;

}

function borrarSubCategoria($id){
    $subsubCats = obtenerSubsubcategoria(); 
    unset($subsubCats[$id]);
    $fp = fopen(DIR_BASE.'array/subCategoria.json','w');
    fwrite($fp, json_encode($subsubCats));
    fclose($fp);
}

function daoGuardarSubCategoria($datos = array()){
    $subCats = obtenerSubsubcategoria(); 
    $id=date('Ymdhisu');
    $subCats[$id] = array(
        'id' => $id,
        'subcategoria' => $datos['nombre'],
    ); 
    file_put_contents(DIR_BASE.'array/subCategoria.json',json_encode($subCats));
    return $id;   
}

?>