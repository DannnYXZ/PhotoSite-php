<ul class="nav-btns">
    <li>
        <a href="/gallery">GALLERY</a>
    </li>
    <li>
        <a href="/topics#topics">TOPICS</a>
    </li>
    <li>
        <a href="/about">ABOUT ME</a>
    </li>
    <li>
        <a href="/contact">CONTACT</a>
    </li>
    <? if($GLOBALS['USER_NAME']=='') :?>
        <li>
            <a href="/login">LOGIN</a>
        </li>
    <? elseif($GLOBALS['USER_NAME'] == ADMIN_NAME): ?>
        <li>
            <a href="/editor">EDITOR</a>
        </li>
    <? endif ?>
</ul>