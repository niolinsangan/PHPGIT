<?php
$matrix = array(
    array(12, 23, 34),
    array(45, 55, 62),
    array(71, 84, 90)
);

$i = 0;
while ($i < count($matrix)) {
    $j = 0;
    while ($j < count($matrix[$i])) {
        if ($matrix[$i][$j] % 2 == 0) {
            echo $matrix[$i][$j] . " ";
        }
        $j++;
    }
    $i++;
}
?>