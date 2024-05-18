<?php
if (isset($_FILES['foto'])) {
    $arquivo = $_FILES['foto'];

    if ($arquivo['error']) {
        die("Erro ao enviar o arquivo");
    }

    if ($arquivo['size'] > 2099999) {
        die("Arquivo muito grande! MAX: 2MB");
    }

    $pasta = "../uploads/";
    $nome_arquivo = $arquivo['name'];
    $novo_nome = uniqid();
    $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));

    if ($extensao != "jpg" && $extensao != "png") {
        die("Tipo de arquivo não aceito");
    }

    $ImagemPath = move_uploaded_file($arquivo["tmp_name"], $pasta . $novo_nome . "." . $extensao);
    if ($ImagemPath) {
        echo "<p>Arquivo enviado com sucesso. <a target=\"_blank\" href='../uploads/$novo_nome.$extensao'>Clique aqui para ver a imagem</a></p>";
    } else {
        echo "Falha ao enviar o arquivo.";
    }
}

// informa o banco de dados que queremos usar
include_once('../banco/config.php');
?>
