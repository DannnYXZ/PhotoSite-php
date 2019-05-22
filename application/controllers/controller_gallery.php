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
        if(!isset($_GET['source_dir']))
            $_GET['source_dir'] = "gallery-all";
        $img_src = 'img/'.$_GET['source_dir'];
        if(file_exists($img_src)){
            $img_list = $this->model->list_files($img_src);
            $view->set('img_list', $img_list);
        }
        $view->set('foot_scripts', array(
                'explore.js',
                'menu.js'
        ));
        return $view->generate('template', false);
    }
    function action_index(){
        echo Controller_Gallery::generate_gallery();
    }
    function action_show($src){
        echo $this->generate_gallery();
        //$_POST['source_dir'] = $src['source_dir'];
    }
}
?>