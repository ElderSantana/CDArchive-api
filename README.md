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
It's very simple to get the API up and running. First, create the database and add them to the .env file or your can use the database file `timer2u.sql` in the root folder, 
this database was made with Mysql.

in case you will create your database, you can run `php artisan migrate` after `php artisan db:seed` to create the tables and add the dummy data.

## Running the server

run `php artisan serve`

The API will be running on localhost:8000.

## TIME SPENT
I spent about 6 hours to create the app and api.
