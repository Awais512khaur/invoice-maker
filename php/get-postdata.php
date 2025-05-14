<?php
$customer_name = $_POST['customer_name'] ?? 'Unknown';
$date = $_POST['invoice_date'] ?? date('Y-m-d');
$items = $_POST['item_name'] ?? [];
$quantities = $_POST['quantity'] ?? [];
$prices = $_POST['price'] ?? [];
$total = 0;
$rows = "";
for ($i = 0; $i < count($items); $i++) {
    $item = htmlspecialchars($items[$i]);
    $qty = floatval($quantities[$i]);
    $price = floatval($prices[$i]);
    $subtotal = $qty * $price;
    $total += $subtotal;
    $rows .= "
        <tr>
            <td>{$item}</td>
            <td>{$qty}</td>
            <td>" . number_format($price, 2) . "</td>
            <td>" . number_format($subtotal, 2) . "</td>
        </tr>
    ";
}
?>