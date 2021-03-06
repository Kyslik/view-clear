# View clearing command for Laravel 5.
[![Latest Version](https://img.shields.io/github/release/Kyslik/view-clear.svg?style=flat-square)](https://github.com/Kyslik/column-sortable/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/Kyslik/view-clear.svg?style=flat-square)](https://packagist.org/packages/Kyslik/view-clear)

Simple artisan command to clear view folder in <strike>Laravel 5.1</strike> and [Laravel-5.0](https://github.com/Kyslik/view-clear/tree/Laravel-5.0)

Simply put: clears `storage/framework/views` folder.

# Laravel 5.1 UPDATE
If you are using Laravel 5.1.* you do **NOT** need this package since it is part of Laravel base commands.

`$ php artisan view:clear`


## Setup
### Version(s)
 - For Laravel 5.0 use version **~1.0.0**
 - <strike>For Laravel 5.1 use version **~2.0.0**</strike> Laravel 5.1 has its own view:clear command, this package is not needed.

### Composer

Pull this package in through Composer.

```
{
    "require-dev": {
        "kyslik/view-clear": "~2.0.0"
    }
}
```

    $ composer update
    

Add the package to your application service providers in `config/app.php`

```
'providers' => [

    App\Providers\RouteServiceProvider::class,

    /*
     * Third Party Service Providers...
     */
    Kyslik\ViewClear\ViewClearServiceProvider::class,
],
```

## Usage

    $ php artisan view:clear --help

### Use case

When developing blade extensions it is useful to clear view cache in process.
