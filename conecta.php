<?php
session_start();

// Coloque o nome do arquivo do banco
$banco = "__________";
											  
try {
    // Crie a conexão PDO
    $pdo = new PDO("sqlite:" . ________);
												
    // Definir modo de erro
    $pdo->setAttribute(__________, __________);

} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
