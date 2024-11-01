<?php
// deletar.php
include "conexao.php";
$id = $_POST['id'];

//1º Passo - Comando SQL
$sql = "DELETE FROM tb_pessoas
        WHERE id_pessoa='$id'";
//2º Passo - Preparar a conexão
$deletar = $pdo->prepare($sql);
//3º Passo - Tentar executar
try{
    $deletar->execute();
    if($deletar->rowCount()>=1){
        echo "Deletado com sucesso!";
    }else{
        echo "Nada foi deletado!";
    }
}catch(PDOException $erro){
    echo "Falha ao deletar!".$erro->getMessage();
}
?>