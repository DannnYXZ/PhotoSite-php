<!DOCTYPE html>
<html>

<head>
    <title>Gallery</title>
    <meta charset="UTF-8" />
    <?=$styles?>
    <?=$head_scripts?>
</head>

<body>
    <div class="body-content">
    <?=$topnav?>
    <?=$sidenav?>
        <main class="gallery">
            <?
            for($x = 0; $x < 4; $x++){
                echo '<div class="gallery-col"></div>';
            }
            ?>
        </main>
    </div>
    <?=$footer?>
    <script>
        fill_gallery("img/gallery-all", 25);
    </script>
    <?=$foot_scripts?>
</body>

</html>