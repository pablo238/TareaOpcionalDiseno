<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## El proyecto:

Para poder acceder a las funcionalidades del proyecto es necesario loguearse, lo cual permitira hacer lo siguiente:
a)Acceder a la zona de inicio: para acceder a la zona de inicio se debe enviar por la URL el código: A765. 
En caso de que el código sea válido se desplegarán 3 enlaces
-“registrar vehículos”
-“listar vehículos” 
-“estadísticas vehículos”.
En caso contrario se desplegara un mensaje que dice zona prohibida. 
b)Registrar vehículos:  permite registrar tanto vehículos como dueños al mismo tiempo.  Unicamente se verificara que la marca sea válida. 
c)Listar vehículos: Lista todos los vehículos con los siguientes datos: placa y marca;
para los vehículos tipo Mazda muestra al lado de la placa un mensaje en verde que dice (“Los de Mazda son los mejores”) y
para los vehículos tipo Toyota muestra laplaca en rojo y negrilla. 
d)Estadísticas vehículos: Muestra cuántos vehículos de cada tipo existen registradosen el sistema (por ejemplo: 3 Mazda, 2 Toyota, 0 Chevrolet).

## Como ejecutar el proyecto:

1)clonar o descargar el proyecto en una ruta local, puede utilizar el siguiente comando

```
 git clone https://github.com/pablo238/TareaOpcionalDiseno.git
```

2)Configure una base de datos de su preferencia, en este caso se usa PostgreSQL. puede utilizar estas configuraciones que vienen configuradas en el proyecto:

```
DB_CONNECTION=pgsql
DB_HOST=localhost
DB_PORT=5432
DB_DATABASE=dagrd_v3
DB_USERNAME=localhost
DB_PASSWORD=123
```

3) Abra una terminal en la ruta raiz donde descargo el proyecto y ejecute los siguientes comandos:

```
 composer install
 php artisan key:generate
 php artisan migrate:refresh --seed
 php artisan serve
```

los comandos anteriores nos descargan las dependencias, generan la llave, crea las tablas,relaciones y datos por defecto en la base de datos
y finalmente ejecuta el proyecto

4) abra en su navegador la ruta http://127.0.0.1:8000 
5) registrese en el sistema y/o ingrese con sus credenciales
6) Ahora puede ingresar a las funcionalidades antes mencionadas mediante los links que aparecen en pantalla
-“registrar vehículos”.
-“listar vehículos” .
-“estadísticas vehículos”.

## Autor

Juan Pablo Betancur Giraldo
