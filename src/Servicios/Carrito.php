<?php

namespace App\Servicios;

use App\Modelos\Producto;
use App\Modelos\Usuario;

class Carrito
{
    private Usuario $usuario;
    private array $items = [];

    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    public function agregar(Producto $producto, int $cantidad): bool
    {
        if (!$producto->hayStock($cantidad)) {
            echo "  ⚠  Sin stock suficiente para: {$producto->getNombre()}\n";
            return false;
        }
        $this->items[] = ['producto' => $producto, 'cantidad' => $cantidad];
        echo "  ✔  Agregado: {$producto->getNombre()} x{$cantidad}\n";
        return true;
    }

    public function calcularTotal(): float
    {
        $total = 0.0;
        foreach ($this->items as $item) {
            $total += $item['producto']->getPrecio() * $item['cantidad'];
        }
        return $total;
    }

    public function mostrarResumen(): void
    {
        echo "\n==============================\n";
        echo "  CARRITO DE: {$this->usuario->getNombre()}\n";
        echo "==============================\n";
        foreach ($this->items as $item) {
            $subtotal = $item['producto']->getPrecio() * $item['cantidad'];
            echo sprintf("  - %-20s x%d  $%.2f\n",
                $item['producto']->getNombre(),
                $item['cantidad'],
                $subtotal
            );
        }
        echo "------------------------------\n";
        echo sprintf("  TOTAL: $%.2f\n", $this->calcularTotal());
        echo "==============================\n";
    }
}