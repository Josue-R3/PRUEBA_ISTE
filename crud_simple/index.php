<?php include('db.php'); ?>
<?php include('includes/header.php');?>
    

        <div class="container p-4" >
            <div class="row" >
                <div class="col-md-4" >
                    <?php if(isset($_SESSION['message'])){ ?>
                        <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                            <?=$_SESSION['message']?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php session_unset();}?>
                    <div class="card-body" >
                        <form action="save.php" method="POST">
                            <div class="form-group " >
                                <input type="text" name="nombre" class="form-control" 
                                placeholder="Nombre del producto" autofocus required >  
                            </div>
                            <div class="form-group" >
                                <textarea name="descripcion" rows="2" 
                                class="form-control" placeholder="Descripcion del producto" required></textarea>
                            </div>
                            <div class="form-group " >
                                <input type="number" name="precio"  step="0.01" min="0"
                                class="form-control" 
                                placeholder="Precio del producto" required >  
                            </div>
                            <div class="form-group " >
                                <input type="number" name="stock" class="form-control" 
                                placeholder="Cantidad en stock" required >  
                            </div>
                            <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar" >
                        </form>
                    </div>
                </div>
                
                <div class="col-md-8" >
                        <table class="table table-bordered" > 
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Precio</th>
                                    <th>Stock</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query="SELECT * FROM productos WHERE estado = 1";
                                    $results= mysqli_query($conexion,$query);

                                    while($row=mysqli_fetch_array($results)){?>
                                        <tr>
                                            <td><?php echo $row['nombre'];?></td>
                                            <td><?php echo $row['descripcion'];?></td>
                                            <td><?php echo $row['precio'];?></td>
                                            <td><?php echo $row['stock'];?></td>
                                            <td>
                                                <a href="edit.php?id=<?php echo $row['id'];?>" class="btn bt-secondary">
                                                <i class='bx bx-edit' ></i>
                                                </a>
                                                <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">
                                                <i class='bx bx-trash'></i>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                        <?php }?>
                            </tbody>
                        </table>
                </div>
            </div>


    

<?php include('includes/footer.php');?>