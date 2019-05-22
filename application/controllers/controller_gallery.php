<?
class Controller_Gallery extends Controller{	

    function __construct(){
		$this->model = new Model_Gallery();
		$this->view = new View();
    }
    
    function generate_gallery(){
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
        if(!isset($_POST['source_dir']))
            $_POST['source_dir'] = "/gallery-all";
            
        
        $img_src = 'img'.$_POST['source_dir'];
        if(file_exists($img_src)){
            $img_list = $this->model->list_files($img_src);
            $view->set('img_list', $img_list);
        }
        $view->set('foot_scripts', array(
                'explore.js',
                'menu.js'
        ));
        return $view->generate('template', md5($_SERVER['REQUEST_URI']));
    }
    function action_all(){
        $_POST['source_dir']="img/gallery-all";
        echo Controller_Gallery::generate_gallery();
    }
    function action_index(){
        echo Controller_Gallery::generate_gallery();
    }
}
?>