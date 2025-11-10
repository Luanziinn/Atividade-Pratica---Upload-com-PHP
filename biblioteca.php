<?php
include "conecta.php";

// SELECT com os campos da tabela
$sql = "SELECT __________ FROM jogos ORDER BY id DESC";

$stmt = $pdo->query($sql);

//Buscar todos os registros
$jogos = $stmt->__________(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca de Jogos</title>
</head>
<body>
    <h2>Biblioteca de Jogos</h2>

    <p><a href="index.html">Cadastrar novo jogo</a></p>
    <hr>								

    <?php if (count($jogos) === 0): ?>
        <p>Nenhum jogo cadastrado ainda.</p>
    <?php endif; ?>

    <?php foreach ($jogos as $jogo): ?>
        <div style="margin-bottom:20px;">
            <strong><?= $jogo["nome"] ?></strong><br>
            <img src="<?= $jogo["caminho"] ?>" width="150"><br>
            <small><?= $jogo["tamanho"] ?> bytes</small><br>

            <!-- Adicionar link de exclusão -->
            <a href="excluir.php?id=<?= $jogo[_________] ?>"
               onclick="return confirm('Tem certeza que deseja excluir?')">
               Excluir jogo
            </a>
        </div>
        <hr>
    <?php endforeach; ?>
</body>
</html>
