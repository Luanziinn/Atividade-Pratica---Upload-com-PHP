<?php
include "conecta.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome_jogo"];
    $arquivo = $_FILES["imagem"];

    // Pasta onde as imagens serão armazenadas
    $pasta = "________";

    // Permissão das pastas
    if (!is_dir($pasta)) {
        mkdir($pasta, _____, true);
    }

    // Validação dos tipos permitidos
   $tiposPermitidos = ["__________", "__________", "__________"];

    if (!in_array($arquivo["type"], $tiposPermitidos)) {
        die("Tipo de arquivo não permitido!");
    }

    // Validar tamanho máximo (2MB)
    if ($arquivo["size"] > ________ ) {
        die("Arquivo muito grande (máx. 2MB)");
    }

    // Criar nome único
    $novoNome = __________ . "_" . basename($arquivo["name"]);
												
    $destino = $pasta . $novoNome;

    if (move_uploaded_file($arquivo["tmp_name"], $destino)) {

    // Fazer a inserção no banco


        $sql = "INSERT INTO jogos (nome, caminho, tamanho) 
                VALUES  (:____, :____, :____)”;
        // bindParam...
        // bindParam…
        // bindParam...
        $stmt->execute();

        echo "<h3>Upload realizado com sucesso!</h3>";
        echo "<p>Jogo: $nome</p>";
        echo "<img src='$destino' width='200'><br><br>";
        echo "<a href='biblioteca.php'>Ver biblioteca</a>";

    } else {
        echo "Erro ao mover o arquivo.";
    }
}
?>
