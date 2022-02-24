# Proba de avaliación práctica III - Creación de un blog usando Laravel
He creado un blog empleando Laravel y PHP.
## Pasos a seguir
En primer lugar, instalamos Laravel a través de la consola con los siguientes comandos:

```
composer global require laravel/installer
 
laravel new example-app
 
cd example-app
 
php artisan serve
```
Después creamos el blog siguiendo el modelo vista controlador e incluimos assets de CSS y JavaScript.
Luego añadimos los post que en la primera pantalla se muestran todos con un breve extracto y al hacer click en cada uno de ellos nos lleva al post completo.
Modificamos los archivos web.php del directorio routes y Post.php del directorio app>Models para hacer el código más limpio y que no de problemas cuando mucha gente acceda a nuestra página.
Para ello, usamos file_get_contents(). Además, añadimos metadatos en la parte superior de cada post. A este formato de metadatos se le conoce como: Yaml Front Matter y para analizarlo usamos un paquete de Composer.
Después creamos blade layouts para que la sintaxis requerida para construir las views sea lo más limpia y concisa posible. En última instancia, estas plantillas de Blade serán compiladas a PHP Vanilla. Acto seguido, eliminamos la restricción de ruta que ya no es necesaria. Luego, añadimos un segundo método Post::findOrFail() que aborta automáticamente si no se encuentra ninguna entrada que coincida con el slug dado.
Finalmente, convertimos nuestro blog de estático a dinámico creando y conectándolo a una base de datos. Modificamos el archivo .env para conectar la base de datos. Usamos migraciones para editar y organizar la base de datos y empleamos Eloquent para mapear un registro de una tabla de la base de datos a un objeto Eloquent correspondiente.

Todo esto lo he hecho siguiendo el siguiente tutorial: https://laracasts.com/series/laravel-8-from-scratch
