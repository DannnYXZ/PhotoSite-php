<?
session_start();
spl_autoload_register ( function ($class) {
    //echo $class;
    $base = '/var/www/site-local/application/';
    $sources = array("core/$class.php", "models/$class.php ",  "views/$class.php " );
    foreach ($sources as $source) {
        //echo $base.$source.'<br>';
        if (file_exists($base.$source)) {
            //echo 'yep<br>';
            require_once $base.$source;
            break;
        } 
    } 
});
require_once 'models/Model_Topics.php';
define('CACHING', false);
define('CACHE_TIME', 300);
define('ADMIN_NAME', 'admin');    
Route::start();
?>