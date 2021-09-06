<?php

function buscar($tabela,$edit){
    $pdo = conectar();
    $sql = "select * from $tabela where id=?";
    $buscar=$pdo->prepare($sql);
    $buscar->bindValue(1,$edit);
    $buscar->execute();

    return $buscar->fetch();
}