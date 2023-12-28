<?php

// Configurações do banco de dados
define('DB_HOST', 'seu_host_do_banco');
define('DB_USER', 'seu_usuario_do_banco');
define('DB_PASSWORD', 'sua_senha_do_banco');
define('DB_NAME', 'seu_nome_do_banco');

// Conectar ao banco de dados
$conn = new mysqli('127.0.0.1', 'root', '', 'projetophp');

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
