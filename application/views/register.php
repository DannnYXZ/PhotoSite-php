<main class="card">
    <h2>REGISTER</h2>
        <form method="POST" class="inputs" action="/auth/register">
            <? if(isset($ERR_MSG)) :?>
                <?= '<span class="notify">'.$ERR_MSG.'</span>' ?>
            <? endif ?>
            Username<input
                type="text"
                name="login"
                minlength="3"
                maxlength="32"
                pattern="^[a-zA-Z0-9]+$"
                required="required"
                title="Login MUST consist only of A-Za-z0-9"
                placeholder="Username">
            Password<input
                type="password"
                name="pass"
                minlength="4"
                maxlength="32"
                required="required"
                placeholder="Password">
            <button name="submit" type="submit" formmethod="post">REGISTER</button>
        </form>
</main>