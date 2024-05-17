<?php


// $foto = $_POST["foto"];
// // $nome_imagem = $_POST["nome_imagem"];


//     if(isset($_POST['acao'])){
//         $arquivo = $_FILES['foto'];

//         $arquivo_novo = explode('.', $arquivo['name'] );

//         if($arquivo_novo[sizeof($arquivo_novo)-1] != 'png'){
//             die('Você não pode fazer upload deste tipo de aruivo');

//         }else{
//             echo 'Podemos continuar...';
//             move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);
//         }
//     };

if(isset($_FILES['foto'])){
    $arquivo = $_FILES['foto'];


    if($arquivo['error']){
        die("Erro ao enviar o arquivo");
    }
    if($arquivo['size'] > 2099999)
        die("Arquivo muito grande! MAX: 2MB");

        $pasta = "../uploads";

        $nome_arquivo = $arquivo['name'];
        $novo_nome = uniqid();
}

// informa o banco de dados que queremos usar
include_once('../banco/config.php');




?>