<h1>Lista de usuários</h1>
<?php
// Parâmetros de conexão com o banco de dados
$host = 'db'; // Nome do serviço do banco de dados no Docker Compose
$dbname = 'meudb';
$username = 'braga';
$password = '1234';

// String de conexão PDO
$dsn = "mysql:host=$host;dbname=$dbname";

try {
    // Cria uma nova conexão PDO
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Exemplo de consulta SQL
    $stmt = $pdo->query("SELECT * FROM usuarios");
    if($stmt->rowCount() > 0){
      $usuarios = $stmt->fetchAll();
        echo "<ul>";
        foreach($usuarios as $usuario)
            echo "<li>" . $usuario['nome'] . "</li>";
        echo "</ul>";
    } else {
        echo "Nenhum usuário encontrado!";
    }
} catch (PDOException $e) {
    // Em caso de erro na conexão
    echo "Erro de conexão: " . $e->getMessage();
}
?>
