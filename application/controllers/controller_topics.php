<?
class Controller_Topics extends Controller{
    
	function __construct(){
		$this->model = new Model_Topics();
		$this->view = new View();
	}
	
	function action_index(){
        $this->view->set('TPL_PATH', 'application/views/');
        $this->view->set('title', 'Topics');
        $this->view->set('styles', array(
            'topics.css',
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
        $this->view->set('media_divs', $this->model->get_topics());
        $this->view->set('content', 'topics.php');
        $this->view->set('foot_scripts', array(
            'explore.js',
            'menu.js'
        ));
        echo $this->view->generate('topics');
    }
}
?>