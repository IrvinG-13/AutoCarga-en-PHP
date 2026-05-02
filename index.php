<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Modelos\Producto;
use App\Modelos\Usuario;
use App\Servicios\Carrito;

$laptop  = new Producto('Laptop Dell XPS', 899.99, 5);
$teclado = new Producto('Teclado Mecánico', 45.00, 10);
$monitor = new Producto('Monitor 4K', 320.00, 0);

$usuario = new Usuario('Carlos Mendez', 'carlos@email.com');

$carrito = new Carrito($usuario);
$carrito->agregar($laptop,  1);
$carrito->agregar($teclado, 2);
$carrito->agregar($monitor, 1);

$carrito->mostrarResumen();

echo "\n✔ Autoload PSR-4 funcionando. ¡Sin errores de Class not found!\n";