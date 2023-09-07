# Portafolio + Admin panel

## Repositorio de la aplicación web Portafolio + Admin panel hecha en Laravel.

### Comandos

#### Crear proyecto

- composer create-project laravel/laravel portafolio

#### Generar APK KEY

- php artisan key:generate

#### Generar migraciones

- php artisan make:migration proyectos
- php artisan make:migration servicios
- php artisan make:migration entradas
- php artisan make:migration postulantes
- php artisan make:migration configuraciones

#### Subir migraciones a la base de datos

- php artisan migrate

#### Consultar la lista de rutas

- php artisan route:list

#### Abrir un enlace para comunicarse con la carpeta storage

- php artisan storage:link

#### Instalar laravel/ui para la interfaz de la aplicación

- composer require laravel/ui

#### Integrar bootstrap y la autenticación

- php artisan ui bootstrap --auth

#### Instalar Generador de cruds

- composer require ibex/crud-generator --dev

#### Publicar la configuración por defecto de los paquetes

- php artisan vendor:publish --tag=crud

#### Crear cruds

- php artisan make:crud proyectos
- php artisan make:crud servicios
- php artisan make:crud entradas
- php artisan make:crud postulante
- php artisan make:crud configuraciones

#### Crear controlador

- php artisan make:controller ProyectoIndexController
- php artisan make:controller ServicioIndexController
- php artisan make:controller EntradaIndexController
- php artisan make:controller PostulanteIndexController
- php artisan make:controller ConfiguracionIndexController
