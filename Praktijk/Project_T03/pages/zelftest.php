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
    </head>
    <header>
        <?php
        include "../include/navigation2.php";
        ?>
    </header>
    <body>
        <h2>
            lorem ipsum dolor sit amet
        </h2>
    <form action="zelftest-resultaat.php" method="post">
        <table>
            <thead>
                <h3 class="titleQuestion">Naam vraag
            </h3>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <label>Wie heeft Aids</label>
                    </td>
                    <td>
                        <input name="question1" type="radio" value="Jan">Jan
                    </td>
                    <td>
                        <input name="question1" type="radio" value="Piet">Piet
                    </td>
                    <td>
                        <input name="question1" type="radio" value="Klaas">Klaas
                    </td>
                    <td>
                        <input name="question1" type="radio" value="Henk">Henk
                    </td>
                    <td>
                        <input type="submit" value="Verzenden">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>

                        </label>
                    </td>
                </tr>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </body>
    <footer>
        <?php
        include "../include/footer2.php";
        ?>
    </footer>
</html>

