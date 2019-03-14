<?php
    include_once('templates/template.php');
    $about = new Template();
    $creator = new Template();
    $nav_btns = $creator->render('nav-btns');
    $creator->set('nav_btns', $nav_btns);
    $about->set('topnav', $creator->render('topnav'));
    $about->set('sidenav', $creator->render('sidenav'));
    $about->set('footer', $creator->render('footer'));
    $creator->set('styles', array(
        'about.css',
        'footer.css',
        'topnav.css',
        'sidenav.css',
        'nav-btn.css',
        'menu.css',
        'sticky-footer.css',
        'fontawesome/css/all.css'
    ));
    $about->set('styles', $creator->render('styles'));
    $creator->set('scripts', array(
        'jquery.js'
    ));
    $about->set('head_scripts', $creator->render('scripts'));
    $creator->set('scripts', array(
        'explore.js',
        'menu.js'
    ));
    $about->set('foot_scripts', $creator->render('scripts'));
    echo $about->render('about');
?>