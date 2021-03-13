## SquareBlog

Web realizada para la prueba por Marc Ibi Alvarez.

## Instrucciones para la instalación

- `git clone https://github.com/softon15/square.git`
- `cd square`
- `composer install`
- Renombrar .env.example a .env
- Rellenar el .env con la información para la conexión a la base de datos
- Crear una base de datos con el nombre que se haya puesto en el .env
- `php artisan migrate`
- `php artisan schedule:run` (Esto es para ejecutar al menos una vez la lectura de posts)
- `php artisan key:generate`

Ahora ya puedes lanzar `php artisan serve`. La web debería estar funcionando en `http://127.0.0.1:8000`. 
Para programar la lectura automática e inserción de los nuevos posts, bastaría con crear una nueva tarea en el crontab del servidor. 
Ejemplo: `* * * * * php /path/to/artisan schedule:run 1>> /dev/null 2>&1`
Está programado para ejecutar la lectura de nuevos posts cada 15 minutos. 


## Observaciones

- Para las páginas de "frontend" (Home y Detalle Post) se ha usado Vue. 
- Para las páginas de gestión de usuario (sus propios blogs y añadir uno nuevo) se ha usado Blade.
- En el dashboad una vez estás logeado, la tabla de posts del usuario tiene ordenación pinchando en los campos de 'Title' y 'Date'. He usado el siguiente repositorio para hacerlo de forma automática: https://github.com/Kyslik/column-sortable.git
- Las páginas de login y registro se han generado automáticamente con el comando `php artisan make:auth`, creando así las tablas y vistas necesarias.


## Comentarios

Mi única experiencia con Laravel fue de un solo mes hace 2 años, en la versión 5, así que seguramente lo que he hecho se podrá hacer mejor y de forma más simple. 
Además, no tengo experiencia en Vue. He intentado usarlo en el front porque creo que es la mejor opción, pero soy consciente de que la estructura y la forma de importar los css y js no son las correctas. 
Sin embargo, me ha gustado bastante la experiencia ya que considero que Laravel es el Framework con más potencial de PHP. Creo que con unos patrones de buenas práticas en poco tiempo podría controlar Laravel con la misma fluidez que Symfony, que es el Framework en el que tengo una sólida experiencia. 