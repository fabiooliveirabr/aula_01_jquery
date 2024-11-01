<?php
// atualizar.php
include "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$data = $_POST['data'];

// 1º Passo - comando SQL
$sql = "UPDATE tb_pessoas SET nome_pessoa='$nome',
        data_n_pessoa='$data', cargo_pessoa='$cargo'
        WHERE id_pessoa='$id'";
// 2º Passo - preparar a conexão
$atualizar = $pdo->prepare($sql);
// 3º Passo - tentar executar
try{
    $atualizar->execute();
    if($atualizar->rowCount()>=1){
        echo "Atualizado com sucesso!";
    }else{
        echo "Nada foi alterado!";
    }
}catch(PDOException $erro){
    echo "Falha ao atualizar!".$erro->getMessage();
}




?>