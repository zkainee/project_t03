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
        <link rel="stylesheet" href="../css/style_zelftest.css">
    </head>
    <header>
        <?php
        include "../include/navigation2.php";
        ?>
    </header>
    <body>
    <form action="zelftest-resultaat.php" method="post">
        <table>
            <thead>
                <h3 class="titleQuestion">Naam vraag
            </h3>
            <p id="centerP">
                Welkom op de vernieuwde zelftest<br>
                Deze is gemaakt door onze excellente leerlingen genaamd: Daan Wolfert & Kaine van Ommeren.
            </p>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <label>
                            1.	Ben je een persoon die goed individueel kan werken?
                        </label>
                    </td>
                    <td>
                        <input name="question2" type="radio" value="Ja" required>Ja
                    </td>
                    <td>
                        <input name="question2" type="radio" value="Nee" required>Nee
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            2.	Heb je interresse in programmeren?
                        </label>
                    </td>
                    <td>
                        <input name="question3" type="radio" value="Ja" required>Ja
                    </td>
                    <td>
                        <input name="question3" type="radio" value="Nee" required>Nee
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            3.	Kan je gemakkelijk met een laptop omgaan?
                        </label>
                    </td>
                    <td>
                        <input name="question4" type="radio" value="Ja" required>Ja
                    </td>
                    <td>
                        <input name="question4" type="radio" value="Nee" required>Nee
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            4.	Kun je goed samenwerken met een groepje, bijv. aan een project?
                        </label>
                    </td>
                    <td>
                        <input name="question5" type="radio" value="Ja" required>Ja
                    </td>
                    <td>
                        <input name="question5" type="radio" value="Nee" required>Nee
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            5.	Heb je al ervaring met programmeren of met netwerkbeheerder?
                        </label>
                    </td>
                    <td>
                        <input name="question6" type="radio" value="Ja" required>Ja
                    </td>
                    <td>
                        <input name="question6" type="radio" value="Nee" required>Nee
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            6.	Vind je ICT-onderwerpen interressant?
                        </label>
                    </td>
                    <td>
                        <input name="question7" type="radio" value="Ja" required>Ja
                    </td>
                    <td>
                        <input name="question7" type="radio" value="Nee" required>Nee
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            7.	Vind je het leuk om puzzels op te lossen?
                        </label>
                    </td>
                    <td>
                        <input name="question8" type="radio" value="Ja" required>Ja
                    </td>
                    <td>
                        <input name="question8" type="radio" value="Nee" required>Nee
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            8.	Ben je gemotiveerd?
                        </label>
                    </td>
                    <td>
                        <input name="question9" type="radio" value="Ja" required>Ja
                    </td>
                    <td>
                        <input name="question9" type="radio" value="Nee" required>Nee
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            9.	Kan je goed plannen?
                        </label>
                    </td>
                    <td>
                        <input name="question10" type="radio" value="Ja" required>Ja
                    </td>
                    <td>
                        <input name="question10" type="radio" value="Nee" required>Nee
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            10.	 Vind je digitaal leren fijn?
                        </label>
                    </td>
                    <td>
                        <input name="question11" type="radio" value="Ja" required>Ja
                    </td>
                    <td>
                        <input name="question11" type="radio" value="Nee" required>Nee
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            11.	 Is programmeren iets dat je interresseert?
                        </label>
                    </td>
                    <td>
                        <input name="question12" type="radio" value="Ja" required>Ja
                    </td>
                    <td>
                        <input name="question12" type="radio" value="Nee" required>Nee
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            12.	Vind je het leuk om met servers te werken?
                        </label>
                    </td>
                    <td>
                        <input name="question13" type="radio" value="Ja" required>Ja
                    </td>
                    <td>
                        <input name="question13" type="radio" value="Nee" required>Nee
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            13.	 Kan je goed omgaan met veranderingen?
                        </label>
                    </td>
                    <td>
                        <input name="question14" type="radio" value="Ja" required>Ja
                    </td>
                    <td>
                        <input name="question14" type="radio" value="Nee" required>Nee
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            14.	 Kan je beter uit een boek leren of digitaal?
                        </label>
                    </td>
                    <td>
                        <input name="question15" type="radio" value="Boek" required>Boek
                    </td>
                    <td>
                        <input name="question15" type="radio" value="Digitaal" required>Digitaal
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            15.	Vind je het leuk om te leren hoe je websites moet maken?
                        </label>
                    </td>
                    <td>
                        <input name="question16" type="radio" value="Ja" required>Ja
                    </td>
                    <td>
                        <input name="question16" type="radio" value="Nee" required>Nee
                    </td>
                </tr>
                <tr>
                    <td id="buttonCenter">
                        <input  type="submit" value="Verzenden">
                    </td>
                </tr>
            </tbody>
        </table>
        <h3>
            Druk op de bovenstaande knop om jouw test in te leveren.
        </h3>
    </body>
    <footer>
        <?php
        include "../include/footer2.php";
        ?>
    </footer>
</html>

