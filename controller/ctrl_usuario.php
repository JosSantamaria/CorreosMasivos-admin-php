<?php
    require_once '../config/conexion.php';
    require_once '../models/mdl_Usuario.php';

    $mdlUsuario = new Usuario();

    /** Listar todos los usuarios */
    switch ($_GET["op"]){
 
        case "listar":
            $datos = $mdlUsuario->listarUsuarios();
            $data = array();
            foreach ($datos as $row) { //Obtenemos los datos de cada fila para la tabla
                $sub_array = array();
                $sub_array[] = $row['usr_id']; //Id de Usuario
                $sub_array[] = $row['usr_correo']; //Correo de Usuario

                if ( $row['est']==1 ) {
                    $sub_array[] = "<span class='badge badge-pill badge-success'> Subscrito</span>";
                } else {
                    $sub_array[] = "<span class='badge badge-pill badge-danger'> No Subscrito</span>";

                }
                
                if ( $row['est']==1 ) {
                    $sub_array[] = '<button type="button" label="Eliminar Usuario" onClick="eliminar('.$row['usr_id'].')" id="'.$row['usr_id'].'" class="btn btn-outline-danger"><i class="bx bx-trash"></i></button>'; //Boton de accion eliminar
                } else { //considerar el eliminar y deshabilitar el boton
                    $sub_array[] = '<button type="button" label="Habilitar Usuario" onClick="habilitar('.$row['usr_id'].')" id="'.$row['usr_id'].'" class="btn btn-outline-primary"><i class="bx bx-badge-check"></i></button>'; //Boton de accion eliminar

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
            break;

            /** //TODO Eliminar Usuario  */
        case "eliminar":
            $mdlUsuario->eliminarUsuario($_POST["usr_id"]);
            break;

            case "habilitar":
                $mdlUsuario->habilitarUsuario($_POST["usr_id"]);
                break;
    }

?>