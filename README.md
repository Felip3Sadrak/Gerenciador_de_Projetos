Gerenciador de Projetos Simples
Este é um projeto de gerenciador de projetos simples desenvolvido em PHP, utilizando a arquitetura MVC (Model-View-Controller). Este projeto permite a criação, visualização e gestão de tarefas associadas a projetos.

Funcionalidades
Adição de tarefas com informações como nome, descrição, data de vencimento e responsável.
Visualização de todas as tarefas em uma tabela.
Separação clara de responsabilidades através da arquitetura MVC.

Requisitos
Servidor web configurado com suporte ao PHP.
Banco de dados MySQL configurado com a tabela tasks (consulte a seção Estrutura do Banco de Dados).
Estrutura do Banco de Dados

README.md

Gerenciador de Projetos Simples
Este é um projeto de gerenciador de projetos simples desenvolvido em PHP, utilizando a arquitetura MVC (Model-View-Controller). Este projeto permite a criação, visualização e gestão de tarefas associadas a projetos.

Funcionalidades
Adição de tarefas com informações como nome, descrição, data de vencimento e responsável.
Visualização de todas as tarefas em uma tabela.
Separação clara de responsabilidades através da arquitetura MVC.
Requisitos
Servidor web configurado com suporte ao PHP.
Banco de dados MySQL configurado com a tabela tasks (consulte a seção Estrutura do Banco de Dados).
Estrutura do Banco de Dados
Execute o seguinte SQL para criar a tabela necessária:

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    due_date DATE,
    assigned_to VARCHAR(50),
    status ENUM('Pending', 'Completed') DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Configuração
Configure as informações do banco de dados no arquivo config.php.
Certifique-se de que seu servidor web esteja configurado corretamente para executar scripts PHP.

Uso
Clone o repositório para o seu ambiente local.
Configure o banco de dados conforme as instruções acima.
Acesse o projeto através do seu navegador.

Estrutura do Projeto
models/TaskModel.php: Lida com a lógica de dados relacionada às tarefas.
controllers/TaskController.php: Controla o fluxo da aplicação e interage com o modelo e a visão.
views/tasks/index.php: Exibe a lista de tarefas.
views/tasks/add.php: Formulário para adicionar uma nova tarefa.
index.php: Ponto de entrada da aplicação que roteia as requisições.

Contribuições
Contribuições são bem-vindas! Sinta-se à vontade para abrir issues, propor melhorias ou enviar pull requests.

Licença
Este projeto está licenciado sob a Licença MIT - consulte o arquivo LICENSE para obter detalhes.
