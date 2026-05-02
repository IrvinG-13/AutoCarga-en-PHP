
# Autoload PSR-4 con Composer — PHP

Laboratorio: Implementación de la Carga Automática bajo el Estándar PSR-4
Curso: Desarrollo de Software VII — I Semestre 2026
Universidad Tecnológica de Panamá

## Descripción

Este proyecto demuestra el uso del estándar PSR-4 junto con Composer Autoload para eliminar completamente los include y require manuales de una aplicación PHP. Se modela un sistema de carrito de compras con las clases Producto, Usuario y Carrito.

## Guía de Instalación

Requisitos: PHP >= 7.4 y Composer instalado.

1. Clonar el repositorio
2. Ejecutar: composer dump-autoload
3. Ejecutar: php index.php

## Estructura de Archivos

- composer.json → Define el mapa PSR-4: App\ apunta a src/
- index.php → Punto de entrada principal
- src/Modelos/Producto.php → Clase App\Modelos\Producto
- src/Modelos/Usuario.php → Clase App\Modelos\Usuario
- src/Servicios/Carrito.php → Clase App\Servicios\Carrito
- vendor/ → Generado por Composer, NO está en el repositorio

## Prueba de Ejecución

Al correr php index.php se muestran los productos agregados al carrito, el aviso de sin stock para el Monitor 4K y el total de $989.99, sin ningún error de Class not found.

## Conclusiones Técnicas

1. Mantenibilidad: Agregar una nueva clase no requiere modificar ningún archivo de configuración global. Basta con crear el archivo en la carpeta correcta respetando el namespace.

2. Eficiencia de Memoria - Lazy Loading: El autoloader carga una clase en memoria solo cuando se instancia por primera vez, evitando que archivos innecesarios consuman recursos del servidor.

3. Estandarización PSR-4: Seguir este estándar garantiza que cualquier desarrollador entienda la estructura del proyecto de forma intuitiva, facilitando el trabajo colaborativo y la compatibilidad con frameworks como Laravel y Symfony.