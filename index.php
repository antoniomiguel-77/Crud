<?php require 'config.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Crud-PHP</title>
</head>
<body>
    <div id="principal">
        <header id="cabecalho">
        <img src="image/estudante.png" alt="Estudante">
         
        <form action="index.php" method="post" class="form_search">
            <input type="text" name="search" placeholder="Nome do estudante" class="search">
            <input type="submit"  value="Pesquisar" class="bt_search">
         </form>
        </header>

        <menu id="menu">
        <ul class="list_menu">
            <li ><a href="index.php">Home</a></li>
            <li><a href="?pagina=form_cadastrar">Cadastrar</a></li>
            <li><a href="?pagina=sobre">Sobre</a></li>
        </ul>
        </menu>
        <section id="corpo">

            <?php require(isset($_GET['pagina']))? paginas($_GET['pagina']) : 'includes/listar.php'; ?>
          
        </section>
        <footer id="rodape">
        <h3>&copy;Criado por António Miguel</h3>
        </footer>
    </div>
</body>
</html>






 

