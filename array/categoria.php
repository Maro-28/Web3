<?php

$categoria = array(
        '1' => array(
                'id' => 1,
                'categoria' => "Tortas"
        ),

        '2'=> array(
            'id' => 2,
            'categoria' => "Cookies"
        ),

        '3'=> array(
            'id' => 3,
            'categoria' => "Surtido"
        ),

        '4'=> array(
            'id' => 4,
            'categoria' => "Otros"
        ),
    );


echo json_encode($categoria);

?>
