<?php

$cssFile = "style.css";
echo "<link rel='stylesheet' href='" . $cssFile . "'>";

$username = $_POST["username"];
$password = $_POST["password"];
$rtx3080ti = $_POST["3080ti"];

$rtx3090 = $_POST["3090"];
$amd6900 = $_POST["6900"];

$shippingFee = $_POST["shippingFee"];

echo "<svg xmlns='http://www.w3.org/2000/svg'>";
echo "<filter id='motion-blur-filter' filterUnits='userSpaceOnUse'>";  
echo "<feGaussianBlur stdDeviation='100 0'></feGaussianBlur>";
echo "</filter>";
echo "</svg>";


echo "<div id='info-div'>";
echo "<span filter-content='S'>Thank you, $username!</span><br>";
echo "<h2>PW confirmation: $password</h2><br><br>";
echo "</div>";

echo "<div class = 'table-div'>";
echo "<table>";
echo "<tr>";
echo "<th>Order#448</th>";
echo "<th>Quantity</th>";
echo "<th>Unit Price</th>";
echo "<th>Sub Total</th>";
echo "</tr>";
echo "<tr>";
echo "<th>RTX 3080 TI</th>";
echo "<td>$rtx3080ti</td>";
echo "<td>$3</td>";
$valueRTXti = 3 * $rtx3080ti;
echo "<td>$$valueRTXti</td>";
echo "</tr>";
echo "<tr>";
echo "<th>RTX 3090</th>";
echo "<td>$rtx3090</td>";
echo "<td>$2</td>";
$valueRTX90 = 2 * $rtx3090;
echo "<td>$$valueRTX90</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Radeon 6900</th>";
echo "<td>$amd6900</td>";
echo "<td>$1</td>";
$valueAMD = 1 * $amd6900;
echo "<td>$$valueAMD</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Shipping</th>";
echo "<td colspan='2'>$shippingFee</td>";
if ($shippingFee == "Free 7 Day") 
{
    $valueShipping = 0;
} 
else if ($shippingFee == "$50 Over Night") 
{
    $valueShipping = 50;
} 
else if ($shippingFee == "$5 Three Day") 
{
    $valueShipping = 5;
}
echo "<td>$$valueShipping</td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan='3'>Total Cost</th>";
$total = $valueRTXti + $valueRTX90 + $valueAMD + $valueShipping;
echo "<th>$$total</th>";
echo "</tr>";
echo "</table>";
echo "</div>";
