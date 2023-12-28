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
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        h2 {
            color: #007bff;
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Adicionar Tarefa</h2>
    <form method="post" action="add_task.php">
        <label for="name">Nome da Tarefa:</label>
        <input type="text" name="name" id="name" required>

        <label for="description">Descrição:</label>
        <textarea name="description" id="description"></textarea>

        <label for="due_date">Data de Vencimento:</label>
        <input type="date" name="due_date" id="due_date" required>

        <label for="assigned_to">Responsável:</label>
        <input type="text" name="assigned_to" id="assigned_to" required>

        <input type="submit" value="Adicionar Tarefa">
    </form>
</body>
</html>
