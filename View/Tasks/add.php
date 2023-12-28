<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Tarefa</title>
</head>
<body>
    <h2>Adicionar Tarefa</h2>
    <form method="post" action="index.php?action=save">
        Nome da Tarefa: <input type="text" name="name" required><br>
        Descrição: <textarea name="description"></textarea><br>
        Data de Vencimento: <input type="date" name="due_date" required><br>
        Responsável: <input type="text" name="assigned_to" required><br>
        <input type="submit" value="Adicionar Tarefa">
    </form>
</body>
</html>
