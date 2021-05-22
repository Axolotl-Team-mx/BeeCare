<?php
Class Validacion {

    var $NomUsr;

    function ValidacionUsr (){
        $cadenaCnx = "sqlsrv:Server=mercadito.axolotlteam.com;Database=BeeCare";
        $user = "apiAxolotl";
        $pass = "Test3312";

        $cnx = new PDO($cadenaCnx,$user,$pass);

     try{
        $consulta = $cnx->prepare("SELECT * FROM Usuario WHERE usrNomUsr=:parametro1");
        $consulta->bindValue(":parametro1",$this->NomUsr);
        
        $consulta->execute();

        $filaUsuario = $consulta->fetch();
        return $filaUsuario;
     }
     catch (PDOException $e){
        echo "Error en la conexión ->".$e;
     }
    }
}
?>


