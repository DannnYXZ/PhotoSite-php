<?
class Controller_About extends Controller{	
	function action_index(){
        $this->view->set('TPL_PATH', 'application/views/');
        $this->view->set('title', 'About');
        $this->view->set('styles', array(
            'about.css',
            'footer.css',
            'topnav.css',
            'sidenav.css',
            'nav-btn.css',
            'menu.css',
            'sticky-footer.css',
            'fontawesome/css/all.css'
        ));
        $this->view->set('head_scripts', array(
            'jquery.js'
        ));
        $this->view->set('content', 'about.php');
        $this->view->set('foot_scripts', array(
            'explore.js',
            'menu.js'
        ));
        echo $this->view->generate('template', md5($_SERVER['REQUEST_URI']));
	}
}
?>