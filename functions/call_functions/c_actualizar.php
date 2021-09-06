<?php

if(isset($_POST['actualizar'])){
    $proc = $_POST['processo'];
    $nome = $_POST['nome'];
    $snome = $_POST['snome'];
    $nasc = $_POST['nascimento'];
    $curso = $_POST['curso'];
    $ano = $_POST['ano'];
    $id = $_GET['edit'];
    actualizar('tb_estudante',$proc,$nome,$snome,$nasc,$curso,$ano,$id);
    echo 'Sucesso';
}



 
 
 
