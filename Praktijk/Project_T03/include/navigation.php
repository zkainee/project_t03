<?php
/*
 * Author: Kaine van Ommeren & Daan Wolfert
 * Date: 31-03-2022
 * File: navigation.php
 */
?>
<!--<img class="logokw1c" src="./images/kw1clogo.svg">-->
<!--<nav>-->
<!--    <ul>-->
<!--        <li><a href='./index.php'>Opleidingen</a></li>-->
<!--        <li><a href='./index.php'>Studiekeuze</a></li>-->
<!--        <li><a href='./index.php'>Volwassen & Werkgevers</a></li>-->
<!--        <li><a href='./index.php'>Studenteninfo</a></li>-->
<!--        <li><a href='./pages/zelftest.php'>Zelftest</a></li>-->
<!--    </ul>-->
<!--</nav>-->
<!--<img class="hamburger" src="./images/hamburger.png">-->

<nav class="hamburger-menu">
    <input id="menu__toggle" type="checkbox"/>
    <label class="menu__btn" for="menu__toggle">
        <span></span>
    </label>
    <a href="./index.php" class="active"><img class="kw1clogo" src="./images/kw1clogo.svg"></a>
    <ul class="menu__box">
        <li><a class="menu__item" href="./index.php">Opleidingen</a></li>
        <li><a class="menu__item" href="./index.php">Studiekeuze</a></li>
        <li><a class="menu__item" href="./index.php">Volwassen & Werkgevers</a></li>
        <li><a class="menu__item" href="./index.php">Studenteninfo</a></li>
        <li><a class="menu__item" href="./pages/zelftest.php">Zelftest</a></li>
    </ul>

    <img id="menuicon" src="./images/menu.png">
</nav>