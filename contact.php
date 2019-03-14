<?php
    include_once('templates/template.php');
    $contact = new Template();
    $creator = new Template();
    $nav_btns = $creator->render('nav-btns');
    $creator->set('nav_btns', $nav_btns);
    $contact->set('topnav', $creator->render('topnav'));
    $contact->set('sidenav', $creator->render('sidenav'));
    $contact->set('footer', $creator->render('footer'));
    $creator->set('styles', array(
        'contact.css',
        'footer.css',
        'topnav.css',
        'sidenav.css',
        'nav-btn.css',
        'menu.css',
        'sticky-footer.css',
        'fontawesome/css/all.css'
    ));
    $contact->set('styles', $creator->render('styles'));
    $creator->set('scripts', array(
        'jquery.js'
    ));
    $contact->set('head_scripts', $creator->render('scripts'));
    $creator->set('scripts', array(
        'explore.js',
        'menu.js'
    ));
    $contact->set('foot_scripts', $creator->render('scripts'));
    echo $contact->render('contact');
?>