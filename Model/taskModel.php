<?php
class TaskModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllTasks() {
        $sql = "SELECT * FROM tasks ORDER BY due_date ASC";
        $result = $this->conn->query($sql);

        $tasks = [];
        while ($row = $result->fetch_assoc()) {
            $tasks[] = $row;
        }

        return $tasks;
    }

    public function addTask($name, $description, $due_date, $assigned_to) {
        $sql = "INSERT INTO tasks (name, description, due_date, assigned_to) VALUES ('$name', '$description', '$due_date', '$assigned_to')";
        return $this->conn->query($sql);
    }
}
