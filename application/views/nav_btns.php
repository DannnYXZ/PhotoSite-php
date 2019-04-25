<ul class="nav-btns">
    <li>
        <a href="/gallery/all">GALLERY</a>
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
    <? if(!defined('USER_NAME')) :?>
        <li>
            <a href="/login">LOGIN</a>
        </li>
    <? elseif(USER_NAME == ADMIN_NAME): ?>
        <li>
            <a href="/editor">EDITOR</a>
        </li>
    <? endif ?>
</ul>