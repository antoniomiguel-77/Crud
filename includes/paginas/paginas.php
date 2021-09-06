<?php
 
function paginas($pagina){
$arrayPaginas = ['includes'];
    foreach($arrayPaginas as $pg){

        
    return(is_file($pg.'/'.$pagina.'.php'))? $pg.'/'.$pagina.'.php':'includes/listar.php' ;
    }
}