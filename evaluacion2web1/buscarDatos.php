<?php

include('baseDatos.php');

//Validar que se hizo clic en el boton de enviar datos
if(isset($_POST["buscar"])){
    
    //recibir los datos a enviar
    $nombre=$_POST["search"];
   
   
    //1. crear un objeto del tipo BaseDatos (debemos crear una variable)
    $operacionEnBaseDeDatos= new BaseDatos();
   
    //2. Creemos una consulta para buscar datos
    $consulta2 =("Select * from usuarios where nombre='$nombre' ");
   
    
    //3. utilizar el metodo alterarBaseDatos para poder ejecutar la consulta para ello utilizamos el objeto del paso 1 
    $resultado=$operacionEnBaseDeDatos->consultarEnBaseDatos($consulta2);

    //4. verificar que si se escribieron los datos
    if($resultado){
        echo("<br>");
        //print_r($resultado);
        echo("id: ".$resultado[0]["idUsuario"].",nombre:".$resultado[0]["nombre"].", correo".$resultado[0]["correo"]."su clave es: ".$resultado[0]["contraseña"]);
        echo("<br>");
    }else{
        die("error en la transacción");

    }




}else{
    echo("pilas no ha presioando el boton, no deberia estar aca");
}
