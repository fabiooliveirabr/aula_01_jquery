<?php
// inserir.php
include "conexao.php";
$nome = $_POST['nome_pessoa'];
$data = $_POST['data_nascimento'];
$cargo = $_POST['cargo_pessoa'];

$sql = "INSERT INTO tb_pessoas
        (nome_pessoa, data_n_pessoa, cargo_pessoa)
        VALUES ('$nome', '$data', '$cargo')";
$inserir = $pdo->prepare($sql);
try{
    $inserir->execute();
    echo "Cadastrado com sucesso";
}catch(PDOException $erro){
    echo "Falha ao cadastrar".$erro->getMessage();
}


?>