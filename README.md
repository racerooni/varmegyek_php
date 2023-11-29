
# workshop

## Install the composer then check if composer is properly installed:

```
c:
composer
```

## Start xampp

## Open cmd in c:\xampp\htdocs

## Clone the project from repository

```
git clone https://github.com/racerooni/varmegyek_php
```

## Change to the project directory

```
cd varmegyek
```
## Create .env file based on .env.example

## Run the following command:

```
php artisan key:generate
```

## Do the following settings in .env file:

```
APP_NAME=Varmegyek
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000
APP_VERSION=0.0.0.1

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=varmegyek
DB_USERNAME=root
DB_PASSWORD=

LOGOS_PATH="/logos/"
```

## Run the following commands:

```
composer install
npm install
npm run build
```

## Create ‘workshop’ database using phpMyAdmin OR from command line:

```
mysql -u root -p
$ MariaDB [(none)]> create database workshop;
$ MariaDB [(none)]> use workshop
Database changed
MariaDB [workshop]>exit
```

OR

### drop database

```
php artisan mysql:dropdb database_name
```

### create database

```
php artisan mysql:createdb database_name
```

## Write this command in cmd

```
php artisan migrate:install
```
Laravel creates a migrations table in your database to keep track of what migrations have already been ran on your database.


## Write this artisan command in cmd to run all of your outstanding migrations

```
php artisan migrate
```

## Initiate database with seeds

```
php artisan db:seed
```

## Write this command in cmd to run application on the PHP development server.

```
php artisan serve
```

## To run your application in browser write this line on your browser search bar.

```
localhost:8000
```


