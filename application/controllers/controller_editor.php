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
        echo $this->view->generate('template', false);
    }
    function action_topics(){
        $topics_model = new Model_Topics();
        $this->view->set('topics', $topics_model->get_topics());
        $this->view->set('active_tab', 'topics');
        self::action_index();
    }
    public function action_update_topic(){
        var_dump($_POST);
        //exit();
        $name = $_POST['topic_name'];
        $caption = $_POST['topic_caption'];
        $tmp_name = $_FILES['preview_path']['tmp_name'];
        $topic_id = $_POST['topic_id'];
        $source = $_POST['source_dir'];
        $preview = $_FILES['preview_path']['name'];
        if(!isset($preview))
            $preview = $_POST['topic_preview_path'];
        if($preview)
            $this->model->set_topic_preview($topic_id, $tmp_name, $preview, 'img/topic_previews/');
        $this->model->set_topic_data($topic_id, $name, $caption, $source);
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }
    public function action_add_topic(){
        $this->model->add_topic(NULL, NULL, NULL, NULL);
        
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }
    public function action_remove_topic(){
        var_dump($_POST);
        $this->model->remove_topic($_POST['topic_id']);
        //exit();
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }
}
?>