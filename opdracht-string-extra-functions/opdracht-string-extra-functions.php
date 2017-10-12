<?php

$fruit = "kokosnoot";
$fruit_length = strlen($fruit);
$first_o = strpos($fruit, "o");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht-string-extra-functions-deel1</title>
</head>
<body>
    <p>length: <?= $fruit_length ?></p>
    <p>position of first o: <?= $first_o ?></p>
</body>
</html>