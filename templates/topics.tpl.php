<!DOCTYPE html>
<html>

<head>
    <title>Topics</title>
    <meta charset="UTF-8" />
    <?=$styles?>
    <?=$head_scripts?>
</head>

<body>
    <?=$topnav?>
    <?=$sidenav?>
    <section class="media-topics-wrapper" id="topics">
        <? foreach($media_divs as $media_div): ?>
            <div class="media-div <?=$media_div['subclass']?>">
                <a href="<?=$media_div['subclass']?>.html">
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
    <?=$footer?>
    <?=$foot_scripts?>
</body>

</html>