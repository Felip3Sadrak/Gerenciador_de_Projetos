<?php
require_once 'models/TaskModel.php';

class TaskController {
    private $taskModel;

    public function __construct($conn) {
        $this->taskModel = new TaskModel($conn);
    }

    public function index() {
        $tasks = $this->taskModel->getAllTasks();
        include 'views/tasks/index.php';
    }

    public function add() {
        include 'views/tasks/add.php';
    }

    public function save() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $due_date = $_POST['due_date'];
            $assigned_to = $_POST['assigned_to'];

            if ($this->taskModel->addTask($name, $description, $due_date, $assigned_to)) {
                header('Location: index.php');
                exit();
            } else {
                echo "Erro ao adicionar tarefa";
            }
        }
    }
}
