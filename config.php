<?php
ini_set('display_errors',1);
date_default_timezone_set('america/sao_paulo');


/**Funcoes do banco de dados */
require 'functions/database_functions/db_connection.php';
require 'functions/database_functions/select.php';
require 'functions/database_functions/delete.php';
require 'functions/database_functions/cadastrar.php';
require 'functions/database_functions/existe.php';
require 'functions/database_functions/pesquisar.php';
require 'functions/database_functions/update.php';
require 'functions/database_functions/buscar.php';
/**Chamar funcoes para manipular banco de dados */
require 'functions/call_functions/c_cadastrar.php';
require 'functions/call_functions/c_delete.php';
require 'functions/call_functions/c_actualizar.php';
 
 
/**Buscar paginas */

require 'includes/paginas/paginas.php';
 


