<?php
/*
 * Author: Kaine van Ommeren & Daan Wolfert
 * Date: 05-04-2022
 * File: zelftest.php
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
        <link rel="icon" href="https://www.kw1c.nl/favicon-32x32.png?v=kw1cweb3">
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/navigation.css" rel="stylesheet">
        <link href="../css/style_zelftest.css" rel="stylesheet">
    </head>
    <header>
        <?php
        include "../include/navigation2.php";
        ?>
    </header>
    <body>
    <?php
                date_default_timezone_set("Europe/Amsterdam");
                $time = date("H");
                    if ($time <=5)
                    {
                        echo "<h1>Goedenacht en welkom bij de zelftest pagina!</h1>";
                    }
                    else if($time <=11)
                {
                    echo "<h1>Goedemorgen en welkom bij de zelftest pagina!</h1>";
                }
                    else if($time <=17)
                    {
                        echo "<h1>Goedemiddag en welkom bij de zelftest pagina!</h1>";
                    }
                    else if($time <=23)
                    {
                        echo "<h1>Goedenavond en welkom bij de zelftest pagina!</h1>";
                    }
    ?>
        <article>
            <h2>
                lorem ipsum dolor sit amet
            </h2>

        </article>
    </body>
    <footer>
        <?php
        include "../include/footer2.php";
        ?>
    </footer>
</html>

