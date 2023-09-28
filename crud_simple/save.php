<?php

include('db.php');

    if(isset($_POST['save'])){
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $precio=$_POST['precio'];
        $stock=$_POST['stock'];

    $query = "INSERT INTO productos(nombre, descripcion, precio, stock,estado) 
    VALUES ('$nombre', '$descripcion', '$precio', '$stock',1)";        
    $result= mysqli_query($conexion, $query);    
        if(!$result){
            die("Query Failed");
        }
        
        $_SESSION['message']='Registro agregado';
        $_SESSION['message_type']='success';
        header("Location:index.php");
}
?>
