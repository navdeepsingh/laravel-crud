# Laravel 5.1 CRUD Operations

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

### Installation
```sh
$ git clone [git-repo-url] laravel-crud
$ cd laravel-crud
```

### Steps to setup
```sh
laravel new folder
composer install
php artisan make:controller CrudController --resource
```

### Common Issues and Solutions
* Class html does not exist
> Add in composer.json  "illuminate/html": "5.*"
> then composer update, 
> Open your config/app.php and add under 'providers'
```sh
Illuminate\Html\HtmlServiceProvider::class
```
> add under 'aliases'
```sh
'Form'      => Illuminate\Html\FormFacade::class,
'Html'      => Illuminate\Html\HtmlFacade::class,
```
* Call to undefined method Illuminate\Foundation\Application::bindShared()
>  bindShared has been renamed to $app->singleton()
* Undefined variable: errors
> Wrap all your web routes with a route group and apply the web middleware to them:
Route::group(['middleware' => 'web'], function() {



## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
