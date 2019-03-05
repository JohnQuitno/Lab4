<?php
$quantity1 = $_POST["quantity1"];
$quantity2 = $_POST["quantity2"];
$quantity3 = $_POST["quantity3"];
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$shipping = $_POST["shipping"];
$sub1 = $quantity1 * 55;
$sub2 = $quantity1 * 1350;
$sub3 = $quantity1 * 95;
$total = $sub1 + $sub2 + $sub3 + $shipping;

echo "<body style='background-color: #346185;'><h1>Welcome to the store $Username, your password is $Password and your receipt is below</h1><table style='height: 50%;width:50%;border: 1px solid black;text-align: center;color: #346185;background-color:#a6d1f3;'><tr><td></td><td>Quantity</td><td>Price Per Item</td><td>Sub Total</td></tr>";
echo "<tr><td>860 EVO SSD</td><td>$quantity1</td><td>55</td><td>$$sub1</td></tr>";
echo "<tr><td>RTX 2080 Graphics Card</td><td>$quantity2</td><td>1350</td><td>$$sub2</td></tr>";
echo "<tr><td>Corsair Vengeance Ram 16gb</td><td>$quantity3</td><td>95</td><td>$$sub3</td></tr>";
echo "<tr><td>Shippping Cost</td><td></td><td></td><td>$$shipping</tr>";
echo "<tr><td>Total Cost</td><td></td><td></td><td>$$total</td></tr></table></body>";

?>
