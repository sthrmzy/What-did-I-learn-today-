<?php
require_once 'db.php';
$database = new Database();
$database->connect();
$pdo = $database->getConnection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM alunos WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: index.php");
    exit();
}
?>