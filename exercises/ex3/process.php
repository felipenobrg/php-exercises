<?php

  $investment_value = $_POST["investment_value"];
  $savings = isset($_POST["savings"]) ? $_POST["savings"] : "";
  $fixed_income_funds = isset($_POST["fixed_income_funds"]) ? $_POST["fixed_income_funds"] : "";

 if ($savings == "on") {
    echo "Seu rendimento mensal é de R$" . ($investment_value * 3/100);
 }

 if ($fixed_income_funds == "on") {
    echo "Seu rendimento mensal é de R$" . ($investment_value * 4/100);
 }

?>