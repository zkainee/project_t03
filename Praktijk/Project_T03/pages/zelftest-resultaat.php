<?php
/*
 * Author: Kaine van Ommeren & Daan Wolfert
 * Date: 14-04-2022
 * File: zelftest-resultaat.php
 */

session_start();
if (isset($_SESSION['totalScore']) == false)
{
    $_SESSION['totalScore'] = 0;
}
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
    <link href="../css/style_zelftest-resultaat.css" rel="stylesheet">
</head>
<header>
    <?php
    include "../include/navigation2.php";
    ?>
</header>
<body>
<h2>
    Resultaten beantwoorde vragen.
</h2>
<form action="zelftest.php" method="get">
    <table>
        <thead>
        <h3 class="titleQuestion">Vragen:
        </h3>
        </thead>
        <tbody>
        <tr>
            <td>
                <label>
                    1.	Ben je een persoon die goed individueel kan werken?
                </label>
            </td>
            <td>
                Antwoord is:
                <?php

                    $question2 = ($_POST['question2']);

                    if($question2 == 'Ja')
                    {
                        $_SESSION['totalScore'] += 40;
                    }
                    else if ($question2 == 'Nee')
                    {
                        $_SESSION['totalScore'] += 20;
                    }
                    echo $question2;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    2.	Heb je interresse in programmeren?
                </label>
            </td>
            <td>
                Antwoord is:
                <?php
                $question3 = ($_POST['question3']);

                if ($question3 == 'Ja')
                {
                    $_SESSION['totalScore'] += 40;
                }
                else if ($question3 == 'Nee')
                {
                    $_SESSION['totalScore'] += 20;
                }
                echo $question3;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    3.	Kan je gemakkelijk met een laptop omgaan?
                </label>
            </td>
            <td>
                Antwoord is:
                <?php
                $question4 = ($_POST['question4']);

                if ($question4 == 'Ja')
                {
                    $_SESSION['totalScore'] += 40;
                }
                else if ($question4 == 'Nee')
                {
                    $_SESSION['totalScore'] += 20;
                }
                echo $question4;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    4.	Kun je goed samenwerken met een groepje, bijv. aan een project?
                </label>
            </td>
            <td>
                Antwoord is:
                <?php
                $question5 = ($_POST['question5']);
                if ($question5 == 'Ja')
                {
                    $_SESSION['totalScore'] += 40;
                }
                else if ($question5 == 'Nee')
                {
                    $_SESSION['totalScore'] += 20;
                }

                echo $question5;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    5.	Heb je al ervaring met programmeren of met netwerkbeheerder?
                </label>
            </td>
            <td>
                Antwoord is:
                <?php
                $question6 = ($_POST['question6']);
                if ($question6 == 'Ja')
                {
                    $_SESSION['totalScore'] += 40;
                }
                else if ($question6 == 'Nee')
                {
                    $_SESSION['totalScore'] += 20;
                }
                echo $question6;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    6.	Vind je ICT-onderwerpen interressant?
                </label>
            </td>
            <td>
                Antwoord is:
                <?php
                $question7 = ($_POST['question7']);
                if ($question7 == 'Ja')
                {
                    $_SESSION['totalScore'] += 40;
                }
                else if ($question7 == 'Nee')
                {
                    $_SESSION['totalScore'] += 20;
                }
                echo $question7;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    7.	Vind je het leuk om puzzels op te lossen?
                </label>
            </td>
            <td>
                Antwoord is:
                <?php
                $question8 = ($_POST['question8']);
                if ($question8 == 'Ja')
                {
                    $_SESSION['totalScore'] += 40;
                }
                else if ($question8 == 'Nee')
                {
                    $_SESSION['totalScore'] += 20;
                }
                echo $question8;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    8.	Ben je gemotiveerd?
                </label>
            </td>
            <td>
                Antwoord is:
                <?php
                $question9 = ($_POST['question9']);
                if ($question9 == 'Ja')
                {
                    $_SESSION['totalScore'] += 40;
                }
                else if ($question9 == 'Nee')
                {
                    $_SESSION['totalScore'] += 20;
                }
                echo $question9;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    9.	Kan je goed plannen?
                </label>
            </td>
            <td>
                Antwoord is:
                <?php
                $question10 = ($_POST['question10']);
                if ($question10 == 'Ja')
                {
                    $_SESSION['totalScore'] += 40;
                }
                else if ($question10 == 'Nee')
                {
                    $_SESSION['totalScore'] += 20;
                }
                echo $question10;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                   10. Vind je digitaal leren
                </label>
            </td>
            <td>
                Antwoord is:
                <?php
                $question11 = ($_POST['question11']);
                if ($question11 == 'Ja')
                {
                    $_SESSION['totalScore'] += 40;
                }
                else if ($question11 == 'Nee')
                {
                    $_SESSION['totalScore'] += 20;
                }
                echo $question11;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                   11. Is programmeren iets dat je
                </label>
            </td>
            <td>
                Antwoord is:
                <?php
                $question12 = ($_POST['question12']);
                if ($question12 == 'Ja')
                {
                    $_SESSION['totalScore'] += 40;
                }
                else if ($question12 == 'Nee')
                {
                    $_SESSION['totalScore'] += 20;
                }
                echo $question12;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    12.	Vind je het leuk om met servers te werken?
                </label>
            </td>
            <td>
                Antwoord is:
                <?php
                $question13 = ($_POST['question13']);
                if ($question13 == 'Ja')
                {
                    $_SESSION['totalScore'] += 40;
                }
                else if ($question13 == 'Nee')
                {
                    $_SESSION['totalScore'] += 20;
                }
                echo $question13;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    13.	 Kan je goed omgaan met veranderingen?
                </label>
            </td>
            <td>
                Antwoord is:
                <?php
                $question14 = ($_POST['question14']);
                if ($question14 == 'Ja')
                {
                    $_SESSION['totalScore'] += 40;
                }
                else if ($question14 == 'Nee')
                {
                    $_SESSION['totalScore'] += 20;
                }
                echo $question14;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    14.	 Kan je beter uit een boek leren of digitaal?
                </label>
            </td>
            <td>
                Antwoord is:
                <?php
                $question15 = ($_POST['question15']);
                if ($question15 == 'Digitaal')
                {
                    $_SESSION['totalScore'] += 40;
                }
                else if ($question15 == 'Boek')
                {
                    $_SESSION['totalScore'] += 20;
                }
                echo $question15;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    15.	Vind je het leuk om te leren hoe je websites moet maken?
                </label>
            </td>
            <td>
                Antwoord is:
                <?php
                $question16 = ($_POST['question16']);
                if ($question16 == 'Ja')
                {
                    $_SESSION['totalScore'] += 40;
                }
                else if ($question16 == 'Nee')
                {
                    $_SESSION['totalScore'] += 20;
                }
                echo $question16;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo "<p> Totale punten behaald is: " . $_SESSION['totalScore'] .  " </p>";
                session_destroy();
                ?>
            </td>
        </tr>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>
<footer>
    <?php
    include "../include/footer2.php";
    ?>
</footer>
</html>

