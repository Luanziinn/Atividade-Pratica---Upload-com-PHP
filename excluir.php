<?php
include "conecta.php";

// Obter ID via GET
$id = $_GET["__"] ?? null;

if (!___) {
    die("ID inválido");
}

// Buscar caminho da imagem
$sqlBusca = "______________________________";
$stmt = $pdo->prepare($sqlBusca);
// bindParam...
$stmt->execute();


$jogo = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$jogo) {
    die("Jogo não encontrado");
}

// Excluir arquivo
$caminhoImagem = $jogo["caminho"];
if (file_exists(____________)) {
    unlink(_____________);
}

// Excluir registro do banco
$sqlDel = "_________________________";
$stmtDel = $pdo->prepare($sqlDelete);
// bindParam...
$stmtDel->execute();

header("Location: biblioteca.php");
exit();
?>
