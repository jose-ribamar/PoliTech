<?php
include_once('../banco/config.php');

$nome_imagem = $_POST['nome_imagem'];

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

    $path = $pasta . $novo_nome . "." . $extensao;
    $ImagemPath = move_uploaded_file($arquivo["tmp_name"], $path);

    if ($ImagemPath) {
        $upload_date = date("Y-m-d H:i:s");
        $stmt = $mysqli->prepare("INSERT INTO principais (path, nome_imagem, upload_date) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $path,$nome_imagem,  $upload_date);
        
        if ($stmt->execute()) {
            // echo "<p>Arquivo enviado com sucesso.</p>";
            echo "<script>
                alert('Usuário cadastrado com sucesso!');
                window.location.href='../campo_img/visualizar_img.php';
            </script>";
        } else {
            echo "Erro ao salvar informações no banco de dados.";
        }

        $stmt->close();
    } else {
        echo "Falha ao enviar o arquivo.";
    }
}
?>
