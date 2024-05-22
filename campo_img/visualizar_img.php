<?php 
include_once('../banco/config.php');

// if(isset($_GET['deletar'])){
//     $id = intval($_GET['deletar']);
//     $sql_query = $mysqli->query("SELECT * FROM principais WHERE id='$id'") or die($mysqli->error);
//     $arquivo = $sql_query->fetch_assoc();

//     if(unlink($arquivo['path'])){
//         $apago_imagem = $mysqli->query("DELETE FROM principais WHERE id='$id'") or die($mysqli->error);
//         if($apago_imagem){
//             echo "<p>deletado com sucesso!<p>";
//         }
//     }
// }

$sql_query = $mysqli->query("SELECT * FROM principais") or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Arquivos </h1>
<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th> Visualizar </th>
            <th> Arquivo </th>
            <th> Data de envio </th>
        </tr>
    </thead>

    <tbody>
    <?php 
    while($arquivo = $sql_query->fetch_assoc()){
    ?> 
        <tr>
            <td> <a target="_blank" href="<?= $arquivo['path']; ?>"><img height="50" src="<?=$arquivo['path'] ?>" alt=""></a></td>
            <td><?= $arquivo['nome_imagem']; ?> </td>
            <td><?= date("d/m/y", strtotime($arquivo['upload_date']))  ?> </td>
            <td><a href="deletar_img.php?deletar=<?= $arquivo['id']; ?>">Deletar</a></td>
        </tr>
    <?php 
    }
    ?>
    </tbody>
</table>
<a href="../pagina_aposta/subindo.php"?>Voltar</a>
</body>
</html>
