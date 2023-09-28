<?php
include ('db.php');

    if (isset($_GET['id'])){
        $id=$_GET['id'];
        $query= "SELECT * FROM productos WHERE id=$id";
        $result=mysqli_query($conexion,$query);

        if(mysqli_num_rows($result)==1){
            $row=mysqli_fetch_array($result);
            $nombre=$row['nombre'];
            $descripcion=$row['descripcion'];
            $precio=$row['precio'];
            $stock=$row['stock'];

        }
    }
        if(isset($_POST['update'])){
            $id=$_GET['id'];
            $nombre=$_POST['nombre'];
            $descripcion=$_POST['descripcion'];
            $precio=$_POST['precio'];
            $stock=$_POST['stock'];

            $query ="UPDATE productos SET 
            nombre = '$nombre', 
            descripcion='$descripcion', 
            precio='$precio', 
            stock ='$stock'
            WHERE  id =$id";
            mysqli_query($conexion,$query);

            $_SESSION['message']='Actualizado correctamente';
            $_SESSION['message_type']='warning';
            header("Location:index.php");
        }
?>

<?php include('includes/header.php')?>

<div class="conteiner p-4">
    <div class="row">
        <div class="col-md-4 mx-auto" >
            <div class="card card-body" >
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST" >
                    <div class="form-group" >
                        <input type="text" name="nombre" value="<?php echo $nombre;?>" 
                        class="form-control" >
                    </div>
                    <div class="form-group" >
                        <textarea name="descripcion" rows="2" class="form-control"><?php echo $descripcion; ?></textarea>
                    </div>
                    <div class="form-group " >
                                <input type="number" name="precio"  step="0.01" min="0"
                                class="form-control" value="<?php echo $precio; ?>">  
                    </div>
                    <div class="form-group " >
                        <input type="number" name="stock" class="form-control" 
                        value="<?php echo $stock;?>">  
                    </div>

                    <button class="btn-success" name="update" >Actualizar</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include('includes/footer.php')?>