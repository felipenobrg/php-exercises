<?php

if($_SERVER["REQUEST_METHOD"] == "GET") {
    $student_name = $_GET["student_name"];
    $grade1 = $_GET["grade1"];
    $grade2 = $_GET["grade2"];
    $calculation = ($grade1 + $grade2) / 2;

    $result = ($calculation >= 6) ? "APROVADO" : "REPROVADO"; 

    switch($result)  {
       case "APROVADO":
        echo "APROVADO<br>";
        break;  

        case "REPROVADO":
            echo "REPROVADO<br>";
            break;
       }

    echo "Nome do aluno: $student_name<br>";
    echo "Cálculo da média: $calculation pontos";
}

?>