<?php
$grades = [10, 5, 6.5, 8.5, 9, 5.5, 4.5, 8, 7.5];
$countGrades = count($grades);

function sumGrades($grades)
{
    $totalSum = 0;
    foreach ($grades as $grade) {
        $totalSum += $grade;
    }
    return $totalSum;
}

function averageGrades($grades)
{
    $totalSum = 0;
    foreach ($grades as $grade) {
        $totalSum += $grade;
    }
    return $totalSum / count($grades);
}

function gradesBelow7($grades)
{
    $countBelow7 = 0;
    foreach ($grades as $grade) {  
        if ($grade > 7) {
            $countBelow7++;
        }
    }
    return $countBelow7;
}

$sumStudentsGrades = sumGrades($grades);
$averageStudentsGrades = averageGrades($grades);
$studentsGradesBelow7 = gradesBelow7($grades);

echo "Soma das notas: " . $sumStudentsGrades . "<br>";
echo "Média das notas: " . $averageStudentsGrades . "<br>";
echo "Notas maiores que 7: " . $studentsGradesBelow7;
?>
