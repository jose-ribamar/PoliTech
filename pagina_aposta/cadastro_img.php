<?php


$foto = $_POST["foto"];
// $nome_imagem = $_POST["nome_imagem"];


    if(isset($_POST['acao'])){
        $arquivo = $_FILES['foto'];

        $arquivo_novo = explode('.', $arquivo['name'] );

        if($arquivo_novo[sizeof($arquivo_novo)-1] != 'png'){
            die('Você não pode fazer upload deste tipo de aruivo');

        }else{
            echo 'Podemos continuar...';
            move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);
        }
    };

// informa o banco de dados que queremos usar
include_once('../banco/config.php');

// inserir os valores que estao presente nos arquivos de cadastro







// $descricao = $_POST["Descricao"];
// insere os valors no banco de dados

$sql_cadastro = mysqli_query($ligar, "INSERT INTO principais (nome) values ('$nome_imagem')");



// descricao se o cadastro foi feito com secesso
// if ($sql_cadastro == true){
//     // caso o cadastro tenha cido bem sucedido
//     echo "<script>
//         alert('Vaga cadastrada com sucesso!');
//         window.location.href='subindo.php';
//     </script>";
// }else{
// //  caso nao tenha realizado o cadastro
//     echo "<script>
//         alert('Falha no cadastro!');
//         window.location.href='subindo.php';
//     </script>";

// }


?>