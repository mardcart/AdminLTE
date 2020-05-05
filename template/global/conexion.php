<?php


include('config.php');


$servidor="mysql:dbname=".BD.";host=".SERVIDOR.";port=".PUERTO;

    try{
        $pdo= new PDO($servidor,"root","",array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));

        echo "<script> alert('conectado....')</script>";
    }catch(PDOException $e){
        echo "<script> alert('error al conectar....')</script>";
    }
?>