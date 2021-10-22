<?php

$subCategoria = array(
        '1' => array(
                'id' => 1,
                'subcategoria' => "Sin Tacc"
        ),
        '2' => array(
                'id' => 2,
                'subcategoria' => "Vegano"
        ),
        '3' => array(
                'id' => 0,
                'subcategoria' => "Ninguno"
        )
        );
echo json_encode($subCategoria);

?>