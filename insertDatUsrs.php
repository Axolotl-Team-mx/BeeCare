<?php
include 'conexion.php';
require_once 'modelo.php';


$usrNomUsr = $_POST['txtusrNomUsr'];
$usrRol = '0';
$usrNombre = $_POST['txtusrNombre'];
$usrApellidos = $_POST['txtusrApellidos'];
$usrFecha_Nacimiento = $_POST['DateusrFecha_Nacimiento'];
$usrSexo = $_POST['rbtnGender'];
$usrCorreo = $_POST['txtusrCorreo'];
$usrContrasena = $_POST['txtusrContrasena'];

$model = new Validacion();

$model->NomUsr=$_POST['txtusrNomUsr'];
$filaInserta=$model->ValidacionUsr();

if($filaInserta > 0){
    echo'<script type="text/javascript">
    alert("El usuario ya existe.");
    window.location.href="registro.php";
    </script>';
    exit();
}
else{
    NuevoUsr($usrNomUsr,$usrRol,$usrNombre,$usrApellidos,$usrFecha_Nacimiento,$usrSexo,$usrCorreo,$usrContrasena);
}

function NuevoUsr($usrNomUsr,$usrRol,$usrNombre,$usrApellidos,$usrFecha_Nacimiento,$usrSexo,$usrCorreo,$usrContrasena){
    include 'conexion.php';
    $sql = "INSERT INTO Usuario (usrNomUsr,usrRol,usrNombre,usrApellidos,usrFecha_Nacimiento,usrSexo,usrCorreo,usrContrasena) VALUES (?,?,?,?,?,?,?,?);";
    $params = array($usrNomUsr,$usrRol,$usrNombre,$usrApellidos,$usrFecha_Nacimiento,$usrSexo,$usrCorreo,$usrContrasena);
    $stmt = sqlsrv_query($conn,$sql,$params);
    if($stmt === false){
        die(print_r(sqlsrv_errors(), true));
    }
}
echo'<script type="text/javascript">
alert("Usuario registrado exitosamente.");
window.location.href="sesion.php";
</script>';


?>