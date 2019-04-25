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
        $topics_model = new Model_Topics();
        $this->view->set('topics', $topics_model->get_topics());
        $this->view->set('active_tab', 'topics');
        self::action_index();
    }
    public function action_apply(){
        var_dump($_POST);
        var_dump($_FILES);
        //exit();
        $preview = $_FILES['preview_path']['name'];
        $tmp_name = $_FILES['preview_path']['tmp_name'];
        $topic_id = $_POST['topic_id'];
        $source = $_POST['source_dir'];
        if($preview)
            $this->model->set_topic_preview($tmp_name, $preview, 'img/topic_previews/', $topic_id);
        $this->model->set_topic_source($topic_id, $source);
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }
}
?>