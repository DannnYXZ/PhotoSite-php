<?
class View
{
	private $vars = array();

	public function set($name, $data){
		$this->vars[$name] = $data;
	}
  
	public function __get($var){
		if (isset($this->vars[$var]))
			return $this->vars[$var];
		return "";
	}
  
	public function delete($var){
	  	unset($this->vars[$var]);
	}

	function generate($template_view, $load_from_cache = true){
		$cache_id = md5($_SERVER['REQUEST_URI'].$GLOBALS['USER_NAME']);
		$cache_file = 'cache/'.$cache_id;
		if(CACHING && file_exists($cache_file) && $load_from_cache){
			if ((time() - CACHE_TIME) < filemtime($cache_file))
				return file_get_contents($cache_file);
		}
		if(file_exists('application/views/'.$template_view.'.php')){
			ob_start();
			extract($this->vars);
			require 'application/views/'.$template_view.'.php';
			// caching
			if(CACHING){
				$handle = fopen($cache_file, 'w');
				fwrite($handle, ob_get_contents());
				fclose($handle);
			}
			return ob_get_clean();
		}
	}
}
?>