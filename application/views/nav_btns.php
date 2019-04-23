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
    <? if(!defined('USER_NAME')) :?>
        <li>
            <a href="/login">LOGIN</a>
        </li>
    <? elseif(USER_NAME == 'admin'): ?>
        <li>
            <a href="/editor">EDITOR</a>
        </li>
    <? endif ?>
</ul>