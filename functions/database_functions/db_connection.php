<?php

function conectar(){
    $pdo = new PDO('mysql:host=localhost;dbname=db_crud;','root','root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

    return $pdo;
}