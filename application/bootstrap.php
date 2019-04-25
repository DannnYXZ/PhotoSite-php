<?
session_start();
spl_autoload_register(function ($class_name) {
    @include 'core/' . $class_name . '.php';
});
spl_autoload_register(function ($class_name) {
    @include 'models/' . $class_name . '.php';
});
    define('CACHING', false);
    define('CACHE_TIME', 300);
    define('ADMIN_NAME', 'admin');
    Route::start();
?>