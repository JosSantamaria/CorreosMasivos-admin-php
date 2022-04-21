<?php

class Usuario extends Conectar {

        /** //TODO Insertar Correo en Base de Datos */

        public function login(){
            $conectar = parent::conexion();
                parent::set_names();

                /** //TODO? isset() comprueba si esta definida la variable */
                if (isset($_POST['enviar'])) { 
                    $usr_correo = $_POST['usr_correo'];
                    $usr_pass = $_POST['usr_pass'];

                    if (empty($usr_correo) and empty($usr_pass)  ) {
                        header("Location: ".Conectar::ruta()."index.php?m=2");
                        exit();
                }else{
                    /** //TODO! Seleccionamos Usuario segun datos proporcionados. */
                    $sql = "SELECT * FROM tm_usuario WHERE usr_correo = ? AND usr_pass = ? AND rol_id = 2";
                    $sql = $conectar->prepare($sql);
                    $sql->bindValue(1,$usr_correo);
                    $sql->bindValue(2,$usr_pass);
                    $sql->execute();
                    //TODO: obtener el resultado de la consulta
                    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

                            /** //TODO* Preguntamos si hay una respuesta en arreglo como minimo y hacemos un SET de variable de $_SESSION; */
                            if (is_array($resultado)==true and count($resultado) > 0) {
                                $_SESSION['rol_id']=$resultado[0]['rol_id'];
                                $_SESSION['usr_nom']=$resultado[0]['usr_nom'];
                                $_SESSION['usr_correo']=$resultado[0]['usr_correo'];
                                $_SESSION['usr_ape_p']=$resultado[0]['usr_ape_p'];
                                $_SESSION['usr_ape_m']=$resultado[0]['usr_ape_m'];
                                
                                
                                header("Location: ".Conectar::ruta()."views/home/index.php");
                                exit();
                            }else {
                                header("Location: ".Conectar::ruta()."index.php?m=1");
                                exit();
                            }
                }
        }
    }

    public function listarUsuarios(){
        $conectar = parent::conexion();
        parent::set_names();

        $sql = "SELECT * FROM tm_usuario WHERE rol_id = 1";
        $sql = $conectar->prepare($sql);
        $sql->execute();

        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        //json_encode($resultado);
    }

    public function eliminarUsuario($usr_id){
        $conectar = parent::conexion();
        parent::set_names();

        $sql = "UPDATE tm_usuario
        SET 
            est = 0 
        WHERE 
            usr_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1,$usr_id);
        $sql->execute();

        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    }

    public function habilitarUsuario($usr_id){
        $conectar = parent::conexion();
        parent::set_names();

        $sql = "UPDATE tm_usuario
        SET 
            est = 1 
        WHERE 
            usr_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1,$usr_id);
        $sql->execute();

        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    }
}
?>