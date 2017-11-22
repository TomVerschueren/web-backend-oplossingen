<?php

$getal = 37;
$tekst;

if($getal>=0 && $getal<10)
{
$tekst = "Het getal ligt tussen 0 en 10";
}
elseif($getal>=10 && $getal<20)
{
$tekst = "Het getal ligt tussen 10 en 20"; 
}
elseif($getal>=20 && $getal<30)
{
$tekst = "Het getal ligt tussen 20 en 30"; 
}
elseif($getal>=30 && $getal<40)
{
$tekst = "Het getal ligt tussen 30 en 40"; 
}
elseif($getal>=40 && $getal<50)
{
$tekst = "Het getal ligt tussen 40 en 50"; 
}
elseif($getal>=50 && $getal<60)
{
$tekst = "Het getal ligt tussen 50 en 60"; 
}
elseif($getal>=60 && $getal<70)
{
$tekst = "Het getal ligt tussen 60 en 70"; 
}
elseif($getal>=70 && $getal<80)
{
$tekst = "Het getal ligt tussen 70 en 80"; 
}
elseif($getal>=80 && $getal<90)
{
$tekst = "Het getal ligt tussen 80 en 90"; 
}
elseif($getal>=90 && $getal<100)
{
$tekst = "Het getal ligt tussen 90 en 100"; 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht conditional statements if elseif</title>
</head>
<body>
    <h1><?= $getal ?></h1>
    <p><?= $tekst ?></p>
    <p><?= strrev($tekst) ?></p>
</body>
</html>