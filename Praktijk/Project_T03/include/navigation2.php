<?php

/*
 * Author: Kaine van Ommeren & Daan Wolfert
 * Date: 31-03-2022
 * File: navigation.php
 */
?>

<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!---->
<!--<div class="topnav">-->
<!--    <a href="../index.php" class="active"><img class="kw1clogo" src="../images/kw1clogo.svg"></a>-->
<!--    <nav id="myLinks">-->
<!--        <ul>-->
<!--            <li><a href='../index.php'>Opleidingen</a></li>-->
<!--            <li><a href='../index.php'>Studiekeuze</a></li>-->
<!--            <li><a href='../index.php'>Volwassen & Werkgevers</a></li>-->
<!--            <li><a href='../index.php'>Studenteninfo</a></li>-->
<!--            <li><a href='./zelftest.php'>Zelftest</a></li>-->
<!--        </ul>-->
<!--    </nav>-->
<!--    <a href="javascript:void(0);" class="icon" onclick="myFunction()">-->
<!--        <i class="fa fa-bars"></i>-->
<!--    </a>-->
<!--    <img id="menuicon" src="../images/menu.png">-->
<!--</div>-->

<nav class="hamburger-menu">
    <input id="menu__toggle" type="checkbox"/>
    <label class="menu__btn" for="menu__toggle">
        <span></span>
    </label>
    <ul class="menu__box">
        <li><a class="menu__item" href="../index.php">Opleidingen</a></li>
        <li><a class="menu__item" href="../index.php">Studiekeuze</a></li>
        <li><a class="menu__item" href="../index.php">Volwassen & Werkgevers</a></li>
        <li><a class="menu__item" href="../index.php">Studenteninfo</a></li>
        <li><a class="menu__item" href="../pages/zelftest.php">Zelftest</a></li>
    </ul>
</nav>