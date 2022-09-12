![php](https://img.shields.io/badge/php-%3E%3D8.0-blue)
![laravel](https://img.shields.io/badge/laravel->=9.29.0-blue)
![license](https://img.shields.io/github/license/rootcause0/repository-pattern-laravel?style=flat-square)

# repository-pattern-laravel
An example demonstrates use of Laravel's Service Container in Repository Pattern.

This simple app utilizes only back-end API,so ready your CURLs or whatever you'd like to use as your RESTful client before trying this app.

## Installation

Clone the repository as you would do it usually

```bash
git clone https://github.com/rootcause0/repository-pattern-laravel
```

Change your directory to root of the application and then,
```bash
composer install
```

Now you may copy .env.example to .env and connect your MySQL and then generate your key etc.

Then,there it goes;

```bash
php artisan migrate:fresh
php artisan db:seed
```
You should ok to launch the app.

## Usage
Only one resource route available to access and this one is the utilizing the main feature of the app,which is Repository Pattern and Laravel's brilliant Service container of course.

The route for this resource is 'user-orders' and there is all available short methods for this resource.
```php
user-orders HTTP GET
user-orders/{id} HTTP GET
user-orders/delete/{id}  HTTP DELETE
```
## License
[MIT](https://choosealicense.com/licenses/mit/)
