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
                De Academie is leuk.
            </h2>
            <p>
                Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos explicabo facilis numquam, quos ratione reprehenderit sed suscipit voluptas. Assumenda et, explicabo odio perferendis praesentium sit voluptate! Animi cum fugit provident?
            </p>
        </article>
        <article>
            <h2>
                Group Anonymous is de beste van de gehele academie.
            </h2>
            <p>
                Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet.

            </p>
        </article>
        </body>
    <footer>
        <?php
        include "./include/footer.php";
        ?>
    </footer>
</html>
