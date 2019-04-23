<?
class Controller_Gallery extends Controller{	

    function __construct(){
		$this->model = new Model_Gallery();
		$this->view = new View();
    }
    
    function generate_gallery($img_src){
        $view = new View();
        $view->set('TPL_PATH', 'application/views/');
        $view->set('title', 'Gallery');
        $view->set('styles', array(
            'gallery.css',
            'footer.css',
            'topnav.css',
            'sidenav.css',
            'nav-btn.css',
            'menu.css',
            'sticky-footer.css',
            'fontawesome/css/all.css'
        ));
        $view->set('head_scripts', array(
            'jquery.js',
            'fill-gallery.js'
        ));
        $view->set('content', 'gallery.php');
        $img_list = $this->model->list_files($img_src);
        $view->set('img_list', $img_list);
        $view->set('foot_scripts', array(
            'explore.js',
            'menu.js'
        ));
        return $view->generate('template', md5($_SERVER['REQUEST_URI']));
    }
    function action_index(){
        echo Controller_Gallery::generate_gallery('img/gallery-all');
    }
    function action_wedding(){
        echo Controller_Gallery::generate_gallery('img/wedding');
    }
    function action_food(){
        echo Controller_Gallery::generate_gallery('img/food');
    }
    function action_session(){
        echo Controller_Gallery::generate_gallery('img/sessions');
    }
    function action_tourism(){
        //echo Controller_Gallery::generate_gallery('img/tourism', 0);
    }
}
?>