<?php
// consultar2.php
include "conexao.php";

//1º Passo - Comando SQL
$sql = "SELECT * FROM tb_pessoas";
//2º Passo - Preparar conexão
$consultar = $pdo->prepare($sql);
// 3º Passo - Tentar executar
try{
    $consultar->execute();
    $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);
    foreach($resultados as $item){
        $id = $item['id_pessoa'];
        $nome = $item['nome_pessoa'];
        $data = $item['data_n_pessoa'];
        $cargo = $item['cargo_pessoa'];
        // list($ano, $mes, $dia) = explode("-", $data);
        echo "
            <div class='cartao_pessoa'>
                COD: <span class='codigo'>$id</span> <br>
                NOME: <span class='nome'>$nome</span> <br>
                DATA DE NASCIMENTO: <span class='data_nasc'>$data</span> <br>
                CARGO: <span class='cargo'>$cargo</span> <br>
            </div>
        ";
    }
}catch(PDOException $erro){
    echo "Falha ao consultar!".$erro->getMessage();
}

?>