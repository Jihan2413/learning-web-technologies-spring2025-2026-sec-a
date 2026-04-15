<?php
$letters = ["A", "B", "C", "D", "E", "F"];
$index = 0;

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $letters[$index] . " ";
        $index++;
    }
    echo "<br>";
}
?>