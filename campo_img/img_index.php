<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfis de Imagens</title>
</head>
<body>
    <h1>Perfis</h1>
    <form action="img_index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="foto" id="foto">
        <input type="hidden" name="perfil_id" id="perfil_id">
        <input type="submit" name="acao" value="Enviar">
    </form>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Visualizar</th>
                <th>Nome da Imagem</th>
                <th>Data de Envio</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        include_once('../banco/config.php');
        $sql_query = $mysqli->query("SELECT * FROM principais LIMIT 4") or die($mysqli->error);
        while($arquivo = $sql_query->fetch_assoc()){
        ?> 
            <tr id="perfil-<?= $arquivo['id']; ?>">
                <td>
                    <a target="_blank" href="<?= $arquivo['path']; ?>">
                        <img height="50" src="<?= $arquivo['path'] ?>" alt="">
                    </a>
                </td>
                <td><?= $arquivo['nome_imagem']; ?></td>
                <td><?= date("d/m/y", strtotime($arquivo['upload_date'])); ?></td>
                <td>
                    <button onclick="alterarImagem(<?= $arquivo['id']; ?>)">Alterar</button>
                    <a href="deletar_img.php?deletar=<?= $arquivo['id']; ?>">Deletar</a>
                </td>
            </tr>
        <?php 
        }
        ?>
        </tbody>
    </table>
    <a href="../pagina_aposta/img_index.php">Voltar</a>

    <script>
        function alterarImagem(perfilId) {
            document.getElementById('perfil_id').value = perfilId;
            document.getElementById('foto').click();
        }

        document.getElementById('foto').onchange = function() {
            this.form.submit();
        };
    </script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['foto'])) {
    $perfil_id = $_POST['perfil_id'];
    $nome_imagem = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];
    $error = $_FILES['foto']['error'];
    $size = $_FILES['foto']['size'];
    
    $uploadStatus = enviar_Arquivo($error, $size, $nome_imagem, $tmp_name, $nome_imagem, $mysqli);

    if ($uploadStatus === true) {
        $path = $mysqli->query("SELECT path FROM principais WHERE id='$perfil_id'")->fetch_assoc()['path'];
        if (unlink($path)) {
            $novo_nome = uniqid();
            $extensao = strtolower(pathinfo($nome_imagem, PATHINFO_EXTENSION));
            $novo_path = "../uploads/" . $novo_nome . "." . $extensao;
            move_uploaded_file($tmp_name, $novo_path);
            $stmt = $mysqli->prepare("UPDATE principais SET path = ?, nome_imagem = ?, upload_date = ? WHERE id = ?");
            $upload_date = date("Y-m-d H:i:s");
            $stmt->bind_param("sssi", $novo_path, $nome_imagem, $upload_date, $perfil_id);
            $stmt->execute();
            $stmt->close();
        }
    } else {
        echo $uploadStatus;
    }

    echo "<script>window.location.href='img_index.php';</script>";
}
?>
