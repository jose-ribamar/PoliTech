<?php
include_once('../banco/config.php');

function enviar_Arquivo($error, $size, $name, $tmp_name, $nome_imagem, $mysqli){
    if ($error) {
        return "Erro ao enviar o arquivo";
    }

    if ($size > 2099999) {
        return "Arquivo muito grande! MAX: 2MB";
    }

    $pasta = "../uploads/";
    $extensao = strtolower(pathinfo($name, PATHINFO_EXTENSION));

    if ($extensao != "jpg" && $extensao != "png") {
        return "Tipo de arquivo não aceito";
    }

    // Gere um nome único para a imagem
    $novo_nome = uniqid($nome_imagem . "_") . "." . $extensao;
    $path = $pasta . $novo_nome;

    // Move o arquivo para a pasta de uploads
    if (move_uploaded_file($tmp_name, $path)) {
        // Obtém a data e hora atual
        $upload_date = date("Y-m-d H:i:s");

        // Prepara a inserção no banco de dados
        $stmt = $mysqli->prepare("INSERT INTO principais (path, nome_imagem, upload_date) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $path, $nome_imagem, $upload_date);

        // Executa a inserção
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return "Erro ao salvar informações no banco de dados.";
        }
    } else {
        return "Falha ao enviar o arquivo.";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['foto'])) {
    $nomes_imagens = $_POST['nome_imagem'];
    $arquivos = $_FILES['foto'];
    $tudo_certo = true;

    // Percorre os arquivos enviados
    foreach ($arquivos['name'] as $index => $arq) {
        $nome_imagem = $nomes_imagens[$index]; // Nome específico da imagem
        $deu_certo = enviar_Arquivo($arquivos['error'][$index], $arquivos['size'][$index], $arquivos['name'][$index], $arquivos['tmp_name'][$index], $nome_imagem, $mysqli);
        if ($deu_certo !== true) {
            echo $deu_certo;
            $tudo_certo = false;
        }
    }

    // Se todos os arquivos foram carregados com sucesso
    if ($tudo_certo) {
        echo "<script>
            alert('Imagens cadastradas com sucesso!');
            window.location.href='img_index.php';
        </script>";
    } else {
        echo "<script>
            alert('Falha ao enviar um ou mais arquivos!');
            window.location.href='subindo.php';
        </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Imagens</title>
</head>
<body>

<form action="cadastro_img_unica.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="foto1">Foto 1:</label>
        <input type="file" name="foto[]" id="foto1">
        <input type="text" name="nome_imagem[]" placeholder="Nome da imagem 1">
    </div>
    <div>
        <label for="foto2">Foto 2:</label>
        <input type="file" name="foto[]" id="foto2">
        <input type="text" name="nome_imagem[]" placeholder="Nome da imagem 2">
    </div>
    <div>
        <label for="foto3">Foto 3:</label>
        <input type="file" name="foto[]" id="foto3">
        <input type="text" name="nome_imagem[]" placeholder="Nome da imagem 3">
    </div>
    <input type="submit" name="acao" value="Enviar">
</form>


    <a href="../pagina_aposta/subindo.php">Voltar</a>
</body>
</html>
