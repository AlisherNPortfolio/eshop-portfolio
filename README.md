# E-shop project just for fun!

Made with Laravel 9 and Vue 3

### Installation

* `composer install`
* `php artisan migrate:fresh --seed`
* `php artisan passport:install`

### Adding a new module

1. Copy `App\Modules\_Pattern` folder
2. Paste it into `App\Modules` folder and rename it as your will
3. Change all files' namespace and name
4. Register the new module's service provider in the `config/app.php` array item named `providers`:

```bash
'providers' => [
        //...
        App\Modules\Module_Name\Providers\Provider_File_Name::class
]
```
==================================================
> Vue 3 frontend site was not started yet! I think I will develop it after finishing the backend side.
