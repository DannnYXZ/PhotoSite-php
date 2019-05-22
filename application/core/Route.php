<?class Route{
	function multiexplode ($delimiters,$string) {

		$ready = str_replace($delimiters, $delimiters[0], $string);
		$launch = explode($delimiters[0], $ready);
		return  $launch;
	}
	static function start(){
		$controller_name = 'gallery';
		$action_name = 'index';
		$routes = Route::multiexplode(array('/', '?'), $_SERVER['REQUEST_URI']);
		if ( !empty($routes[1]) ){	
			$controller_name = $routes[1];
		}
		if ( !empty($routes[2]) ){
			$action_name = $routes[2];
		}
		//echo $controller_name;
		//echo $action_name;
		//$args = 
		Auth::resume();
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;
		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;
		if(file_exists($model_path)){
			include "application/models/".$model_file;
		}
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;
		if(file_exists($controller_path)){
            include "application/controllers/".$controller_file;
            $controller = new $controller_name;
			$action = $action_name;
			if(method_exists($controller, $action)){
				$controller->$action($_GET);
			}
            else{
                Route::ErrorPage404();
			}
		} else {
			Route::ErrorPage404();
		}
    }
    
	static function ErrorPage404() {
        echo 'HI! Something Went Wrong ^___^';
    }
}
