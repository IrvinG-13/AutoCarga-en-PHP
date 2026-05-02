<?php

namespace App\Modelos;

class Producto
{
    private string $nombre;
    private float $precio;
    private int $stock;

    public function __construct(string $nombre, float $precio, int $stock)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock  = $stock;
    }

    public function getNombre(): string { return $this->nombre; }
    public function getPrecio(): float  { return $this->precio; }
    public function getStock(): int     { return $this->stock; }

    public function hayStock(int $cantidad): bool
    {
        return $this->stock >= $cantidad;
    }

    public function __toString(): string
    {
        return sprintf(
            '[Producto] %s | Precio: $%.2f | Stock: %d unidades',
            $this->nombre, $this->precio, $this->stock
        );
    }
}