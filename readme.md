<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# city_tourist

Test task for LEMARBET

## Getting Started
Clone the project up and running on your local machine for development and testing purposes.

### Installing

Update the package manager cache by running:

```
sudo apt-get update
```
Install  composer

```
php composer install
```
Or update (if already installed)

```
php composer update
```
Open your .env file and change the database name to whatever you have,
 username  and password field correspond to your configuration. 
 
```
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

## Running the tests

Run for migration and adding data to your database
```
 php artisan migrate
 php artisan db:seed
```
Run 
```
php artisan serve
```
Go to localhost:8000

Or run your own server

## Built With

* [Laravel](https://laravel.com/docs/5.6) - The web framework used

## Authors

* **Nataliia Duka**

