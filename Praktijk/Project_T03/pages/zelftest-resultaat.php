<?php
/*
 * Author: Kaine van Ommeren & Daan Wolfert
 * Date: 14-04-2022
 * File: zelftest-resultaat.php
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
<form action="zelftest.php" method="get">
    <table>
        <thead>
        <h3 class="titleQuestion">Naam vraag
        </h3>
        </thead>
        <tbody>
        <tr>
            <td>
                <label>
                    Naam vraag - antwoord is:
                </label>
            </td>
            <td>
                <?php
                    $question1 = ($_POST['question1']);
                    echo $question1;
                ?>
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

