<?php
include 'conexion.php';
require_once 'modelo2.php';

$modelo = new Validacion();

$modelo->NomUsr=$_POST['txtusrNomUsr'];
$modelo->Contrasena=$_POST['txtusrContrasena'];

$filaLogear=$modelo->ValidacionUsr();

if($filaLogear > 0){
    $sql = "SELECT * FROM Usuario WHERE usrNomUsr='$modelo->NomUsr'";
    $stmt = sqlsrv_query($conn,$sql);
    if($stmt === false){
        die(print_r(sqlsrv_errors(),true));
        printf("Algo salio mal");
    }
    while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
        echo "Bienvenido "; echo $row['usrNombre'];
    }
}
else{
    echo'<script type="text/javascript">
    alert("El usuario o contraseña son incorrectos.");
    window.location.href="sesion.php";
    </script>';
    exit();
}



?>