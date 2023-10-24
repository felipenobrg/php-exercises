<?php
$products = [
    "produtoA" => 10.0,
    "produtoB" => 5.0,
    "produtoC" => 60.0,
    "produtoD" => 80.0,
    "produtoE" => 120.0,
    "produtoF" => 15.0,
    "produtoG" => 25.0,
    "produtoH" => 35.0,
    "produtoI" => 40.0,
];

    function countProductsBelow50($products) {
        $counter_products_below_50 = 0;
        foreach ($products as $price) {
            if ($price <= 50.0) {
                $counter_products_below_50++;
            }
        }
        return $counter_products_below_50;
    }

    function countProductsBetween50And100($products) {
       $counter_products_between_50_100 = 0;
       foreach ($products as $price) {
            if ($price >= 50.0 && $price <= 100.0) {
                $counter_products_between_50_100++;
        }
    }
    return $counter_products_between_50_100;
}
   
    function countProductsAverage($products) {
       $counter_average_products = 0;
       $total_price = 0;
       foreach ($products as $price) {
        if($price >= 100.0) {
            $total_price += $price;
            $counter_average_products++;
        }
    }
        return $total_price / $counter_average_products;
    }


$productsBelow50 = countProductsBelow50($products);
$productsBetween50and100 = countProductsBetween50And100($products);
$productsAverage = countProductsAverage($products);

echo "Quantidade de produtos inferiores a R$50,00: " . $productsBelow50 , "<br>";
echo "Quantidade de produtos entre R$50,00 e R$100,00: " . $productsBetween50and100, "<br>";
echo "Média dos productos com preços superiores a R$100,00:  " . "R$" , $productsAverage;
?>
