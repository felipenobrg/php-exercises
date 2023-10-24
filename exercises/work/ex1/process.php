<?php 
 $car_value = $_POST["car_value"];
 $plots = [
    6 => 0.03,
    12 => 0.06,
    18 => 0.09,
    24 => 0.12,
    30 => 0.15,
    36 => 0.18,
    42 => 0.21,
    48 => 0.24,
    54 => 0.27,
    60 => 0.30
];
 $percentage_money = $car_value * 0.20;
 $money_price = $car_value - $percentage_money;
 
 echo "<p>Preço à vista: R$ " . number_format($money_price, 2, ',', '.') . "</p>";
 echo 
 "<table border='1'>
 <tr>
 <th>Preço Final</th> 
 <th>Quantidade de parcelas</th>
 <th>Valor de cada parcela</th>
 </tr>
";

 for ($i = 6; $i <= 60; $i+=6) {
    $percentage_increase = $plots[$i];
    $final_price = $car_value * (1 + $percentage_increase);
    $plots_price = $final_price / $i;
    echo 
    "<tr>
    <td>R$ " . number_format($final_price, 2, ',', '.') . "</td>
    <td>$i</td>
    <td>R$ " . number_format($plots_price, 2, ',', '.') . "</td>
    </tr>";
 }

 echo "</table>";
?>