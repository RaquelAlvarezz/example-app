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
Después creamos el blog siguiendo el modelo vista controlador e incluimos assets de CSS y JavaScript.<br>
Luego añadimos los post que en la primera pantalla se muestran todos con un breve extracto y al hacer click en cada uno de ellos nos lleva al post completo.<br>
Modificamos los archivos web.php del directorio routes y Post.php del directorio app>Models para hacer el código más limpio y que no de problemas cuando mucha gente acceda a nuestra página.<br>
Para ello, usamos file_get_contents(). Además, añadimos metadatos en la parte superior de cada post. A este formato de metadatos se le conoce como: Yaml Front Matter y para analizarlo usamos un paquete de Composer.<br>
Después creamos blade layouts para que la sintaxis requerida para construir las views sea lo más limpia y concisa posible. En última instancia, estas plantillas de Blade serán compiladas a PHP Vanilla. Acto seguido, eliminamos la restricción de ruta que ya no es necesaria. Luego, añadimos un segundo método Post::findOrFail() que aborta automáticamente si no se encuentra ninguna entrada que coincida con el slug dado.<br>
Finalmente, convertimos nuestro blog de estático a dinámico creando y conectándolo a una base de datos. Modificamos el archivo .env para conectar la base de datos. Usamos migraciones para editar y organizar la base de datos y empleamos Eloquent para mapear un registro de una tabla de la base de datos a un objeto Eloquent correspondiente.<br>

Todo esto lo he hecho siguiendo el siguiente tutorial: https://laracasts.com/series/laravel-8-from-scratch

## Capturas
![image](https://user-images.githubusercontent.com/91055857/155486625-b807969e-475a-47d2-9044-cdbf53112559.png)
![image](https://user-images.githubusercontent.com/91055857/155486690-be48d26e-ef47-400f-b8b8-5314c576c7e3.png)
![image](https://user-images.githubusercontent.com/91055857/155486759-0be5f703-c71b-42a9-a445-3d0f472e56f8.png)
![image](https://user-images.githubusercontent.com/91055857/155486808-b4b9648b-30c2-4252-987f-98c600b055f6.png)
![image](https://user-images.githubusercontent.com/91055857/155486860-ca77b13c-3ddd-4f50-bf66-bd8e95c4a9cd.png)
![image](https://user-images.githubusercontent.com/91055857/155486918-a1e45644-16bd-415b-aa20-969c50fafd3e.png)
![image](https://user-images.githubusercontent.com/91055857/155486964-e97f2242-f462-4c06-92d4-70ea9df88745.png)
![image](https://user-images.githubusercontent.com/91055857/155487036-a18ac4b1-75af-4ad6-bed7-dc8261c56867.png)
