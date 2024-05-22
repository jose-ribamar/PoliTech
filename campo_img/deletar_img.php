<?php 
include_once('../banco/config.php');

if(isset($_GET['deletar'])){
    $id = intval($_GET['deletar']);
    $sql_query = $mysqli->query("SELECT * FROM principais WHERE id='$id'") or die($mysqli->error);
    $arquivo = $sql_query->fetch_assoc();

    if(unlink($arquivo['path'])){
        $apago_imagem = $mysqli->query("DELETE FROM principais WHERE id='$id'") or die($mysqli->error);
        if($apago_imagem){
            echo "<script>
            alert('Usuário excluído com sucesso!');
            window.location.href='visualizar_img.php';
        </script>";
        }
    }
}

$sql_query = $mysqli->query("SELECT * FROM principais") or die($mysqli->error);
?>