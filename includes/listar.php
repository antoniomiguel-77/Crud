<table class="tb_listar">
            <thead class="cabecalho_tb">
                <th class="head_tb">Processo</th>
                <th class="head_tb">Nome</th>
                <th class="head_tb">Sobrenome</th>
                <th class="head_tb">Nascimento</th>
                <th class="head_tb">Curso</th>
                <th class="head_tb">Ano</th>
                <th class="head_tb">Editar</th>
                <th class="head_tb">Deletar</th>
                
            </thead>
            <tbody>
               
                <?php $select = select('tb_estudante'); ?>
            <?php foreach($select as $estudante): ?>
            <tr class="linhas" >
                <td><?php echo $estudante->processo  ?></td>
                <td><?php echo $estudante->nome  ?></td>
                <td ><?php echo $estudante->sobrenome  ?></td>
                <td><?php echo $estudante->nascimento  ?></td>
                <td><?php echo $estudante->curso  ?></td>
                <td><?php echo $estudante->ano  ?></td>
                <td><a href="?pagina=form_actualizar&edit=<?php echo $estudante->id; ?>" class="bt_edit">Editar</a></td>
                <td><a href="?id=<?php echo $estudante->id; ?>" class="bt_delete">Deletar</a></td>
            </tr>
            <?php endforeach; ?>


            </tbody>
        </table>