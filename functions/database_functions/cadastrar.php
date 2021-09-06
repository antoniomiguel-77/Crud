<?php

function cadastro($tabela,$processo,$nome,$sobrenome,$nascimento,$curso,$ano)
{
    $pdo=  conectar();
    $sql ="insert into $tabela(processo,nome,sobrenome,nascimento,curso,ano) values(?,?,?,?,?,?)";
    $cadastrar=$pdo->prepare($sql);
    $cadastrar->bindValue(1,$processo);
    $cadastrar->bindValue(2,$nome);
    $cadastrar->bindValue(3,$sobrenome);
    $cadastrar->bindValue(4,$nascimento);
    $cadastrar->bindValue(5,$curso);
    $cadastrar->bindValue(6,$ano);
    $cadastrar->execute();

   return ($cadastrar->rowCount())? true : false;
}