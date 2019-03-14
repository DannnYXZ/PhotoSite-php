<?php
    include_once('templates/template.php');
    $topics = new Template();
    $creator = new Template();
    $nav_btns = $creator->render('nav-btns');
    $creator->set('nav_btns', $nav_btns);
    $topics->set('topnav', $creator->render('topnav'));
    $topics->set('sidenav', $creator->render('sidenav'));
    $topics->set('footer', $creator->render('footer'));
    $creator->set('styles', array(
        'topics.css',
        'footer.css',
        'topnav.css',
        'sidenav.css',
        'nav-btn.css',
        'menu.css',
        'sticky-footer.css',
        'fontawesome/css/all.css'
    ));
    $topics->set('styles', $creator->render('styles'));
    $creator->set('scripts', array(
        'jquery.js'
    ));
    $topics->set('head_scripts', $creator->render('scripts'));
    $creator->set('scripts', array(
        'explore.js',
        'menu.js'
    ));
    $topics->set('media_divs', array(
        array(
            'subclass' => 'wedding',
            'topic_name' => 'Wedding',
            'topic_caption' => 'Brand New Look'
        ),
        array(
            'subclass' => 'food',
            'topic_name' => 'Food',
            'topic_caption' => 'Yummy Tasty Delicious'
        ),
        array(
            'subclass' => 'session',
            'topic_name' => 'Photosessions',
            'topic_caption' => 'You Are a Star'
        ),
        array(
            'subclass' => 'tourism',
            'topic_name' => 'Tourism',
            'topic_caption' => 'Explore The World'
        )
    ));
    $topics->set('foot_scripts', $creator->render('scripts'));
    echo $topics->render('topics');
?>