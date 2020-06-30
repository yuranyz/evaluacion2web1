<?php

include('baseDatos.php');

//Validar que se hizo clic en el boton de enviar datos
if(isset($_POST["btnEliminar"])){
    
    //recibir los datos a enviar
    $nombre=$_POST["actualizar"];
   
   
    //1. crear un objeto del tipo BaseDatos (debemos crear una variable)
    $operacionEnBaseDeDatos= new BaseDatos();
   
    //2. Creemos una consulta para eliminar datos
    $consulta1 = ("delete from usuarios where nombre='$nombre' ");
   
    
    //3. utilizar el metodo alterarBaseDatos para poder ejecutar la consulta para ello utilizamos el objeto del paso 1 
    $resultado=$operacionEnBaseDeDatos->alterarBaseDatos($consulta1);

    //4. verificar que si se escribieron los datos
    if($resultado){
        echo("<br>");
        echo("Se ha eliminado con exito los datos de la base de datos");
        echo("<br>");
    }else{
        die("error en la transacción");

    }




}else{
    echo("pilas no ha presioando el boton, no deberia estar aca");
}
