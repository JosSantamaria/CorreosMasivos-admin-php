<?php
    require_once '../config/conexion.php';
    require_once '../models/mdl_Producto.php';

    $mdlProducto = new Producto();

    /** Listar todos los usuarios */
    switch ($_GET["op"]){

        //Guardar y editar cuando se tiene el ID
            case "guardaryeditar":

                        if (empty($_POST["prod_id"])){ //Si el campo prod_id está vacío
                            $mdlProducto->insertProducto($_POST['prod_nom'], $_POST['prod_precio_n'],$_POST['prod_precio_p'],
                            $_POST['prod_url'], $_POST['prod_img'],
                            $_POST['prod_cupon'], $_POST['prod_descripcion']);
                        }else{
                            $mdlProducto->updateProducto($_POST['prod_nom'], $_POST['prod_precio_n'],$_POST['prod_precio_p'],
                            $_POST['prod_url'], $_POST['prod_img'],
                            $_POST['prod_cupon'], $_POST['prod_descripcion'],$_POST['prod_id']);
                        }
                break;


            case "listar":
                $datos = $mdlProducto->listarProductos();
                $data = array();
                    foreach ($datos as $row) { 
                        $sub_array = array();
                        $sub_array[] = $row['prod_id']; 
                        $sub_array[] = $row['prod_nom']; 
                        $sub_array[] = $row['prod_precio_n'];
                        $sub_array[] = $row['prod_precio_p'];
                       // $sub_array[] = $row['prod_cupon'];

                    
                        if ( $row['est']==1 ) {
                            $sub_array[] = "<span class='badge badge-pill badge-success'>Activo</span>";
                        } else {
                            $sub_array[] = "<span class='badge badge-pill badge-danger'>Inactivo</span>";

                        }
                        
                        if ( $row['est']==1 ) {
                                // eliminar('.$row['prod_id'].') - '.$row['prod_id'].'
                            $sub_array[] = '<button type="button" label="Eliminar Producto" onClick="" id="" class="btn btn-outline-danger"><i class="bx bx-trash"></i></button>'; //Boton de accion eliminar
                        } else { //considerar el eliminar y deshabilitar el boton  // habilitar('.$row['prod_id'].') - '.$row['prod_id'].'
                            $sub_array[] = '<button type="button" label="Habilitar Producto" onClick="" id="" class="btn btn-outline-primary"><i class="bx bx-badge-check"></i></button>'; //Boton de accion eliminar

                        }

                        $data[] = $sub_array; //Agregamos los datos de cada fila a la variable data
                    }

                    $resultados = array(
                                        "sEcho"=>1, //Informacion para el datatable
                                        "iTotalRecords"=>count($datos), //enviamos el total registros al datatable
                                        "iTotalDisplayRecords"=>count($datos), //enviamos el total registros a visualizar
                                        "aaData"=>$data
                                        );
                
                 echo json_encode($resultados);
                    //var_dump($resultados);
                // depurar usando la url del controlador y el metodo listar (op=listar)
                //http://localhost:8080/docs/p/php/correosmasivos/CorreosMasivos-admin-php/controller/ctrl_producto.php?op=listar
                
                break;

            /** //TODO Eliminar Usuario  */
            case "eliminar":
                $mdlProducto->eliminarProducto($_POST["prod_id"]);
                break;

            case "habilitar":
                $mdlProducto->habilitarProducto($_POST["prod_id"]);
                break;

            //crear json segun el id
            case "mostrar": 
                $datos = $mdlProducto->getProducto_x_id($_POST["prod_id"]);
                if(is_array($datos) == true and count(datos) > 0 ){

                    foreach ($datos as $row) {

                            $output['prod_id'] = $row['prod_id'];
                            $output['prod_nom'] = $row['prod_nom'];
                            $output['prod_precio_n'] = $row['prod_precio_n'];
                            $output['prod_precio_p'] = $row['prod_precio_p'];
                            $output['prod_url'] = $row['prod_url'];
                            $output['prod_img'] = $row['prod_img'];
                            $output['prod_cupon'] = $row['prod_cupon'];
                            $output['prod_descripcion'] = $row['prod_descripcion'];
                            
                        }
                    }
                    break;
    }

?>