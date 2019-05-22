<nav class="topnav">
    <? include($TPL_PATH.'nav_btns.php') ?>
    <? if($GLOBALS['USER_NAME']): ?>
        <div class="user-info">
            <?=$GLOBALS['USER_NAME']?>
            <a href="/auth/logout">
                <button class="button">LOGOUT</button>
            </a>
        </div>
    <? endif ?>
</nav>