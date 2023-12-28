<?php
include 'config.php';

$sql = "SELECT * FROM tasks ORDER BY due_date ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Projetos</title>
</head>
<body>
    <h2>Tarefas</h2>
    <a href="add_task.php">Adicionar Tarefa</a>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Data de Vencimento</th>
            <th>Responsável</th>
            <th>Status</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['description']}</td>";
            echo "<td>{$row['due_date']}</td>";
            echo "<td>{$row['assigned_to']}</td>";
            echo "<td>{$row['status']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
