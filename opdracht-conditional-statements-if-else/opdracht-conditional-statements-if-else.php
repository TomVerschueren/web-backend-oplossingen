<?php

$jaar = 2017;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht conditional statements if else</title>
</head>
<body>
    <h1><?= $jaar ?></h1>
    <p>
<?php if($jaar%4 == 0 && $jaar% 100 != 0 || $jaar%400 == 0)
{
    echo "dit jaar is een schrikkeljaar";
}
else
{
    echo "dit jaartal is geen schrikkeljaar";
}
        
?>
</p>
</body>
</html>