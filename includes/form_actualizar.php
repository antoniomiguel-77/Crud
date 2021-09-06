<?php
 if(isset($_GET['edit']))
 $estudantes = buscar('tb_estudante',$_GET['edit']);
 
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Crud-PHP</title>
</head>
<section id="cad_corpo">
  <form action="" method="post">
     
<p><label for="">Processo</label></p>
<p><input type="number" name="processo" class="cad_campos" value="<?php echo $estudantes->processo ?>"></p>
<p><label for="">Nome</label></p>
<p><input type="text" name="nome" class="cad_campos" value="<?php echo $estudantes->nome ?>"></p>
<p><label for="">Sobrenome</label></p>
<p><input type="text" name="snome" class="cad_campos" value="<?php echo $estudantes->sobrenome ?>" ></p>
<p><label for="">Nascimento</label></p>
<p><input type="date" name="nascimento" class="cad_campos" value="<?php echo $estudantes->nascimento ?>"></p>
<p><label for="">Curso</label></p>
<input type="text" name="curso" value="<?php echo $estudantes->curso ?>" >
<p><label for="">Ano</label></p>
<p><input type="number" name="ano"  class="cad_campos_ano" value="<?php echo $estudantes->ano ?>"></p>
<input type="hidden" name="actualizar">
<input type="submit" value="Salvar" class="bt_salvar">

</form>        

</section>
      