<?php
    require_once '../config/conexion.php';
    require_once '../models/mdl_Usuario.php';

    $mdlUsuario = new Usuario();

    /** Listar todos los usuarios */
    switch ($_GET["op"]) {
        case "listar":
        $datos = $mdlUsuario->listarUsuarios();

        $data = array();
            foreach ($datos as $row) { //Obtenemos los datos de cada fila para la tabla
                $sub_array = array();
                $sub_array[] = $row['usr_id']; //Id de Usuario
                $sub_array[] = $row['usr_correo']; //Correo de Usuario
                $sub_array[] = '<button type="button" onClick="eliminar('.$row['usr_id'].')" id="'.$row['usr_id'].'" class="btn btn-outline-danger"><i class="bx bx-trash"></i></button>'; //Boton de accion eliminar

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

    }

