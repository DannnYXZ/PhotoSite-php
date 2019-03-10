<?php
$cssHome = 'css';
$styles = array(
    "gallery.css",
    "footer.css",
    "topnav.css",
    "sidenav.css",
    "nav-btn.css",
    "menu.css",
    "sticky-footer.css",
    "https://use.fontawesome.com/releases/v5.7.2/css/all.css"
);
foreach($styles as $style){
    echo '<link rel="stylesheet" href='.$cssHome.'/'.$style.'>';
}
?>