<?php 
include ('db.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query= "UPDATE `productos` SET `estado` = '0' WHERE `productos`.`id` = $id";
    $result=mysqli_query($conexion,$query);
    if(!$result){
        die("Query Failed");
    }

    $_SESSION['message']='Registro eliminado correctamente';
    $_SESSION['message_type']='danger';
    header("Location: index.php");
}
?>