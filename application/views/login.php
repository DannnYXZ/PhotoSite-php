<main class="card">
    <form method="POST" class="inputs" action="/auth/login">
        <? if(isset($ERR_MSG)) : ?>
            <?= '<span class="notify">' . $ERR_MSG . '</span>' ?>
        <? endif ?>
        Username<input type="text" name="login" maxlength="32" placeholder="Username">
        Password<input type="password" name="pass" maxlength="32" placeholder="Password">
        <button name="submit" type="submit" formmethod="post">LOGIN</button>
        <a href="register" class="reg-btn">Register</a>
    </form>
</main>