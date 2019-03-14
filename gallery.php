<?php
    include_once('templates/template.php');
    $gallery = new Template();
    $creator = new Template();
    $nav_btns = $creator->render('nav-btns');
    $creator->set('nav_btns', $nav_btns);
    $gallery->set('topnav', $creator->render('topnav'));
    $gallery->set('sidenav', $creator->render('sidenav'));
    $gallery->set('footer', $creator->render('footer'));
    $creator->set('styles', array(
        'gallery.css',
        'footer.css',
        'topnav.css',
        'sidenav.css',
        'nav-btn.css',
        'menu.css',
        'sticky-footer.css',
        'fontawesome/css/all.css'
    ));
    $gallery->set('styles', $creator->render('styles'));
    $creator->set('scripts', array(
        'jquery.js',
        'fill-gallery.js'
    ));
    $gallery->set('head_scripts', $creator->render('scripts'));
    $creator->set('scripts', array(
        'explore.js',
        'menu.js'
    ));
    $gallery->set('foot_scripts', $creator->render('scripts'));
    echo $gallery->render('gallery');
?>