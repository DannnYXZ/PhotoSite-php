<nav class="topnav">
    <? include($TPL_PATH.'nav_btns.php') ?>
    <? if(defined('USER_NAME')): ?>
        <div class="user-info">
            <?=USER_NAME?>
            <a href="/auth/logout">
                <button class="button">LOGOUT</button>
            </a>
        </div>
    <? endif ?>
</nav>