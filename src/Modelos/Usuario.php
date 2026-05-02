<?php

namespace App\Modelos;

class Usuario
{
    private string $nombre;
    private string $email;
    private string $rol;

    public function __construct(string $nombre, string $email, string $rol = 'cliente')
    {
        $this->nombre = $nombre;
        $this->email  = $email;
        $this->rol    = $rol;
    }

    public function getNombre(): string { return $this->nombre; }
    public function getEmail(): string  { return $this->email; }
    public function getRol(): string    { return $this->rol; }

    public function __toString(): string
    {
        return sprintf(
            '[Usuario] %s | Email: %s | Rol: %s',
            $this->nombre, $this->email, $this->rol
        );
    }
}