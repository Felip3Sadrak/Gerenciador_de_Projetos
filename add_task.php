<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];
    $assigned_to = $_POST['assigned_to'];

    $sql = "INSERT INTO tasks (name, description, due_date, assigned_to) VALUES ('$name', '$description', '$due_date', '$assigned_to')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
        exit();
    } else {
        echo "Erro ao adicionar tarefa: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Tarefa</title>
</head>
<body>
    <h2>Adicionar Tarefa</h2>
    <form method="post" action="add_task.php">
        Nome da Tarefa: <input type="text" name="name" required><br>
        Descrição: <textarea name="description"></textarea><br>
        Data de Vencimento: <input type="date" name="due_date" required><br>
        Responsável: <input type="text" name="assigned_to" required><br>
        <input type="submit" value="Adicionar Tarefa">
    </form>
</body>
</html>
