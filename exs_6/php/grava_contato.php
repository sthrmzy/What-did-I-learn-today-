<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
        $host = 'localhost';
        $db = 'exs5';
        $user = 'liswstr';
        $pass = '12345678';
        $port = 3307; // Porta MySQL correta
        require_once "co";
        
        try {
            $database = new Database($host, $db, $user, $pass, $port);
            $database->connect();
            $pdo = $database->getConnection();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    ?>
</head>
<body>

<?php
    if (isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['mensagem'])) {
        $nome = htmlspecialchars($_GET['nome']);
        $email = htmlspecialchars($_GET['email']);
        $mensagem = htmlspecialchars($_GET['mensagem']);

        echo "<h2> Informações recebidas: </h2>";
        echo "<p><strong> Nome: </strong>" . $nome . "</p>";
        echo "<p><strong> E-mail: </strong>" . $email . "</p>";
        echo "<p><strong> Mensagem: </strong>" . $mensagem . "</p>";

        $stmt = $pdo->prepare("INSERT INTO usuario (nome, email, mensagem) VALUES (:nome, :email, :mensagem)");

        // Vincula os parâmetros
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mensagem', $mensagem);

        try {
            if ($stmt->execute()) {
                echo "<p>Dados inseridos com sucesso!</p>";
            } else {
                echo "<p>Erro ao inserir dados.</p>";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    } else {
        echo "Nenhum dado foi enviado.";
    }
?>
</body>
</html>
