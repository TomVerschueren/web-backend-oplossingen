<?php

$getal = 6;
$day = "";

if ($getal == 1)
{
    $day = "maandag";
}

if ($getal == 2)
{
    $day = "dinsdag";
}

if ($getal == 3)
{
    $day = "woensdag";
}

if ($getal == 4)
{
    $day = "donderdag";
}

if ($getal == 5)
{
    $day = "vrijdag";
}

if ($getal == 6)
{
    $day = "zaterdag";
}

if ($getal == 7)
{
    $day = "zondag";
}

$editedDay = strrev(preg_replace('/A/','a',strrev(strtoupper($day)), 1));

echo $editedDay;

?>