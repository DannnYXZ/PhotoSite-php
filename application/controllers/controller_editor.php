<?
class Controller_Editor extends Controller{	
    function __construct(){
		$this->model = new Model_Editor();
		$this->view = new View();
    }
	function action_index(){
        $this->view->set('TPL_PATH', 'application/views/');
        $this->view->set('title', 'Contact');
        $this->view->set('styles', array(
            'editor.css',
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
        $this->view->set('content', 'editor.php');
        $this->view->set('foot_scripts', array(
            'explore.js',
            'menu.js'
        ));
        echo $this->view->generate('template', md5($_SERVER['REQUEST_URI']));
    }
    function action_topics(){
        $this->view->set('topics', $this->model->get_topics());
        self::action_index();
    }
    public function action_apply(){
        var_dump($_POST);
        //header('location: /editor');
    }
}
?>