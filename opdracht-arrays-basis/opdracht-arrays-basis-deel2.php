<?php

$myArray = array(1,2,3,4,5);

$vermenigvuldiging = $myArray[0] * $myArray[1] * $myArray[2] * $myArray[3] * $myArray[4];

$onevenGetallen = array();

foreach($myArray as $getal)
{
    if($getal%2 != 0)
    {
        $onevenGetallen[] = $getal;
    }
}

$myArray2 = array(5,4,3,2,1);

$totalArray = array();

for($i = 0; $i < 5; $i++)
{
    $totalArray[] = $myArray[$i] + $myArray2[$i];
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht arrays basis</title>
</head>
<body>
    <h1>vermenigvuldiging</h1>
    <p><?php echo $myArray[0]." * ".$myArray[1]." * ".$myArray[2]." * ".$myArray[3]." * ".$myArray[4]." = ".$vermenigvuldiging; ?></p>
    <h1>oneven getallen</h1>
    <p><?php foreach($onevenGetallen as $odd){ echo $odd.' ';} ?></p>
    <h1>optellen 2 arrays</h1>
    <p><?php echo $totalArray[0].", ".$totalArray[1].", ".$totalArray[2].", ".$totalArray[3].", ".$totalArray[4] ?></p>
</body>
</html>