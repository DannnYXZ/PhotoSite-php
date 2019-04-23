<?
session_start();
spl_autoload_register(function ($class_name) {
   include 'core/' . $class_name . '.php';
});
    /*
    require_once 'core/model.php';
    require_once 'core/view.php';
    require_once 'core/controller.php';
    require_once 'core/route.php';
    */
    define('CACHING', false);
    define('CACHE_TIME', 300);
    Route::start();
?>