<?php
    require_once("../config/conexion.php");
    require_once("../models/Producto.php");

    $producto = new Producto();

    switch($_GET['op']){
        
        case"listar":
            $datos=$producto->get_producto();
            $data= Array();

            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["nombre"];
                $sub_array[] = $row["descripcion"];
                $sub_array[] = $row["precio"];
                $sub_array[] = $row["stock"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["id"].');"  id="'.$row["id"].'"class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["id"].');"  id="'.$row["id"].'"class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
                $data[]=$sub_array;

            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
            break;

            case "guardaryeditar":
                $datos=$producto->get_producto_id($_POST["id"]);
                if(empty($_POST['id'])){
                    if(is_array($datos)==true and count($datos)==0){
                        $producto->insert_producto($_POST["nombre"]);
                    }
                }else{
                    $producto->update_producto($_POST["id"],$_POST["nombre"]);
                }
                break;

                case "mostrar":
                $datos=$producto->get_producto_id($_POST["id"]);
                if(is_array($datos)==true and count ($datos)>0){
                    foreach($datos as $row){
                        $output['id']=$row['id'];
                        $output['nombre']=$row['nombre'];
                        $output['descripcion']=$row['descripcion'];
                        $output['precio']=$row['precio'];
                        $output['stock']=$row['stock'];
                    }
                    echo json_encode($output);
                }
                break;

                case "eliminar":
                    $producto->delete_producto_id($_POST['id']);
                    break;

    }
?>