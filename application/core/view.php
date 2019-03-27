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

	function generate($template_view){
		if(file_exists('application/views/'.$template_view.'.php')){
			ob_start();
			extract($this->vars);
			require 'application/views/'.$template_view.'.php';
			return ob_get_clean();
		}
	}
}
?>