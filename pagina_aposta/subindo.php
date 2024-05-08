<?php
    if(isset($_POST['acao'])){
        $arquivo = $_FILES['file'];

        $arquivo_novo = explode('.', $arquivo['name'] );

        if($arquivo_novo[sizeof($arquivo_novo)-1] != 'png'){
            die('Você não pode fazer upload deste tipo de aruivo');

        }else{
            echo 'Podemos continuar...';
            move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);
        }
    };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"/>
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>