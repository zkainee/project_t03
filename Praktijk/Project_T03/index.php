<?php
/*
 * Author: Kaine van Ommeren & Daan Wolfert
 * Date: 30-03-2022
 * file: index.php
 */
?>
<!doctype html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ICT Academie</title>
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="https://www.kw1c.nl/favicon-32x32.png?v=kw1cweb3">
        <link href="css/style_index.css" rel="stylesheet">
        <link href="css/navigation.css" rel="stylesheet">
        <script src="js/menu.js"></script>
    </head>
        <header>
            <?php
                include "./include/navigation.php";
            ?>
        </header>
        <body>
            <img id="ictBackground" src="images/ictbackground.jpg">

            <h1 id="ictAcedemie">
                ICT-ACADEMIE
                <img class="redWhiteline" src="images/redWhiteline.png">
            </h1>
        <article>
            <h2>
                Het Koning Willem I College
            </h2>
            <p>
                Welkom op de vernieuwde website van het KW1C, de school die kijkt naar de toekomst.
                Nieuwe studenten hebben de mogelijkheid om gebruik te kunnen maken van de nieuwe zelftest.
                Deze geeft jou een beeld wat jou misschien te wachten staat op een van de opleidingen op de ICT-Academie.
            </p>
        </article>
        <article>
            <h2>
                Group Anonymous is de beste van de gehele academie.
            </h2>
            <p>
                Wij (Groep Anonymous) hebben dankzij de leerzame & interesante lessen deze website in het eerste leerjaar van de grond weten op te bouwen.
                Neem daarom zeker een kijkje op de status van de website op onze <a href="project_t03">GitHub</a>.

            </p>
        </article>
        </body>
    <footer>
        <?php
        include "./include/footer.php";
        ?>
    </footer>
</html>
