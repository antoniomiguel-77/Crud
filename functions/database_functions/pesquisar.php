<?php
function pesquisar($tabela,$nome)
{
    $pdo = conectar();
    $sql ="SELECT * FROM $tabela WHERE nome like '%$nome%' ";
    $pesquisar = $pdo->prepare($sql);
   
    return $pesquisar->rowCount();
}