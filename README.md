# Sistema de Gestión de Inventarios

Este repositorio contiene los proyectos de frontend y backend correspondientes al proyecto propuesto para la actividad No. 5. El objetivo es mostrar la implementación del sistema de gestión de productos. La arquitectura utilizada es cliente/servidor, siguiendo el patrón de diseño MVC.

- **Backend:** Implementado en Laravel (PHP), aquí se desarrolla la lógica de negocio, los controladores y los modelos.
- **Frontend:** Implementado en React.js, encargado de la creación de interfaces para la interacción con el usuario.

El cliente y el servidor se comunican a través de peticiones HTTP utilizando Axios para la gestión de la API.

## Montaje

### Configuración del Backend:

1. composer install

2. Configura la base de datos en el archivo .env de Laravel para conectar con MySQL.

3. composer require tymon/jwt-auth

4. Crea los modelos y controladores para gestionar los productos.

## Configuración del Frontend

1. npm install

## Configuración del Backend

1. php artisan serve
