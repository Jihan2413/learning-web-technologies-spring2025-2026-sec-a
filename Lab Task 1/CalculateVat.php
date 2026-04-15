<?php
$amount = 200;

$vat = $amount * 0.15;
$total = $amount + $vat;

echo "VAT: " . $vat . "<br>";
echo "Total Amount: " . $total;
?>