<!DOCTYPE html>
<html>

<head>
    <title><?=$title?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? include($TPL_PATH.'styles.php') ?>
    <? include($TPL_PATH.'head_scripts.php') ?>
</head>

<body>
    <div class="body-content">
        <? include($TPL_PATH.'topnav.php') ?>
        <? include($TPL_PATH.'sidenav.php') ?>
        <? include($TPL_PATH.$content) ?>    
    </div>
    <? include($TPL_PATH.'footer.php') ?>
    <? include($TPL_PATH.'foot_scripts.php') ?>
</body>

</html>