<?php

$seconden = 221108521;

$minuten = floor($seconden/60);

$uren = floor($minuten/60);

$dagen = floor($uren/24);

$weken = floor($dagen/7);

$maanden = floor($dagen/31);

$jaren = floor($dagen/365);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Deel 2</title>
</head>
<body>
    <h1>Jaren, maanden, weken, dagen, uren, minuten en seconden</h1>
    
    <ul>
        <li>minuten: <?= $minuten ?></li>
        <li>uren: <?= $uren ?></li>
        <li>dagen: <?= $dagen ?></li>
        <li>weken: <?= $weken ?></li>
        <li>maanden (31): <?= $maanden ?></li>
        <li>jaren (365): <?= $jaren ?></li>
    </ul>
</body>
</html>