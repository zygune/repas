<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
// Atspausdinti masyva su poromis dvejais budais
/*
$a = ['Jonas', 'Petras', 'Antanas', 'Povilas'];

foreach ($a as $key => $value) {
    foreach ($a as $key2 => $value2) {
        if ($value != $value2 && $key < $key2) {
            echo $value . '+' . $value2 . '<br>';
        }
    }
}
echo '<br><br>';

foreach ($a as $value) {
    foreach ($a as $value2) {
        if ($value != $value2) {
            echo $value . '+' . $value2 . '<br>';
        }
    }
}
*/

// Max stulpetio suma
/*
$a = [[1, 3, 4], [2, 5], [2 => 3, 5 => 8], [1, 1, 5 => 1]];

$sum=[];
foreach ($a as $array) {
    foreach ($array as $key=>$value) {
        if(isset($sum[$key])) {
            $sum[$key] += $value;
        }else{
            $sum[$key]= $value;
        }
    }
}
echo max($sum);
*/
?>
</body>
</html>