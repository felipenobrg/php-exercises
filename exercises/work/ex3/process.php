<?php
$product_code = $_POST["product_code"];
$product_quantity = $_POST["product_quantity"];

echo "<table border='1'>
<tr>
<th>Dados da compra</th>
</tr>";

function calculateTotalPrice($unitPrice, $product_quantity)
{
    return $unitPrice * $product_quantity;
}

if ($product_code >= 1 && $product_code <= 40) {
    $unitPrice = 10;
    $discountPercentage = 0;

    if ($product_code >= 11 && $product_code <= 20) {
        $unitPrice = 15;
    } elseif ($product_code >= 21 && $product_code <= 30) {
        $unitPrice = 20;
    } elseif ($product_code >= 31 && $product_code <= 40) {
        $unitPrice = 30;
    }

    $total_price = calculateTotalPrice($unitPrice, $product_quantity);

    if ($total_price <= 250) {
        $discountPercentage = 5;
    } elseif ($total_price >= 250 && $total_price <= 500) {
        $discountPercentage = 10;
    } elseif ($total_price > 500) {
        $discountPercentage = 15;
    }

    $discountAmount = ($total_price * $discountPercentage) / 100;
    $total_price_after_discount = $total_price - $discountAmount;

    echo "<tr>";
    echo "<td>Preço unitário do produto: R$ $unitPrice,00</td>";
    echo "<td>Preço total: R$ $total_price,00</td>";

    if ($discountPercentage > 0) {
        echo "<td>Desconto: R$ $discountAmount,00</td>";
        echo "<td>Preço final com desconto: R$ $total_price_after_discount,00</td>";
    } else {
        echo "<td>Sem desconto aplicável</td>";
    }

    echo "</tr>";
} else {
    echo "<tr><td>Informe um código válido entre (1 e 40)</td></tr>";
}

echo "</table>";
?>