<!DOCTYPE html>
<html>

<head>
  <script src="js/jquery.js"></script>
  <title>About Me</title>
  <meta charset="UTF-8" />
  <?=$styles?>
  <?=$head_scripts?>
</head>

<body>
  <div class="body-content">
    <?=$topnav?>
    <?=$sidenav?>
    <main class="about-me">
      <div>
        <article class="intro-text">
          <h1>Who am I?</h1>
          <h2>I'm the guy who knows how to make an awesome photos</h2>
        </article>
        <a class="img-envelope">
          <div class="img-push">
            <img src="img/about-2.jpg" />
          </div>
        </a>
      </div>
      <div>
        <a class="img-envelope">
          <div class="img-push">
            <img src="img/about-3.jpg" />
          </div>
        </a>
        <article class="intro-text">
          <h1>Blah Blah Blah</h1>
          <h2>I'm the guy who knows how to make an awesome photos</h2>
        </article>
      </div>
    </main>
  </div>
  <?=$footer?>
  <?=$foot_scripts?>
</body>

</html>