<?php
if(isset($_GET['id']))
{
$delete = deletar('tb_estudante',$_GET['id']);
echo ($delete)? 'Sucesso' : 'Erro';
}
