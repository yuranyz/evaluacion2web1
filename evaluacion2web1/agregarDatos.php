<?php

include('baseDatos.php');

//Validar que se hizo clic en el boton de enviar datos
if(isset($_POST["agregar"])){
    
    //recibir los datos a enviar
    $nombre=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
   
    //1. crear un objeto del tipo BaseDatos (para ello, debemos crear una variable)
    $operacionEnBaseDeDatos= new BaseDatos();
   
    //2. Creemos una consulta para agregar datos. Recordemos que previamente se había creado en phpmyadmin una base de datos
    // llamada bd_acdivoca, ella se agregó la tabla "usuarios" y dentro de ella se agregaron los campos idUsuario (autocompletado)
    //al ser autocompletado no se necesita agregar en la consulta y nombre, correo, y contraseña
    $consulta=("INSERT INTO usuarios (nombre, correo, contraseña) VALUES('$nombre','$email','$password')");
   
    
    //3. utilizar el metodo alterarBaseDatos para poder ejecutar la consulta para ello utilizamos el objeto del paso 1 
    $resultado=$operacionEnBaseDeDatos->alterarBaseDatos($consulta);

    //ver que aquí usamos el function de acuerdo al método, bien explicado en el archivo baseDatos.php

    //4. verificar que si se escribieron los datos
    if($resultado){
        echo("<br>");
        echo("Se han agregado con exito los datos a la base de datos");
        echo("<br>");
    }else{
        die("error en la transacción");

    }




}else{
    echo("pilas no ha presioando el boton, no deberia estar aca");
}





?>