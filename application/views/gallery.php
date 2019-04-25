<main class="gallery">
    <? if(isset($img_list)): ?>

    <? for($x = 0; $x < 4; $x++): ?>
        <?= '<div class="gallery-col">' ?>
            <? for($i = $x; $i < count($img_list); $i += 4): ?>
                <?= '<a class="gallery-pic" href='.$img_list[$i].'>' ?>
                    <?= '<img src=/'.$img_list[$i].'>' ?>
                <?= '</a>' ?>
            <? endfor ?>
        <?= '</div>' ?>
    <? endfor ?>
    
    <? endif ?>
</main>