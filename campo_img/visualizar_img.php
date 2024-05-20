<?php 

include_once('../banco/config.php');

$sql_query = $mysqli -> query("SELECT * FROM principais") or die($mysqli -> error)



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
    while($arquivo = $sql_query-> fetch_assoc()){

    ?> 
        <tr>
            <td> <a target="_blank" href="<?= $arquivo['path']; ?>">Visualizar</a></td>
            <td><?= $arquivo['nome_imagem']; ?> </td>
            <td><?= date("d/m/y", strtotime($arquivo['upload_date']))  ?> </td>
        </tr>

        <?php 
    }
        ?>
    </tbody>
</table>

</body>
</html>