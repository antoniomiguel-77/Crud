<?php
 

function actualizar($tabela,$processo,$nome,$snome,$nascimento,$curso,$ano,$id){
    $pdo = conectar();
    $sql = "update $tabela set processo = ?,nome = ?,sobrenome = ?,nascimento = ?,curso = ?, ano = ? where id = ?";
    $existe = $pdo->prepare($sql);
    $existe->bindValue(1,$processo);
    $existe->bindValue(2,$nome);
    $existe->bindValue(3,$snome);
    $existe->bindValue(4,$nascimento);
    $existe->bindValue(5,$curso);
    $existe->bindValue(6,$ano);
    $existe->bindValue(7,$id);
     
    $existe->execute();
     return $existe->rowCount();
    
    
    

    
    
}