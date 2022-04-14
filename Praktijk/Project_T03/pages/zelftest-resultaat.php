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
                    1.	Ben je een persoon die goed individueel kan werken? - Antwoord is:
                </label>
            </td>
            <td>
                <?php
                    $question2 = ($_POST['question2']);
                    echo $question2;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    2.	Heb je interresse in programmeren? - Antwoord is:
                </label>
            </td>
            <td>
                <?php
                $question3 = ($_POST['question3']);
                echo $question3;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    3.	Kan je gemakkelijk met een laptop omgaan? - Antwoord is:
                </label>
            </td>
            <td>
                <?php
                $question4 = ($_POST['question4']);
                echo $question4;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    4.	Kun je goed samenwerken met een groepje, bijv. aan een project? - Antwoord is:
                </label>
            </td>
            <td>
                <?php
                $question5 = ($_POST['question5']);
                echo $question5;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    5.	Heb je al ervaring met programmeren of met netwerkbeheerder? - Antwoord is:
                </label>
            </td>
            <td>
                <?php
                $question6 = ($_POST['question6']);
                echo $question6;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    6.	Vind je ICT-onderwerpen interressant? - Antwoord is:
                </label>
            </td>
            <td>
                <?php
                $question7 = ($_POST['question7']);
                echo $question7;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    7.	Vind je het leuk om puzzels op te lossen? - Antwoord is:
                </label>
            </td>
            <td>
                <?php
                $question8 = ($_POST['question8']);
                echo $question8;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    8.	Ben je gemotiveerd? - Antwoord is:
                </label>
            </td>
            <td>
                <?php
                $question9 = ($_POST['question9']);
                echo $question9;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    9.	Kan je goed plannen? - Antwoord is:
                </label>
            </td>
            <td>
                <?php
                $question10 = ($_POST['question10']);
                echo $question10;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                   10. Vind je digitaal leren fijn? - Antwoord is:
                </label>
            </td>
            <td>
                <?php
                $question11 = ($_POST['question11']);
                echo $question11;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                   11. Is programmeren iets dat je interresseert? - Antwoord is:
                </label>
            </td>
            <td>
                <?php
                $question12 = ($_POST['question12']);
                echo $question12;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    12.	Vind je het leuk om met servers te werken? - Antwoord is:
                </label>
            </td>
            <td>
                <?php
                $question13 = ($_POST['question13']);
                echo $question13;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    13.	 Kan je goed omgaan met veranderingen? - Antwoord is:
                </label>
            </td>
            <td>
                <?php
                $question14 = ($_POST['question14']);
                echo $question14;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    14.	 Kan je beter uit een boek leren of digitaal? - Antwoord is:
                </label>
            </td>
            <td>
                <?php
                $question15 = ($_POST['question15']);
                echo $question15;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    15.	Vind je het leuk om te leren hoe je websites moet maken? - Antwoord is:
                </label>
            </td>
            <td>
                <?php
                $question16 = ($_POST['question16']);
                echo $question16;
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

