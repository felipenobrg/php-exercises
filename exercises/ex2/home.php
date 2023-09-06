<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <form method="GET" action="process.php">
    <label name="student_name" for="">Insira seu nome: </label>
    <input id="student_name" name="student_name" type="text" />

    <label for="grade1">Insira a primeira nota: </label>
    <input id="grade1" name="grade1" type="number" />

    <label for="grade2">Insira a segunda nota: </label>
    <input id="grade2" name="grade2" type="number" />

    <input type="Submit" value="Submit" />
    </form>
</body>
</html>