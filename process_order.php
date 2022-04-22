<?php
include "./lab_09.html";

$username = $_POST["Username"];
$password = $_POST["Password"];
$heart_chip_quantity = (int)$_POST["Heart_Chip"];
$kanye_air_quantity = (int)$_POST["Donda_Air"];
$tortilla_blanket_quantity = (int)$_POST["Tortilla_Blanket"];
$shipping_method = $_POST["shipping"];

//Create receipt div and echo title with customers name
echo "<br><br><div id=\"receipt\"><h1 class=\"title\">Thank you for your order, ".$username."!</h1>";
//Echo password
echo "<p>Password: $password</p>";
//Create receipt table and headers
echo "<table id=\"receipt_table\"><tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
//Heart Chip Cost
$heart_chip_total = $heart_chip_quantity*100;
echo "<tr><th>Heart Chip</th><td>$heart_chip_quantity</td><td>$100</td><td>$".$heart_chip_total."</td></tr>";
//Kanye Air Cost
$kanye_air_total = $kanye_air_quantity*0.10;
echo "<tr><th>Kanye Air</th><td>$kanye_air_quantity</td><td>$0.10</td><td>$".$kanye_air_total."</td></tr>";
//Tortilla Blanket Cost
$tortilla_blanket_total = $tortilla_blanket_quantity*1000;
echo "<tr><th>Tortilla Blanket</th><td>$tortilla_blanket_quantity</td><td>$1000</td><td>$".$tortilla_blanket_total."</td></tr>";
//Shipping Cost and updating string to echo
if($shipping_method == "seven_day") {
  $shipping_method = "Seven Day";
  $shipping_total = 0;
}
else if($shipping_method == "three_day") {
  $shipping_method = "Three Day";
  $shipping_total = 5;
}
else {
  $shipping_method = "Overnight";
  $shipping_total = 50;
}
echo "<tr><th>Shipping</th><td></td><td>$shipping_method</td><td>$".$shipping_total."</td></tr>";
//Total Cost
$total_cost = $heart_chip_total = $heart_chip_total + $kanye_air_total +$tortilla_blanket_total + $shipping_total;
echo "<tr><th>Total Cost</th><td></td><td></td><th>$".$total_cost."</th></tr></table></div>";
?>
