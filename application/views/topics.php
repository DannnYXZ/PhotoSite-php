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
    <section class="media-topics-wrapper" id="topics">
        <? foreach($media_divs as $media_div): ?>
            <div class="media-div <?=$media_div['subclass']?>">
                <a href="gallery/<?=$media_div['subclass']?>">
                    <span class="topic-caption">
                        <?=$media_div['topic_name']?><br />
                        <span class="topic-caption-sub"><?=$media_div['topic_caption']?></span>
                    </span>
                </a>
            </div>
        <? endforeach; ?>
    </section>
    <section class="topic-captions-panel">
        <? foreach($media_divs as $media_div): ?>
            <span class="topic-caption">
                <?=$media_div['topic_name'];?><br />
                <span class="topic-caption-sub"><?=$media_div['topic_caption']?></span>
            </span>
        <? endforeach; ?>
    </section>
    <? include($TPL_PATH.'footer.php') ?>
    <? include($TPL_PATH.'foot_scripts.php') ?>
</body>

</html>