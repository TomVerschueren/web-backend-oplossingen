<?php

$voornaam = "Tom";
$familienaam = "Verschueren";

$volledigeNaam = $voornaam." ".$familienaam;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht-string-concatenate</title>
</head>
<body>
    <p><?= $volledigeNaam ?></p>
    <p><?php echo strlen($volledigeNaam) ?></p>
</body>
</html>