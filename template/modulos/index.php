<?php 

echo "hola soy index en la carpeta modulos";

if(isset($_POST["btnLogin"])){

  include("global/conexion.php");

    $txtEmail=($_POST['txtEmail']);
    $txtPassword=($_POST['txtPassword']);

    $sentenciaSQL = $pdo->prepare("select * from tblusuarios where correo=:correo and password=:password");

    $sentenciaSQL->bindParam("correo",$txtEmail,PDO::PARAM_STR);
    $sentenciaSQL->bindParam("password",$txtPassword,PDO::PARAM_STR);

    $sentenciaSQL->execute();

    $numeroRegistros=$sentenciaSQL->rowCount();

    if($numeroRegistros>=1){
        echo "bienvenido....";
    }else{
        echo "no se encontraron  registros";
    }



    echo "<script> alert(' HAY QUE VALIDAD EL CORREO Y LA CONTRASENA') </script>";
}

?>