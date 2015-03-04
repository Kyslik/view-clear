# Column sorting for Laravel 5
[![Latest Version](https://img.shields.io/github/release/Kyslik/view-clear.svg?style=flat-square)](https://github.com/Kyslik/column-sortable/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/Kyslik/view-clear.svg?style=flat-square)](https://packagist.org/packages/Kyslik/view-clear)

Simple artisan command to clear view folder in Laravel 5.

Simply put: clears `storage/framework/views` folder.


## Setup

### Composer

Pull this package in through Composer.

```
{
    "require-dev": {
        "kyslik/view-clear": "dev-master"
    }
}
```

    $ composer update
    

Add the package to your application service providers in `config/app.php`

```
'providers' => [
    
    'Illuminate\Foundation\Providers\ArtisanServiceProvider',
    'Illuminate\Auth\AuthServiceProvider',
    ...
    
    'Kyslik\ViewClear\ViewClearServiceProvider',

],
```

## Usage

    $ php artisan view:clear --help

### Use case

When developing blade extensions it is useful to clear view cache in process.