<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>About Me</title>
    <?=$styles?>
    <?=$head_scripts?>
</head>

<body>
    <div class="body-content">
        <?=$topnav?>
        <?=$sidenav?>
        <main class="card">
            <div class="column">
                <h3>Contact</h3>
                <p>If you want to cooperate with me, or if you don't have a photographer, feel free to contact me...</p>
                <p><strong></strong>Email</strong><br><a href="mailto:#" title="">shunticov@gmail.com</a></p>
                <p><b>Tel.</b><br>+375296312269 vel<br>+375292409167 mts</p>
                <p><strong>Shunticov Sergey<br> Photography</strong><br> Mogilev, Belarus<br><br></p>
            </div>
            <div class="column contact-form">
                <h3>Keep In Touch!</h3>
                <section class="inputs">
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="email" placeholder="Email">
                    <textarea name="message" placeholder="Message"></textarea>
                    <button type="submit" formmethod="post">SEND</button>
                </section>
            </div>
        </main>
    </div>
    <?=$footer?>
    <?=$foot_scripts?>
</body>

</html>