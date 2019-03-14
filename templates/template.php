<?php
class Template{
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

  public function render($tmp){
		$text = file_get_contents('templates/'.$tmp.'.tpl.php');
			if(file_exists('templates/'.$tmp.'.tpl.php')){
				ob_start();
				extract($this->vars);
				require 'templates/'.$tmp.'.tpl.php';
				return ob_get_clean();
			}
	}

	# import styles and scripts
	/*
	preg_match_all("/\[(.*)(\..*)\]/", $text, $matches);
	for($i = 0; $i < sizeof($matches[0]); $i++){
		$pattern = $matches[0][$i];
		$name= $matches[1][$i];
		$ext = $matches[2][$i];
		switch($ext){
			case '.css':
				$text = str_replace($pattern, '<link rel="stylesheet" href='.$this->CSS_HOME.'/'.$name.$ext.'>', $text);
				break;
			case '.js':
				$text = str_replace($pattern, '<script src="'.$this->JS_HOME.'/'.$name.$ext.'"></script>', $text);
				break;
		}
	}
    return $text;
	}
	*/
}
 