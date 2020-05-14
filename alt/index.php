<!DOCTYPE html>
<html>

<head>
    <title>WebDev557 | Homepage</title>

    <meta charset="UTF-8">
    <meta name="description" content="Homepage von WebDev557">
    <meta name="author" content="Luca Joel Graumann/WebDev557">
    <meta name="keywords" content="webdev557">

    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="icon" href="/alt/favicon.jpg" type="image/jpg">
</head>

<body>
      <header>
        <h1>WebDev557</h1>
        <h2>HOMEPAGE</h2>
      </header>
      <nav>
        <ul>
            <a href="/alt/uberuns"><li>Impressum</li></a>
        </ul>
      </nav>
      <section>
        <article>
            <h2>WebDev557 - News</h2>
            <blockquote>Die Homepage erscheint jetzt im neuen Gewand... Doch es wird sich noch mehr tun...</blockquote>
            <p>Schau doch einfach sp&auml;ter einfach noch einmal vorbei...</p>
        </article>
        <article>
            <h2><?php
        echo $_POST['title'];
        ?></h2>
            <p>
        <?php
        echo $_POST['text'];
        ?>
        </p>
        </article>
        <article>
            <h2>WebDev557 - Write</h2>
            <p>Hier k&ouml;nnt ihr einen Eigenen Artikel schreiben...</p>
            <p>Dieser erscheint dann in der leeren Box oben...</p>
            <p><?php
            echo '
            <form method="POST" action="index.php">

            <input type="text" placeholder="Hier etwas reinschreiben f&uuml;r die &Uuml;berschrift..." name="title"><br><br>
            <input type="text" placeholder="Hier etwas reinschreiben f&uuml;r den Artikel..." name="text"><br><br>
            <input type="submit" value="Absenden">

            </form>
            ';
            ?></p>
        </article>
        <article>
            <h2>Social Media</h2>
            <a href="https://www.instagram.com/webdev557">
            <img src="instagram.jpg" alt="Instagram-Logo" />
        </a>
        </article>
      </section>
      <aside>
        <h3>Unser Sponsor</h3>
        <p>DiaKeep</p>
        <a href="http://www.youtube.com/channel/UCZQyatx6M5-WfPe-nWpf9IQ">
            <img src="diakeep.jpg" alt="DiaKeep-Logo" />
        </a>
        <p>&nbsp;</p>
        <h3>Unser Partner</h3>
        <p><a href="https://www.lima-city.de">lima-city.de</a></p>
        <p>kostenloser Webhoster f&uuml;r jeden... Einfach und schnell Dateien Uploaden...</p>  
      </aside>
      <footer>
        <p>&copy; by WebDev557</p>
    </footer>
</body>
</html>