<?php

$frutas = array(
    [
        "nombre" => "manazana",
        "cantidad" => 45,
        "precio" => 35.5,
        "ventas" => 35
    ],
    [
        "nombre" => "melon",
        "cantidad" => 35,
        "precio" => 46.5,
        "ventas" => 15
    ],
    [
        "nombre" => "mango",
        "cantidad" => 350,
        "precio" => 25,
        "ventas" => 325
    ],
    [
        "nombre" => "patilla",
        "cantidad" => 50,
        "precio" => 68.8,
        "ventas" => 45
    ]
);

//data

$mostSell = [
    "nombre" => "nombre",
    "cantidad" => 0,
    "precio" => 0,
    "ventas" => $frutas[0]["ventas"]
];

$lessSell = [
    "nombre" => "nombre",
    "cantidad" => 0,
    "precio" => 0,
    "ventas" => $frutas[0]["ventas"]
];


foreach ($frutas as $product) {
    if ($product["ventas"] > $mostSell["ventas"]) {
        $mostSell["nombre"] = $product["nombre"];
        $mostSell["cantidad"] = $product["cantidad"];
        $mostSell["precio"] = $product["precio"];
        $mostSell["ventas"] = $product["ventas"];
    }
    if ($product["ventas"] < $lessSell["ventas"]) {
        $lessSell["nombre"] = $product["nombre"];
        $lessSell["cantidad"] = $product["cantidad"];
        $lessSell["precio"] = $product["precio"];
        $lessSell["ventas"] = $product["ventas"];
    }
    echo "<br>";
}

//mas vendido

echo "Este es el producto mas vendido<br>Nombre: {$mostSell["nombre"]} - Cantidad: {$mostSell["cantidad"]} - Precio: {$mostSell["precio"]} - Ventas:  {$mostSell["ventas"]}<br>";

//menos vendido

echo "Este es el producto menos vendido<br>Nombre: {$lessSell["nombre"]} - Cantidad: {$lessSell["cantidad"]} - Precio: {$lessSell["precio"]} - Ventas:  {$lessSell["ventas"]}<br>";


?>