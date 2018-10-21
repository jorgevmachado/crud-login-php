<?php
  require_once("conecta.php");
function  listaProdutos($conexao){
    $produtos = array();
    $resultado = mysqli_query($conexao,
        "SELECT p.*,c.nome AS categoria_nome FROM produto AS p JOIN categoria AS c ON c.id=p.categoria_id");
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos,$produto);
    }
    return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
    $query = "INSERT INTO produto (nome, preco, descricao, categoria_id,usado) VALUES 
              (
                '{$nome}',
                 {$preco},
                '{$descricao}',
                 {$categoria_id},
                 {$usado}
               )";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

function removeProduto ($conexao, $id){
    $query = "DELETE FROM produto WHERE id={$id}";
    return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id){
    $query = "SELECT * FROM produto WHERE id={$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao,$id, $nome, $preco, $descricao, $categoria_id, $usado) {
    $query ="UPDATE produto SET 
              nome='{$nome}',
              preco={$preco},
              descricao='{$descricao}',
              categoria_id={$categoria_id},
              usado={$usado} 
              WHERE id = '{$id}'";
    $resultadoDaAlteracao = mysqli_query($conexao, $query);
    return $resultadoDaAlteracao;
}