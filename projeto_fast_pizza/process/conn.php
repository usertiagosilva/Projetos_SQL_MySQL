<?php
    //Conectar Banco
    session_start();

    $user = "root";
    $pass = "";
    $db = "pizzaria";
    $host = "localhost";

    try { 
        $conn = new PDO("mysql:host={$host};dbname={$db}",$user, $pass);//Criar conexão
        //Habilitar erros de PDO
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    // Mostrar erros de conexão 
    catch (PDOException $e){
        print "Erro" . $e ->getMessage() . "</br>";

    }


?>