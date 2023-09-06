<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form method="POST" action="process.php">

    <label for="name">Nome:</label>
    <input id="name" type="text" name="name" required>

    <label for="email">Email:</label>
    <input id="email" type="email" placeholder="Digite seu email" name="email"  required>

    <input type="submit" value="Enviar"/>

    </form>
</body>
</html>