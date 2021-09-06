<?php
function deletar($tabela,$id)
{
    $pdo = conectar();
    $sql="delete from $tabela where id = ?";
    $delete = $pdo->prepare($sql);
    $delete->bindValue(1,$id);
    $delete->execute();

    return ($delete->rowCount())? true : false;
        

}