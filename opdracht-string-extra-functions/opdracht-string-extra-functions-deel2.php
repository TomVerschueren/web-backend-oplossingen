<?php

$fruit = "ananas";
$last_a = strrpos($fruit, "a");
$uppercaseFruit = strtoupper($fruit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht-string-extra-functions-deel2</title>
</head>
<body>
    <p>position of las a: <?= $last_a ?></p>
    <p><?= $uppercaseFruit ?></p>
</body>
</html>