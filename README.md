# CDArchive-api
A simple example of CD Archive  using Laravel 5.7

## Install composer
Install Composer if is not already on your machine.
https://getcomposer.org/download/

## Install laravel installer
run `composer global require laravel/installer`

## update packages
run `composer install`

## Running the API
It's very simple to get the API up and running. First, create the database and add them to the .env file or your can use the database file `cd_archives.sql` in the root folder, 
this database was made with Mysql.

## Runing the Mysql

You can run Mysql using [Xampp](https://nodejs.org/en/i) or any other software.

In case you will create your database, you can go to the folder you have downloaded the project and run `php artisan migrate` to create the tables.

## Running the server

run `php artisan serve`

The API will be running on localhost:8000. In case of runing in a different address you must configure the front-end to the new one.

