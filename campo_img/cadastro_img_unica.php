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
    $novo_nome = 'foto1';
    $extensao = strtolower(pathinfo($name, PATHINFO_EXTENSION));

    if ($extensao != "jpg" && $extensao != "png") {
        return "Tipo de arquivo não aceito";
    }

    $path = $pasta . $novo_nome . "." . $extensao;
    $ImagemPath = move_uploaded_file($tmp_name, $path);

    if ($ImagemPath) {
        date_default_timezone_set('America/Sao_Paulo');
        $upload_date = date("Y-m-d H:i:s");
        $stmt = $mysqli->prepare("INSERT INTO principais (path, nome_imagem, upload_date) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $path, $nome_imagem, $upload_date);
        
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
    $nome_imagem = $_POST['nome_imagem'];
    $arquivos = $_FILES['foto'];
    $tudo_certo = true;

    foreach ($arquivos['name'] as $index => $arq) {
        $deu_certo = enviar_Arquivo($arquivos['error'][$index], $arquivos['size'][$index], $arquivos['name'][$index], $arquivos['tmp_name'][$index], $nome_imagem, $mysqli);
        if ($deu_certo !== true) {
            echo $deu_certo;
            $tudo_certo = false;
        }
    }

    if ($tudo_certo) {
        echo "<script>
            alert('Usuário cadastrado com sucesso!');
            window.location.href='img_index.php';
        </script>";
    }
    else{
        "<script>
            alert('Falha ao enviar um ou mais arquivos!');
            window.location.href='subindo.php';
        </script>";
    }
}
?>

