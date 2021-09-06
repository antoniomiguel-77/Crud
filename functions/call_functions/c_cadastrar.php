<?php

if(isset($_POST['cad']))

if(!($_POST['processo'] == null || $_POST['nome']== null ||$_POST['snome']== null ||$_POST['nascimento']== null ||$_POST['curso']== null ||$_POST['ano'] == null))

if(!existe('tb_estudante',$_POST['nome'],$_POST['snome']))

    cadastro('tb_estudante',$_POST['processo'],$_POST['nome'],$_POST['snome'],$_POST['nascimento'],$_POST['curso'],$_POST['ano']);
else
echo 'Estudante ja esta cadastrado';
else

    echo 'Todos Campos são obrigatorios';
 



