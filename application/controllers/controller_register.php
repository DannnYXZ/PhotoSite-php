<?
class Controller_Register extends Controller {
	function action_index(){
        $this->view->set('TPL_PATH', 'application/views/');
        $this->view->set('title', 'Contact');
        $this->view->set('styles', array(
            'auth.css',
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
        $this->view->set('content', 'register.php');
        $this->view->set('foot_scripts', array(
            'explore.js',
            'menu.js'
        ));
        if(isset($_SESSION['ERR_MSG']))
            $this->view->set('ERR_MSG', $_SESSION['ERR_MSG']);
        $_SESSION['ERR_MSG'] = NULL;
        echo $this->view->generate('template', md5($_SERVER['REQUEST_URI']));
    }
}
?>