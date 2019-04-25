<!DOCTYPE html>
<html>

<head>
    <title><?=$title?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? include($TPL_PATH.'styles.php') ?>
</head>

<body>
    <? include($TPL_PATH.'topnav.php') ?>
    <? include($TPL_PATH.'sidenav.php') ?>
    <section class="media-topics-wrapper" id="topics" >
        <? foreach($media_divs as $media_div): ?>
            <form class="media-div" style="background-image: url(<?=$media_div[5]?>);" id="<?=$media_div[0]?>" method="post" action="/gallery">
                <a href="#" onclick="document.getElementById('<?=$media_div[0]?>').submit();">
                    <span class="topic-caption">
                        <?=$media_div[1]?><br/>
                        <span class="topic-caption-sub"><?=$media_div[2]?></span>
                    </span>
                </a>
                <input type="hidden" name="source_dir" value="<?=$media_div[3]?>">
            </form>
        <? endforeach; ?>
    </section>
    <section class="topic-captions-panel">
        <? foreach($media_divs as $media_div): ?>
            <span class="topic-caption">
                <?=$media_div[1];?><br />
                <span class="topic-caption-sub"><?=$media_div[2]?></span>
            </span>
        <? endforeach; ?>
    </section>
    <? include($TPL_PATH.'footer.php') ?>
    <? include($TPL_PATH.'foot_scripts.php') ?>
</body>

</html>