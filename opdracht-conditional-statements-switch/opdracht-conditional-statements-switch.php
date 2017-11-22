<?php

$getal = 3;
$dag = "";
switch($getal)
{
    case 1:
        $dag = "maandag";
        break;
    case 2:
        $dag = "dinsdag";
        break;
    case 3:
        $dag = "woensdag";
        break;
    case 4:
        $dag = "donderdag";
        break;
    case 5:
        $dag = "vrijdag";
        break;
    case 6:
        $dag = "zaterdag";
        break;
    case 7:
        $dag = "zonsdag";
        break;
    default:
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht conditional statements switch</title>
</head>
<body>
    <h1><?= $getal ?></h1>
    <p><?= $dag ?></p>
</body>
</html>