# PracticaFinalVisualizacionAvanzadaFran

En esta práctica se ha desarrollado bajo un entorno backend en PHP apoyado en un framework llamado LARAVEL en su versión 5.2.*, además se han utilizado plantillas dashboard en html, css y js. Y se ha utilizado la librería de google charts para representar la información.

Pre-requisitos:

 - Un entorno XAMPP, WAMPP o LAMP (Con MySQL y Apache).
 - crear un usuario en MySQL con las siguientes credenciales (root, root) y se ha de activar el puerto 3306 para MySQL.

Una vez que se ha realizado la instalación del softwarede sobre los prerequisitos, se ha dedescargar en zip o clonar el repositorio dentro de la carpeta www si es WAMPP o LAMP, ohtdocs si es un entorno XAMPP.

Se ha de crear una base de datos en MySQL llamada beers_database y posteriormente importar el script sql alojado en la carpeta PracticaFinalVisualizacionAvanzadaFran->scriptBaseDeDatos->beers_database.sql

Posteriormente se ha de acceder PracticaFinalVisualizacionAvanzadaFran->beer_dashboard_backend->.env.example y se le cambia la extensión dejando solamanete: .env, finalmente dentro de ese fichero se ha de crear la configuración de Laravel de la siguiente manera:

APP_ENV=local
APP_DEBUG=true
APP_KEY=base64:fT/eLjbL7FITMU83chx5B70VnkT9AK79vfpHorZVp44=
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=beers_database
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

