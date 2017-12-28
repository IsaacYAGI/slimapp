# Slim app

Una pequeña prueba del framework Slim que permite crear API escritas en PHP de una manera bastante rápida y simple.

## Clonar el repositorio

Ejecutar el comando `git clone https://github.com/IsaacYAGI/slimapp.git`

Posicionarse en la carpeta con `cd slimapp`

## Instalación

Para correr esta app de prueba se requiere tener WAMP o XAMP instalado así como Composer para bajar las despendencias y mover los archivos a las carpetas de acceso publico en el servidor.

Se debe segurar que se está dentro de la raiz de la carpeta y ejecutar el comando `composer install`. Esto descargará todas las dependencias del proyecto.

Además de esto se debe crear la base de datos con nombre `slimapp` y crear las tablas y data de pruebas con el script ubicado en `config/slimapp.sql`

## Pruebas

#### Obtener todos los registros de la tabla customers
Para obtener todos los registros de la tabla `customers` se debe enviar una petición `GET` a la ruta `localhost/slimapp/public/index.php/api/customers`, se retornará un JSON con los datos de los mismos.

#### Obtener uno de los registros de la tabla customers

Para obtener uno de los registros de la tabla `customers` se debe enviar una petición `GET` a la ruta `localhost/slimapp/public/index.php/api/customer/{ID}`, se retornará un JSON con los datos del registro. 

Ejemplo: `localhost/slimapp/public/index.php/api/customer/1`

#### Agregar un registro a la tabla customers

Para agregar un registro a la tabla `customers` se debe enviar una petición `POST` a la ruta `localhost/slimapp/public/index.php/api/customer/add` con los siguientes datos en formato JSON: 
	- first_name
	- last_name
	- phone
	- email
	- address
	- city
	- state
Ejemplo: 
```
{
  "first_name":"first_name",
  "last_name":"last_name",
  "phone":"phone",
  "email":"email",
  "address":"address",
  "city":"city",
  "state":"state"
}
```
Nota: se debe agregar en el Header de la solicitud `Content-Type` con valor `application/json` para que funcione correctamente.

#### Actualizar un registro en la tabla customers

Para actualizar un registro en la tabla `customers` se debe enviar una petición `PUT` a la ruta `localhost/slimapp/public/index.php/api/customer/update/{ID}`, los siguientes datos en formato JSON: 
	- first_name
	- last_name
	- phone
	- email
	- address
	- city
	- state
Ejemplo: 

Enviar por método `PUT` a la URL `localhost/slimapp/public/index.php/api/customer/update/1` un JSON con los siguientes datos:

```
{
  "first_name":"new first_name",
  "last_name":"new last_name",
  "phone":"new phone",
  "email":"new email",
  "address":"new address",
  "city":"new city",
  "state":"new state"
}
```
Nota: se debe agregar en el Header de la solicitud `Content-Type` con valor `application/json` para que funcione correctamente. También se deben enviar todos los datos de la solicitud y solo cambiar los que se deseen. No puede haber valores vacíos.

#### Eliminar uno de los registros de la tabla customers

Para eliminar uno de los registros de la tabla `customers` se debe enviar una petición `DELETE` a la ruta `localhost/slimapp/public/index.php/api/customer/delete/{ID}`.

Ejemplo: `localhost/slimapp/public/index.php/api/customer/delete/2`