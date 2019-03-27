<?
class Controller_Gallery extends Controller{	
    static function generate_gallery($img_src, $img_cnt){
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
        $view->set('run_scripts', array(
            'fill_gallery("'.$img_src.'", '.$img_cnt.');',
        ));
        $view->set('foot_scripts', array(
            'explore.js',
            'menu.js'
        ));
        return $view->generate('template');
    }
    function action_index(){
        echo Controller_Gallery::generate_gallery('/img/gallery-all', 25);
    }
    function action_wedding(){
        echo Controller_Gallery::generate_gallery('/img/wedding', 30);
    }
    function action_food(){
        echo Controller_Gallery::generate_gallery('/img/food', 4);
    }
    function action_session(){
        echo Controller_Gallery::generate_gallery('/img/sessions', 32);
    }
    function action_tourism(){
        echo Controller_Gallery::generate_gallery('/img/tourism', 0);
    }
}
?>