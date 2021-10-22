<?php

$productos = array(
        '1' => array(
                'id' => 1,
                'nombre' => "Torta Personalizada",
                'disponibilidad' => TRUE,
                'imagen' => 'imagenes/torta9.jpg',
                'descripcion' => "Tarta de Frutilla rellena con crema pastelera, decorada con crema chantilly",
                'categoria' => 1,
                'subcategoria' => 0,
                'precio' => '$2500'
        ),

        '2'=> array(
            'id' => 2,
            'nombre' => "Lemon Pie",
            'disponibilidad' => TRUE,
            'imagen' => 'imagenes/torta7.jpg',
            'descripcion' => "Clásica torta rellena con una suave crema de limón decorada con merengue italiano",
            'categoria' => 1,
            'subcategoria' => 0,
            'precio' => '$1500'
            
        ),

        '3'=> array(
            'id' => 3,
            'nombre' => "Cannoli",
            'disponibilidad' => TRUE,
            'imagen' => 'imagenes/torta8.jpg',
            'descripcion' => "Cannoli, podes pedir tu relleno de crema clásica de ricotta o crema pastelera",
            'categoria' => 4,
            'subcategoria' => 0,
            'precio' => '$700'
        ),

        '4'=> array(
            'id' => 4,
            'nombre' => "Pan dulces",
            'disponibilidad' => FALSE,
            'imagen' => 'imagenes/torta10.jpg',
            'descripcion' => "Pan dulce, con frutos secos y fruta abrillantada o con chips de chocolate",
            'categoria' => 4,
            'subcategoria' => 0,
            'precio' => '$500'
        ),
        '5'=> array(
            'id' => 5,
            'nombre' => "Cookies navideñas",
            'disponibilidad' => FALSE,
            'imagen' => 'imagenes/cookies1.jpg',
            'descripcion' => "Cookies de limon con glaseado navideño",
            'categoria' => 2,
            'subcategoria' => 0,
            'precio' => '$450'
        ),
        '6'=> array(
            'id' => 6,
            'nombre' => "Cookies con chips",
            'disponibilidad' => TRUE,
            'imagen' => 'imagenes/cookies2.jpg',
            'descripcion' => "Cookies con chips de chocolates",
            'categoria' => 2,
            'subcategoria' => 0,
            'precio' => '$400'
        ),
        '7'=> array(
            'id' => 7,
            'nombre' => "Mix de tortas",
            'disponibilidad' => TRUE,
            'imagen' => 'imagenes/mix1.jpg',
            'descripcion' => "Variedad de mini tortas de 4 gustos iguales o distintos",
            'categoria' => 3,
            'subcategoria' => 0,
            'precio' => '$3500'
        ),
        '8'=> array(
            'id' => 8,
            'nombre' => "Mix de tortas y galletitas",
            'disponibilidad' => TRUE,
            'imagen' => 'imagenes/mix2.jpg',
            'descripcion' => "Variedad de mini tortas y galletitas",
            'categoria' => 3,
            'subcategoria' => 0,
            'precio' => '$3000'
        ),

        '9'=> array(
            'id' => 9,
            'nombre' => "Medialunas",
            'disponibilidad' => TRUE,
            'imagen' => 'imagenes/medialunas.jpg',
            'descripcion' => "Medialunas Veganas hechas con Margarina",
            'categoria' => 4,
            'subcategoria' => 2,
            'precio' => '$500'
        
        ),

        '10'=> array(
            'id' => 10,
            'nombre' => "Cookies de chocolate sin TACC",
            'disponibilidad' => TRUE,
            'imagen' => 'imagenes/cookiestacc.jpg',
            'descripcion' => "Cookies marmoladas sin TACC",
            'categoria' => 2,
            'subcategoria' => 1,
            'precio' => '$600'
            
        ),
        '11'=> array(
            'id' => 11,
            'nombre' => "Brownie Vegano",
            'disponibilidad' => TRUE,
            'imagen' => 'imagenes/vegana.jpg',
            'descripcion' => "Brownie vegano con Crema y Dulce de leche",
            'categoria' => 1,
            'subcategoria' => 2,
            'precio' => '$1500'

        )

        );

            echo json_encode($productos);
?>