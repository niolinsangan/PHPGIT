<?php

function calculateTriangleArea($side1, $side2, $side3) {
    // Calculate the semi-perimeter
    $s = ($side1 + $side2 + $side3) / 2;

    // Calculate the area using Heron's Formula
    $area = sqrt($s * ($s - $side1) * ($s - $side2) * ($s - $side3));

    return $area;
}

$side1 = 5;
$side2 = 7;
$side3 = 9;

$area = calculateTriangleArea($side1, $side2, $side3);
echo "The area of the triangle is: " . number_format((float)$area, 2, '.', '') . " square units";
?>  