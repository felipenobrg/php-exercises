<?php
$first_number = $_POST["first_number"];
$second_number = $_POST["second_number"];

$addition = isset($_POST["addition"]) ? $_POST["addition"] : "";
$subtraction = isset($_POST["subtraction"]) ? $_POST["subtraction"] : "";
$multiplication = isset($_POST["multiplication"]) ? $_POST["multiplication"] : "";
$division = isset($_POST["division"]) ? $_POST["division"] : "";

if ($addition == "on") {
    echo ($first_number + $second_number) . "<br />";
} elseif ($subtraction == "on") {
    echo ($first_number - $second_number) . "<br />";
} elseif ($multiplication == "on") {
    echo ($first_number * $second_number) . "<br />";
} elseif ($division == "on") {
    echo ($first_number / $second_number) . "<br />";
} else {
    echo "Escolha um operador aritmético";
}

?>


