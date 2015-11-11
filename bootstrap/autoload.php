<?php

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
<<<<<<< HEAD
=======
| Register Core Helpers
|--------------------------------------------------------------------------
*/

$helperPath = __DIR__.'/../vendor/surgeon/nurse/src/Support/helpers.php';

if (!file_exists($helperPath)) {
    echo 'Missing Surgeon Nurse vendor files. Try running "composer install".'.PHP_EOL;
    exit(1);
}

require $helperPath;

/*
|--------------------------------------------------------------------------
>>>>>>> 3a5b0399d68d14718c760212ecc1f004ddb9d361
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Include The Compiled Class File
|--------------------------------------------------------------------------
|
| To dramatically increase your application's performance, you may use a
| compiled class file which contains all of the classes commonly used
| by a request. The Artisan "optimize" is used to create this file.
|
*/

$compiledPath = __DIR__.'/cache/compiled.php';

if (file_exists($compiledPath)) {
    require $compiledPath;
}