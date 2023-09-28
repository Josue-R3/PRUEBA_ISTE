<?php
    class Producto extends Conectar{
        public function get_producto(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM productos
            WHERE estado=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();

        }

        public function get_producto_id($id){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM productos
            WHERE id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_producto_id($id){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="UPDATE productos
            SET estado=0
            WHERE id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }


        public function insert_producto($nombre){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="INSERT INTO productos 
            (id, nombre, descripcion, precio, stock, estado) 
            VALUES (NULL, ?, ?, ?, ?, 1)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$nombre);
            return $resultado=$sql->fetchAll();
        }

        public function update_producto($id,$nombre){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="UPDATE productos
            SET nombre=?,
            descripcion=?,
            precio=?,
            stock=?
            WHERE id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->bindValue(2,$nombre);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }

    
?>