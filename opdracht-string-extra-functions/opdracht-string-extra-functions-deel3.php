<?php

$lettertje = "e";
$cijfertje = 3;
$langstewoord = "zandzeepsodemineralenwatersteenstralen";

$replaced = str_replace($lettertje, $cijfertje, $langstewoord);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht-string-extra-functions-deel3</title>
</head>
<body>
<p><?= $replaced ?></p>
</body>
</html>